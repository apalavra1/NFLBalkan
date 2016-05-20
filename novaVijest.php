<!DOCTYPE html>
<html>
<head>
	<title>Dodavanje vijesti</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stil.css">
	<script src="validacijaVijesti.js"></script>
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
				$message = '';
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
	<?php
		if (isset($_POST['dodaj'])) 
		{
			date_default_timezone_set("Europe/Sarajevo");
            $vijesti = file("vijesti.csv");

            $naslov = htmlentities($_POST['naslov']);
            $naslov = str_replace(",", "&#44;", $naslov);

            $slika = htmlentities($_POST['slika']);
            $slika = str_replace(",", "&#44;", $slika);

            $alt = htmlentities($_POST['alt']);
            $alt = str_replace(",", "&#44;", $alt);
            
            $tekst = htmlentities($_POST['tekst']);
            $tekst = str_replace(",", "&#44;", $tekst);

            $datum = date("d.m.Y");
            $vrijeme = date("H:i:s");

            if(empty($naslov) || !preg_match("/\.(jpeg|jpg|gif|png)/", $slika) || empty($alt) || empty($tekst))
            {
            	$message = "Neki od podataka nije ispravno unesen, pratite upute iznad svakog od polja.";
				echo "<script type='text/javascript'>alert('$message');</script>";
            }
            else
            {
	            $nova = $naslov.",".$slika.",".$alt.",".$tekst.",".$datum.",".$vrijeme."\r\n";
	            array_push($vijesti, $nova);
	            file_put_contents("vijesti.csv", $vijesti);
	            $message = "Uspješno ste dodali vijest.";
	            echo "<script type='text/javascript'>alert('$message');</script>";
            }
    	}

	?>
	<div id="formaVijest">
		<form action="novaVijest.php" method="post">
			<br><label>Naslov(ne smije biti prazno)</label>
			<input id="naslov" type="text" placeholder="Naslov" name="naslov" onfocus="validiraj('naslov')">
			<br>
			<label>URL za sliku(mora biti ispravan i slika)</label>
			<input id="slika" type="url" placeholder="URL slike" name="slika" onfocus="validiraj('slika')">
			<br>
			<label>Alt tag za sliku(ne smije biti prazno)</label>
			<input id="alt" type="text" placeholder="ALT tag" name="alt" onfocus="validiraj('alt')">
			<br>
			<label>Članak (ne smije biti prazno)</label>
			<textarea id="tekst" name="tekst" placeholder="Članak..." onfocus="validiraj('tekst')"></textarea>
			<br>
			<input type="submit" id="dodajBtn" name="dodaj" type="button" value="Pošalji" onclick="return dodaj();"> 
			<br>
		</form>
	</div>
	
	<footer>
		© Copyright NFLBalkan.com 2016 <br>
		Sva prava zadržana. Zabranjeno preuzimanje bez dozvole izdavača
	</footer>
</div>
</body>
</html>