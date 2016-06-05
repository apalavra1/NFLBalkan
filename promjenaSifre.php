<!DOCTYPE html>
<html>
<head>
    <title>Promjena šifre</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="stil.css">
</head>
<body>
<div hidden id="prijavljen"></div>
<div id="container">
    <a href="./pocetna.php"><div id="wrap">
        <div id="n_left"></div>
        <div id="n_center"></div>
        <div id="n_right"></div>

        <div id="f_left"></div>
        <div id="f_bottom"></div>
        <div id="f_top1"></div>
        <div id="f_top1_add"></div>
        <div id="f_top2"></div>
        <div id="f_top2_add"></div>

        <div id="l_left"></div>
        <div id="l_bottom"></div>

        <div id="b_top_outer"></div>
        <div id="b_top_inner"></div>
        <div id="b_bottom_outer"></div>
        <div id="b_bottom_inner"></div>
        <div id="b_left"></div>
    </div></a>
    <header>

        <a class="tim" href="http://www.buffalobills.com/"><img src="http://prod.static.bills.clubs.nfl.com/nfl-assets/img/gbl-ico-team/BUF/logos/home/large.png" alt="BUF">
        </a>

        <a class="tim" href="http://www.miamidolphins.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/MIA/logos/home/large.png" alt="MIA">
        </a>

        <a class="tim" href="http://www.newenglandpatriots.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/NE/logos/home/large.png" alt="NE">
        </a>

        <a class="tim" href="http://www.newyorkjets.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/NYJ/logos/home/large.png" alt="NYJ">
        </a>

        <a class="tim" href="http://www.baltimoreravens.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/BAL/logos/home/large.png" alt="BAL">
        </a>

        <a class="tim" href="http://www.bengals.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/CIN/logos/home/large.png" alt="CIN">
        </a>

        <a class="tim" href="http://www.clevelandbrowns.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/CLE/logos/home/large.png" alt="CLE">
        </a>

        <a class="tim" href="http://www.pittsburghsteelers.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/PIT/logos/home/large.png" alt="PIT">
        </a>

        <a class="tim" href="http://www.houstontexans.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/HOU/logos/home/large.png" alt="HOU">
        </a>

        <a class="tim" href="http://www.indianapoliscolts.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/IND/logos/home/large.png" alt="IND">
        </a>

        <a class="tim" href="http://www.jacksonvillejaguars.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/JAC/logos/home/large.png" alt="JAC">
        </a>

        <a class="tim" href="http://www.titans.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/TEN/logos/home/large.png" alt="TEN">
        </a>

        <a class="tim" href="http://www.denverbroncos.com/"><img src="http://prod.static.broncos.clubs.nfl.com/nfl-assets/img/gbl-ico-team/DEN/logos/home/large.png" alt="DEN">
        </a>

        <a class="tim" href="http://www.kansascitychiefs.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/KC/logos/home/large.png" alt="KC">
        </a>

        <a class="tim" href="http://www.oaklandraiders.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/OAK/logos/home/large.png" alt="OAK">
        </a>

        <a class="tim" href="http://www.sandiegochargers.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/SD/logos/home/large.png" alt="SD">
        </a>

        <a class="tim" href="http://www.dallascowboys.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/DAL/logos/home/large.png" alt="DAL">
        </a>

        <a class="tim" href="http://www.newyorkgiants.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/NYG/logos/home/large.png" alt="NYG">
        </a>        

        <a class="tim" href="http://www.philadelphiaeagles.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/PHI/logos/home/large.png" alt="PHI">
        </a>

        <a class="tim" href="http://www.washingtonredskins.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/WAS/logos/home/large.png" alt="WAS">
        </a>

        <a class="tim" href="http://www.chicagobears.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/CHI/logos/home/large.png" alt="CHI">
        </a>

        <a class="tim" href="http://www.detroitlions.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/DET/logos/home/large.png" alt="DET">
        </a>

        <a class="tim" href="http://www.greenbaypackers.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/GB/logos/home/large.png" alt="GB">
        </a>

        <a class="tim" href="http://www.minnesotavikings.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/MIN/logos/home/large.png" alt="MIN">
        </a>

        <a class="tim" href="http://www.atlantafalcons.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/ATL/logos/home/large.png" alt="ATL">
        </a>

        <a class="tim" href="http://www.carolinapanthers.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/CAR/logos/home/large.png" alt="CAR">
        </a>

        <a class="tim" href="http://www.neworleanssaints.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/NO/logos/home/large.png" alt="NO">
        </a>

        <a class="tim" href="http://www.buccaneers.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/TB/logos/home/large.png" alt="TB">
        </a>

        <a class="tim" href="http://www.arizonacardinals.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/ARI/logos/home/large.png" alt="ARI">
        </a>

        <a class="tim" href="http://www.losangelesrams.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/STL/logos/home/large.png" alt="STL">
        </a>

        <a class="tim" href="http://www.sanfrancisco49ers.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/SF/logos/home/large.png" alt="SF">
        </a>

        <a class="tim" href="http://www.seattleseahawks.com/"><img src="http://prod.static.dolphins.clubs.nfl.com/nfl-assets/img/gbl-ico-team/SEA/logos/home/large.png" alt="SEA">
        </a>

    </header>

    <div id="title">
        <h2>NFL Balkan</h2>
    </div>

    <nav>
        <ul>
            <li><a class="nav" href="./pocetna.php">Naslovnica</a></li>
            <li><a class="nav" href="./timovi.php">Timovi</a></li>
            <li><a class="nav" href="./linkovi.php">Linkovi</a></li>
            <li><a class="nav" href="./kontakt.php">Kontakt</a></li>
            <?php
                session_start();
                if(isset($_SESSION['login']))
                {
                    if($_SESSION['userName'] == "admin")
                    {
            ?>
            <li id="autori"><a class="nav" href="./autori.php">Autori</a></li>
            <?php
                    }
                }
            ?>
            <?php
                ob_start();
                if(isset($_SESSION['login'])) 
                {
            ?>
            <li id="novaVijest"><a class="nav" href="./novaVijest.php">Nova vijest</a></li>
            <li id="logout"><a class="nav" href="./logout.php">Odjava</a></li>
            <li id="promjenaSifre"><a class="nav" href="./promjenaSifre.php">Šifra</a></li>
            <?php
                }
            ?>
            <?php
                if(!isset($_SESSION['login']))
                {
            ?>
            <li id="login"><a class="nav" href="./login.php">Prijava</a></li>
            <?php
                }
            ?>
        </ul>
    </nav>
    <?php
        $msg = '';


        if(isset($_POST['potvrda'])) 
        {        
            $stari = sha1($_POST['stari']);
            $novi = sha1($_POST['novi']);
            $potvrda = sha1($_POST['potvrdaNovog']);
            
            $veza = new PDO("mysql:dbname=nfl_balkan;host=localhost;charset=utf8","nfluser", "nflpass");
            $veza->exec("set names utf8");

            $upitStari = $veza->prepare("SELECT password FROM autor  WHERE username=:usernameStari");
            $upitStari->bindValue(":usernameStari", $_SESSION['userName'], PDO::PARAM_STR);
            $upitStari->execute();

            $korisnik = $upitStari->fetch();

            if($stari == $korisnik['password'] && strlen($novi) > 3 && $novi == $potvrda)
            {
                $upit = $veza->prepare("UPDATE autor SET password=:password  WHERE username=:username");
                
                $upit->bindValue(":password", $novi, PDO::PARAM_STR);
                $upit->bindValue(":username", $_SESSION['userName'], PDO::PARAM_STR);
                $upit->execute();

                $msg = "Uspjesno ste promijenili sifru. Vratite se na pocetnu stranicu.";
                header('Refresh: 1; URL = ./pocetna.php');
            }
            else 
            {
                $msg = "Unesite ispravnu šifru. Nova šifra mora sadržavati 4 karaktera. Potvrda nove šifre mora biti ista kao i nova šifra.";
            }    
        }
        

    ?>
    <div id="formaPromjenaSifre">
        <form action="promjenaSifre.php" method="post">
              <br><input id="stari"  name="stari" type="password" required placeholder="Stara šifra" /><br><br>
              <input id="novi" name="novi" type="password" required placeholder="Nova šifra" /><br><br>
              <input id="potvrdaNovog" name="potvrdaNovog" type="password" required placeholder="Potvrda nove šifre" /><br><br>
              <input id="potvrdaPromjeneSifre" type="submit" name="potvrda" value="Potvrdi"><br>
              <h4><?php echo $msg; ob_end_flush(); ?></h4> <br>
        </form>       
    </div>
    <footer>
        © Copyright NFLBalkan.com 2016 <br>
        Sva prava zadržana. Zabranjeno preuzimanje bez dozvole izdavača
    </footer>
</body>
</html>