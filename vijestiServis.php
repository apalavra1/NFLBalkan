<?php
    function zag() 
    {
        header("{$_SERVER['SERVER_PROTOCOL']} 200 OK");
        header('Content-Type: text/html');
        header('Access-Control-Allow-Origin: *');
    }
    function rest_get($request, $data) 
    {
        define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
        define('DB_PORT',getenv('OPENSHIFT_MYSQL_DB_PORT'));
        define('DB_USER',getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
        define('DB_PASS',getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
        define('DB_NAME',getenv('OPENSHIFT_GEAR_NAME'));
        $connectionString = 'mysql:dbname='.DB_NAME.';host='.DB_HOST.';port='.DB_PORT;
        $veza = new PDO($connectionString, DB_USER, DB_PASS);
        $veza->exec("set names utf8");

        $upitVijesti = $veza->prepare("SELECT * from vijest where autor=:autor");

        $upitVijesti->bindValue(":autor", $data['autor'], PDO::PARAM_INT);

        $upitVijesti->execute();

        $nizVijesti = array();

        $brojac = 0;

        foreach ($upitVijesti as $vijest) 
        {
            if($brojac < $data['x'])
            { 
                $vijesti[] = array('id' => $vijest['id'],
                                   'naslov' => $vijest['naslov'],
                                   'url' => $vijest['url'],
                                   'alt' => $vijest['alt'], 
                                   'clanak' => $vijest['clanak'],
                                   'vrijeme' => $vijest['vrijeme'],
                                   'autor' => $vijest['autor'],
                                   'komentari' => $vijest['komentari']);
                $nizVijesti[] = $vijesti;
                $vijesti = null;
            }
            $brojac++;
        }

        $nizVijestiString = json_encode($nizVijesti);
        print $nizVijestiString;

    }
    function rest_post($request, $data) { }
    function rest_delete($request) { }
    function rest_put($request, $data) { }
    function rest_error($request) { }

    $method  = $_SERVER['REQUEST_METHOD'];
    $request = $_SERVER['REQUEST_URI'];

    switch($method) 
    {
        case 'PUT':
            parse_str(file_get_contents('php://input'), $put_vars);
            zag(); $data = $put_vars; rest_put($request, $data); break;
        case 'POST':
            zag(); $data = $_POST; rest_post($request, $data); break;
        case 'GET':
            zag(); $data = $_GET; rest_get($request, $data); break;
        case 'DELETE':
            zag(); rest_delete($request); break;
        default:
            header("{$_SERVER['SERVER_PROTOCOL']} 404 Not Found");
            rest_error($request); break;
    }

?>