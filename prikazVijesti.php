<!DOCTYPE html>
<html>

<head>
	<title>Detaljni prikaz vijesti</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stil.css">
	<script src="vrijemeObjave.js"></script>
	<script src="filterVijesti.js"></script>
</head>

<body>
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
            ?>
            <li id="novaVijest"><a class="nav" href="./novaVijest.php">Nova vijest</a></li>
            <li id="logout"><a class="nav" href="./logout.php">Odjava</a></li>
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
	
	<div id="content">
		<section>
			<?php
				$ID;
				$komentarID;
				$veza = new PDO("mysql:dbname=nfl_balkan;host=localhost;charset=utf8", "nfluser", "nflpass");
				$veza->exec("set names utf8");
				$upitVijesti = $veza->query("select id, naslov, url, alt, clanak, UNIX_TIMESTAMP(vrijeme) vrijeme2, autor, komentari from vijest where id = ".$_GET['vijest']);

				$mogucnostKomentarisanja;
				
				foreach ($upitVijesti as $vijest) 
				{
					$upitAutorVijesti = $veza->query("select username from autor where id = ".$vijest['autor']);
					$userAutoraVijesti = $upitAutorVijesti->fetchColumn();

					$IDautora = $vijest['autor'];
					$ID = $vijest['id'];

					print("<article id='featured_news'>");
					print("<h3>");
					print($vijest['naslov']);
					print("</h3>");
					print("<a href='pocetna.php?autor=$IDautora'>".$userAutoraVijesti."</a>");
					print('<img src="');
					print($vijest['url']);
					print('"'); print(' alt="');
					print($vijest['alt']); print('">');
					print("<p>"); 
					print($vijest['clanak']);
					print('</p><div hidden class="date_published">');
					print(date('r', $vijest['vrijeme2']));
					print('</div><br><div class="published"></div></article>');

					$mogucnostKomentarisanja = $vijest['komentari'];
				}

				if(isset($_POST['komentarBtn']))
				{
					$komentar = htmlentities($_POST['komentar']);
					$vijestID = $ID;
					$upitAutor = $veza->prepare("SELECT id FROM autor WHERE username=:username");
            	
            		$upitAutor->bindValue(":username", $_SESSION['userName'], PDO::PARAM_STR);

            		$upitAutor->execute();
            		$korisnik = $upitAutor->fetch();
            	
            		$autor = $korisnik['id'];
					
					$veza = new PDO("mysql:dbname=nfl_balkan;host=localhost;charset=utf8", "nfluser", "nflpass");
					$veza->exec("set names utf8");
					$upit = $veza->prepare("INSERT INTO komentar SET tekst=:komentar, vijest=:vijestID, autor=:autor");
					
					$upit->bindValue(":komentar", $komentar, PDO::PARAM_STR);
					$upit->bindValue(":vijestID", $vijestID, PDO::PARAM_INT);
					$upit->bindValue(":autor", $autor, PDO::PARAM_INT);

	    			$upit->execute();

	    			header('URL = ./prikazVijesti.php?vijest='.urlencode($vijestID));
				}

				if(isset($_POST['odgovorBtn']))
				{
					$odgovor = htmlentities($_POST['odgovor']);
					$vijestID = $ID;
					$upitAutor = $veza->prepare("SELECT id FROM autor WHERE username=:username");
            	
            		$upitAutor->bindValue(":username", $_SESSION['userName'], PDO::PARAM_STR);

            		$upitAutor->execute();
            		$korisnik = $upitAutor->fetch();
            	
            		$autor = $korisnik['id'];
					$odgovor_na = $_POST['komentarID']; 
					
					$veza = new PDO("mysql:dbname=nfl_balkan;host=localhost;charset=utf8", "nfluser", "nflpass");
					$veza->exec("set names utf8");
					$upit = $veza->prepare("INSERT INTO komentar SET tekst=:odgovor, vijest=:vijestID, autor=:autor, odgovor_na=:odgovor_na");
					
					$upit->bindValue(":odgovor", $odgovor, PDO::PARAM_STR);
					$upit->bindValue(":vijestID", $vijestID, PDO::PARAM_INT);
					$upit->bindValue(":autor", $autor, PDO::PARAM_INT);
					$upit->bindValue(":odgovor_na", $odgovor_na, PDO::PARAM_INT);

	    			$upit->execute();

	    			header('URL = ./prikazVijesti.php?vijest='.urlencode($vijestID));
				}
				
				if($mogucnostKomentarisanja == 1)
				{
					print('<div id="komentar_forma">');
					print('<form method="post">');
					print('<br><label>Komentar</label><br><br>');
					print('<textarea id="komentar" name="komentar" placeholder="Unesite svoj komentar..."></textarea>');
					print('<input type="submit" id="komentarBtn" name="komentarBtn" value="Komentariši"><br>');
					print('</form>');
					print('</div><br><h3>Komentari</h3>');

					$upitKomentari = $veza->query("select id, tekst, UNIX_TIMESTAMP(vrijeme) vrijeme2, autor from komentar where vijest = ".$_GET['vijest']." and odgovor_na is null");
					foreach ($upitKomentari as $komentar) 
					{
						$upitAutor = $veza->query("select username from autor where id = ".$komentar['autor']);
						$userAutora = $upitAutor->fetchColumn();
						
						print '<div class="komentar_container">';
						print '<small id="autor">'.$userAutora.'</small>';
						print '<p id="tekst" name="komentar" readonly>'.$komentar['tekst'].'</p>';
						if(isset($_SESSION['login']))
						{
							if($_SESSION['userName'] == "admin")
							{ 
								print '<form method="post">';
								print '<input type="submit" id="obrisiKomentar" name="obrisiKomentar" value="Obriši">';
								print '<input type="hidden" name="idKomentara" value='.$komentar['id'].'>';
								print '</form>';
							}	
						}
						print '</div>';

						$upitOdgovori = $veza->query("select id, tekst, UNIX_TIMESTAMP(vrijeme) vrijeme2, autor, vijest from komentar where odgovor_na = ".$komentar['id']);
						foreach ($upitOdgovori as $odgovor)
						{
							$upitAutorOdgovor = $veza->query("select username from autor where id = ".$odgovor['autor']);
							$userAutoraOdgovor = $upitAutorOdgovor->fetchColumn();
							print '<div class="odgovor_container">';
							print '<small id="autor">'.$userAutoraOdgovor.'</small>';
							print '<p id="tekst" name="komentar" readonly>'.$odgovor['tekst'].'</p>';
							if(isset($_SESSION['login']))
							{
								if($_SESSION['userName'] == "admin")
								{ 
									print '<form method="post">';
									print '<input type="submit" id="obrisiOdgovor" name="obrisiOdgovor" value="Obriši">';
									print '<input type="hidden" name="idOdgovora" value='.$odgovor['id'].'>';
									print '</form>';
								}	
							}
							print '</div>';
						}

						print '<div class="odgovor_forma">';
						print('<form method="post">');
						print('<br><textarea id="odgovor" name="odgovor" placeholder="Unesite svoj odgovor..."></textarea>');
						print('<input type="submit" id="odgovorBtn" name="odgovorBtn" value="Odgovori"><br>');
						print "<input type='hidden' name='komentarID' value=".$komentar['id'].">"; 
						print('</form>');
						print('</div><br>');
					}

					if(isset($_POST['obrisiKomentar']))
					{
						$upitObrisiOdgovore = $veza->query("DELETE from komentar where odgovor_na = ".$_POST['idKomentara']);
						$upitObrisi = $veza->query("DELETE from komentar where id = ".$_POST['idKomentara']);
						header('Refresh: 0; URL = ./prikazVijesti.php?vijest='.urlencode($_GET['vijest']));
					}

					if(isset($_POST['obrisiOdgovor']))
					{
						$upitObrisi = $veza->query("DELETE from komentar where id = ".$_POST['idOdgovora']);
						header('Refresh: 0; URL = ./prikazVijesti.php?vijest='.urlencode($_GET['vijest']));
					}
				}
										 
			?>


		</section>

		<aside>
			<img class="sa_strane" src="http://static.nfl.com/static/content/public/photo/2016/03/18/0ap3000000645587.jpg" alt="Peyton Manning">
			<h3>Peyton-ov oproštaj od Colts-a</h3>
			<ul>
				<li><a href="http://www.nfl.com/news/story/0ap3000000645568/article/indianapolis-colts-to-construct-peyton-manning-statue">Colts-i povlače broj 18, grade kip Peytona</a> </li>

				<li><a href="http://www.nfl.com/videos/indianapolis-colts/0ap3000000645602/Best-of-Peyton-Manning-Press-Conference">Pogledajte najbolje momente sa Manning-ove press konferencije</a></li>

				<li><a href="http://www.nfl.com/videos/indianapolis-colts/0ap3000000645582/What-are-Peyton-s-plans-for-first-year-post-retirement">Planovi za prvu godinu u penziji</a></li>

				<li><a href="http://www.nfl.com/videos/nfl-videos/0ap3000000645583/Peyton-remembers-Colts-teammates-2006-Super-Bowl-team">Manning hvali tim koji je osvojio Super Bowl 2006.-te</a></li>
			</ul>
		</aside>

	</div>
	<footer>
		© Copyright NFLBalkan.com 2016 <br>
		Sva prava zadržana. Zabranjeno preuzimanje bez dozvole izdavača
	</footer>
</div>
</body>
</html>