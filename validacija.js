	function validiraj(varijabla)
	{
		if(varijabla == "ime") var pom = setInterval(function() { validirajImePrezime("ime") }, 100);
		else if(varijabla == "prezime") var pom = setInterval(function() { validirajImePrezime("prezime") }, 100);
		else if(varijabla == "email") var pom = setInterval(function() { validirajEmail() }, 100);
		else if(varijabla == "clanak") var pom = setInterval(function() { validirajClanak() }, 100);
		else if(varijabla == "username") var pom = setInterval(function() { validirajUsername() }, 100);
		else if(varijabla == "password") var pom = setInterval(function() { validirajPassword() }, 100);
		else if(varijabla == "potvrda") var pom = setInterval(function() { validirajPotvrdu() }, 100);
	}


	function validirajImePrezime(varijabla) 
	{
		var validno = false;
		var imePrezime = document.getElementById(varijabla);
		var re = /^[A-Z][a-z]{1,15}$/gm;
		if(!re.test(imePrezime.value)) imePrezime.style.backgroundColor = "red";
		else
		{
		 	imePrezime.style.backgroundColor = "white";
		 	validno = true;
		}
		return validno;
	}

	function validirajEmail()
	{
		var validno = false;
		var email = document.getElementById("email");
		var re = /\S+@\S+\.\S+/gm;
		var emailString = email.value;
		var ime = document.getElementById("ime").value;
		var prezime = document.getElementById("prezime").value;
		if( !(re.test(email.value) && ( emailString.indexOf(ime.toLowerCase()) > -1  || emailString.indexOf(prezime.toLowerCase()) > -1) )  ) email.style.backgroundColor = "red";
		else
		{
			email.style.backgroundColor = "white";
			validno = true;
		}
		return validno;
	}

	function validirajClanak()
	{
		var validno = false;
		var clanak = document.getElementById("clanak")
		var clanakString = clanak.value;
		if( clanakString.length == 0 ) clanak.style.backgroundColor = "red";
		else 
		{
			clanak.style.backgroundColor = "white";
			validno = true;
		}
		return validno;
	}

	function validirajDvoslovniKod()
	{
		var ajax = new XMLHttpRequest();
		var drzava = document.getElementById("drzava").value.toLowerCase(); 
	
		ajax.open("GET", "https://restcountries.eu/rest/v1/alpha?codes=" + drzava, true);
	
		ajax.onreadystatechange = function() 
		{		
			if (ajax.readyState == 4 && ajax.status == 404) alert("Greska.");
			else
			{
				var json = JSON.parse(ajax.responseText);
				document.getElementById("telefon").value = "+" + json[0].callingCodes;
			}
		}
		ajax.send();
	}

	function validirajPozivniBroj()
	{
		var validno = false;
		var ajax = new XMLHttpRequest();
		var drzava = document.getElementById("drzava").value.toLowerCase(); 
	
		ajax.open("GET", "https://restcountries.eu/rest/v1/alpha?codes=" + drzava, true);
	
		ajax.onreadystatechange = function() 
		{		
			if (ajax.readyState == 4 && ajax.status == 404) alert("Greska.");
			else
			{
				var json = JSON.parse(ajax.responseText);
				var brojTelefona = document.getElementById("telefon").value.split('+').join("");
				if(brojTelefona.substr(0, 1) == json[0].callingCodes || brojTelefona.substr(0, 2) == json[0].callingCodes || brojTelefona.substr(0, 3) == json[0].callingCodes || brojTelefona.substr(0, 4) == json[0].callingCodes)
				{
					validno = true;
				}
				else
				{
					alert("Pozivni broj nije ispravan za unesenu drzavu.");
				}
			}
		}
		ajax.send();
		return validno;	
	}

	function dajDrzavu()
	{
		var ajax = new XMLHttpRequest();
		var drzava = document.getElementById("drzava").value.toLowerCase();

		ajax.open("GET", "https://restcountries.eu/rest/v1/alpha?codes=" + drzava, true);

		ajax.onreadystatechange = function() 
		{		
			if (ajax.readyState == 4 && ajax.status == 404) alert("Greska.");
			else
			{
				var json = JSON.parse(ajax.responseText);
				document.getElementById("opcija").innerHTML = json[0].name;
			}
		}
		ajax.send();
	}

	function validirajUsername()
	{
		var validno = false;
		var username = document.getElementById("user")
		var usernameString = username.value;
		if( usernameString.length == 0 ) username.style.backgroundColor = "red";
		else 
		{
			username.style.backgroundColor = "white";
			validno = true;
		}
		return validno;
	}

	function validirajPassword()
	{
		var validno = false;
		var password = document.getElementById("password")
		var passwordString = password.value;
		if( passwordString.length < 4 ) password.style.backgroundColor = "red";
		else 
		{
			password.style.backgroundColor = "white";
			validno = true;
		}
		return validno;
	}

	function validirajPotvrdu()
	{
		var validno = false;
		var password = document.getElementById("password")
		var potvrda = document.getElementById("potvrda");
		var passwordString = password.value;
		var potvrdaString = potvrda.value;
		if( potvrdaString != passwordString ) potvrda.style.backgroundColor = "red";
		else 
		{
			potvrda.style.backgroundColor = "white";
			validno = true;
		}
		return validno;
	}

	

	function posalji()
	{
		if(validirajImePrezime("ime") && validirajImePrezime("prezime") && validirajEmail() && validirajClanak() )
			alert("Uspješno ste poslali članak.")
		else alert("Neka od vrijednosti nije ispravno unesena!");
		return true;
	}

	function spasiAutora()
	{
		var validno = true;
		if( validirajImePrezime("ime") && validirajImePrezime("prezime") && validirajEmail() && validirajPozivniBroj() && validirajUsername() && validirajPassword() && validirajPotvrdu() )
			validno = true;
		
		var phpValidno = document.getElementById("validno");
		if(validno == true) phpValidno.value = "moze";
		else phpValidno.value = "ne moze";
	}

	function nesto()
	{
		var phpValidno = document.getElementById("validno");
		phpValidno.value = "moze";
	}
