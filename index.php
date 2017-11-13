<?php

	session_start();
	
	if(isset($_POST['first_name']))
	{
		 $wszystko_OK=true;
		
		$first_name = $_POST['first_name'];
		
		if((strlen($first_name)<1))
		{
			$wszystko_OK=false;
			$_SESSION['e_first_name']="Imię nie może przekraczać 15 znaków!";
			
		}
		else{
			header('Location: index.php#wspolpraca');
		}
	}
?>

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN"
"http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html lang="pl">
<head>
	
	<meta charset="utf-8"/>
	<title>Viktoria Meble </title>
	
	<meta name="Author" content="Kamil Laskowski"/>
	<meta name=”keywords” content=" Meble na wymiar"/>
	<meta name="handheldFriendly" content="true" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Shrikhand" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lobster" rel="stylesheet">

	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
	<script type="text/javascript" src="js/spinners/spinners.min.js"></script>
	<script type="text/javascript" src="js/lightview/lightview.js"></script>
	<link rel="stylesheet" type="text/css" href="css/lightview/lightview.css" />	
 
</head>
<body>

<div id="links">
phone number and some links
</div>
<div id="sing_in">
	<h1>Viktoria Meble  <span id="logo">"Meble na wymiar na każdą kieszeń"</span></h1>
</div>
<div id="conteiner2">
<div id="menu">
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active" id="1"><a href="#content">Home</a></li>
      <li id="2"><a href="#oferta">Oferta</a></li>
      <li id="3"><a href="#galeria">Galeria</a></li>
	  <li id="4"><a href="#wspolpraca">Opinie klientów</a></li>
	  <li id="5"><a href="#kontakt">Kontakt</a></li>
	  <li id="6"><a href="#">PROMOCJA</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a  id="b_rejestr" href="#"><span class="glyphicon glyphicon-user"></span> Rejestracja</a></li>
      <li><a id="myBtn" href="#"><span class="glyphicon glyphicon-log-in" ></span>  Logowanie</a></li>
    </ul>
  </div>
</nav>
</div>

<div id="mini_gal">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="zdj1.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="zdj2.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="zdj3.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div id="content">
<h1> Dlaczego warto z nami współpracowac??</h1>
<h3>Wysoka jakość stosowanych materiłów</h3> Jeśli planujesz remont kuchni, łazienki, sypialni czy garderoby, to wiedz, że możesz na nas liczyć. To na co stawia nasza firma, to najwyższa jakość stosowanych materiałów, z których wykonujemy meble na wymiar. Gwarantujemy, że są to najlepsze produkty, jakie można znaleźć na rynku, dlatego wiemy, że będą Ci służyć przez wiele lat. Projekty naszych mebli to proste, eleganckie formy, które nie przestaną być modne w kolejnym sezonie.
<br/><br/>
<h3>Wysoka funkcjonalność oraz trwałość</h3>Każdy kto lubi gotować, zdaje sobie sprawę z tego, że to najważniejsza cecha mebli kuchennych na wymiar. Poza tym jesteśmy w stanie dopasować je do nawet najbardziej nietypowych pomieszczeń, do których kupno gotowych mebli jest niemożliwe. A jeśli miejsce, w którym urządzasz kuchnię, zalicza się do „typowych”, gwarantujemy, że wykorzystamy tę przestrzeń w najlepszy możliwy sposób. Sam zdecydujesz, z jakich dodatków chcesz skorzystać, ale jedno wiemy na pewno – Twoje meble na wymiar będą wykonane bardzo dokładnie i profesjonalnie.
<br/><br/>
<h3>Spełnimy twoje najwieksze oczekiwania</h3>Swoje usługi świadczymy na teranie całego województwa mazowieckiego. W naszej ofercie znajdziesz jeszcze więcej propozycji – od szaf, poprzez meble do łazienki, garderoby, meble do salonu, nowoczesne kuchnie, aż po te, które świetnie nadadzą się do biura. Viktoria Meble to dobry wybór, więc jeśli zależy Ci na doskonałej jakości mebli na wymiar, które nie znudzą Ci się, ani nie zniszczą przez wiele lat, to koniecznie wybierz usługi naszej firmy – gwarantujemy, że jest to (wyglądająca naprawdę elegancko) inwestycja na całe pokolenia.
<h3>Wieloletnie doświadczenie</h3> naszej firmy pozwala nam na realizację najbardziej wyszukanych nowoczesnych mebli, nietypowych projektów dopasowanych do indywidualnych potrzeb każdego Klienta. Z najwyższą starannością projektujemy oraz wykonujemy dla klientów meble kuchenne na zamówienie, w tym nowoczesne kuchnie jak również kuchnie klasyczne, łącznie z przygotowaniem dokumentacji projektowej oraz kompleksowym montażem mebli. Montaż mebli kuchennych wykonujemy łącznie z montażem sprzętu AGD do zabudowy. To wszystko sprawia, że z naszych rąk wychodzą funkcjonalne, nowoczesne, a przy tym w pełni wyposażone oryginalne meble, które będą Państwu służyć wiele lat.


</div>
<div id="oferta">
<h1>Naszą wielką pasją jest produkcja nowoczesnych mebli kuchennych.</h1>
<br/><br/>
<h3>Ponadto wykonujemy również:</h3> -szafy wnękowe na wymiar<br/> -meble pokojowe<br/> -meble do salonu<br/> -garderoby<br/> -meble łazienkowe<br/>-meble biurowe oraz inne wszelkiego rodzaju nietypowe zabudowy meblowe pod każdy wymiar.<br/>
<br/>
<h3>Propozycja frontów kuchennych na kuchnię:</h3>
-fronty laminowane gładkie lub drewnopodobne,<br/>
-fronty MDF lakierowane w półmacie lub wysoki połysk,<br/>
-fronty drewno lite: sosna, buk, dąb oraz drewno egzotyczne,<br/>
-forniry naturalne oraz modyfikowane matowe lub w połysku,<br/>
-NOWOŚĆ NA RYNKU– FRONTY MODULOFORM – Galeria<br/>
-oraz elementy graficzne mebli<br/>

<h3>Etapy działania naszej firmy:</h3>
<br/>
-pomiar i doradztwo u klienta,<br/>
-przygotowanie projektu,<br/>
-przedstawienie oferty,<br/>
-podpisanie umowy,<br/>
-przekazanie na produkcję,<br/>
-montaż mebli u klienta.<br/>

</div>
<div id="galeria" class='demonstrations'>

    <a href="img/obr1.jpg"  class='lightview'
         data-lightview-group='example'><img class="photo" src="img/obr1.jpg" alt="aaa"/></a>
    <a href="img/obr2.jpg"  class='lightview'
         data-lightview-group='example'><img class="photo" src="img/obr2.jpg" alt="aaa"/></a>
    <a href="img/obr3.jpg"  class='lightview'
         data-lightview-group='example'><img class="photo" src="img/obr3.jpg" alt="aaa"/></a>
    <a href="img/obr4.jpg"  class='lightview'
         data-lightview-group='example'><img class="photo" src="img/obr4.jpg" alt="aaa"/></a>
    <a href="img/obr5.jpg"  class='lightview'
         data-lightview-group='example'><img class="photo" src="img/obr5.jpg" alt="aaa"/></a>
    <a href="img/obr6.jpg"  class='lightview'
         data-lightview-group='example'><img class="photo" src="img/obr6.jpg" alt="aaa"/></a>
    <a href="img/obr10.jpg"  class='lightview'
         data-lightview-group='example'><img class="photo" src="img/obr10.jpg" alt="aaa"/></a>
    <a href="img/obr11.jpg"  class='lightview'
         data-lightview-group='example'><img class="photo" src="img/obr11.jpg" alt="aaa"/></a>
    <a href="img/obr17.jpg"  class='lightview'
         data-lightview-group='example'><img class="photo" src="img/obr17.jpg" alt="aaa"/></a>
    <a href="img/obr19.jpg"  class='lightview'
         data-lightview-group='example'><img class="photo" src="img/obr19.jpg" alt="aaa"/></a>


</div>
<div id="rejestr">
	      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Rejestracja </h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Imię</label>
              <input type="text" name="first_name" class="form-control" id="usrname" placeholder="Podaj swoje imię" >
            </div>
          
            <?php
			  if(isset($_SESSION['e_first_name']))
			  {
				echo'<div class="error">'.$_SESSION['e_first_name'].'</div>';
				unset($_SESSION['e_first_name']);
			  }
			  ?>
             <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Nazwisko</label>
              <input type="text" name="last_name" class="form-control" id="usrname" placeholder="Podaj swoje nazwisko" >
            </div>
             <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Adres e-mail</label>
              <input type="text" name="r_email" class="form-control" id="usrname" placeholder="Wpisz adres e-mail" >
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Hasło</label>
              <input type="password" name="haslo1" class="form-control" id="psw" placeholder="Wpisz hasło" >
            </div>
             <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Powtórz hasło</label>
              <input type="password" name="haslo2" class="form-control" id="psw" placeholder="Powtórz hasło" >
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Zarejestruj</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Anuluj</button>
          
        </div>
      </div>
</div>
<div id="wspolpraca">
 
</div>
<div id="kontakt">
   <div id="left">
    <h1>Zapraszamy do współpracy</h1>
    <p>Jacek Salwa</p>
    <p>06-406 Opinogóra Górna</p>
    <p>Dzbonie 39</p>
    <p>NIP 5661877599</p>
    <p>REGON 365764329</p>
	<p>Telefon 530-837-707</p>
	<hr/><hr/>
	<hr/>
	<hr/>
	<h3>Napisz do nas!:)</h3>
	<form>
			<label class="form">Imię i nazwisko</label>
		<input id="imie" name="name" placeholder="..............."><br />
			
			<label class="form">Email</label><br/>
			<input id="email" name="email" type="email" placeholder="Podaj mail na który mamy odpisać"><br />
			
			<label class="form">Wiadmość</label>
			<textarea id="submit" name="submit" type="submit" value="Wyślij"></textarea><br />
			 <button type="submit" id="wyslij">Wyślij</button>
		</form>
	
	</div>
	<div id="right">
		
		<h2>Znajdz nas na mapie</h2>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9620.042830200586!2d20.690804550414654!3d52.93023467830199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471c2b700ec61ff5%3A0x3d5ca84dd0907019!2s06-406+Dzbonie!5e0!3m2!1spl!2spl!4v1509920453740" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		
	</div>
	<div style="clear: both"></div>
</div>
</div>
<div id="footer">
	
</div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Logowanie </h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="zaloguj.php" method="post">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Adres e-mail</label>
              <input type="text" name="email" class="form-control" id="usrname" placeholder="Wpisz adres e-mail" >
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Hasło</label>
              <input type="password" name="haslo" class="form-control" id="psw" placeholder="Wpisz hasło" >
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Anuluj</button>
          
        </div>
      </div>
      
    </div>
  </div> 
</div>

</div>

 <script type="text/javascript" src="js/main.js"></script>
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>






</body>
</html>