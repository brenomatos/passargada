<!DOCTYPE html>
<html>

  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans|Dosis:400,800" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Lato:300|Grand+Hotel" rel="stylesheet" type="text/css" />

    <title>Projeto Passargada</title>
  </head>


  <body>

  	<!-- TOP NAVIGATION -->
  	<div class="header">

  		<!-- Logo -->
  		<div class="logo">
  			<a href="index.php">
  				<img src="imgs/logo-transp.png" alt="Project Passargada"> 
  			</a>
  		</div>
  		<!-- Buscador -->
  		<form name="busca" action="busca.php">
  			<input type="text" name="search" placeholder="Busque um livro...">
  			<button type="submit" class="botao">Ir</button>
  		</form>
  		
  		<!-- Sign-in -->
  		<div class="header-right">
  			<a href="perfil.php">Perfil</a>
  		</div>

  	</div>
    

    	<!-- Apresentação  ou <br> <br>-->
  	<h1 class="apres">Project Pasargada</h1>
  	

  	<!-- SLIDESHOW -->
  	<div class="slideshow-container">
  		
  		<!-- Primeira imagem -->
  		<div class="mySlides fade">
  			<div class="numbertext">1 / 3</div>
  			<img class = "slidesimg" src="imgs/teste.jpg" style="width:100%">
  			<div class="text"></div>
  		</div>
  		
  		<!-- Segunda imagem -->
  		<div class="mySlides fade">
  			<div class="numbertext">2 / 3</div>
  			<img class = "slidesimg" src="imgs/dia-nacional-do-livro.jpg" style="width:100%">
  			<div class="text"></div>
  		</div>
  		
  		<!-- Terceira imagem -->
  		<div class="mySlides fade">
  			<div class="numbertext">3 / 3</div>
  			<img class = "slidesimg" src="imgs/banner.jpg" style="width:100%">
  			<div class="text"></div>
  		</div>
  		
  		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  		<a class="next" onclick="plusSlides(1)">&#10095;</a>
  		
  		</div>
  	<br>
  	
  	<div style="text-align:center">
  		<span class="dot" onclick="currentSlide(1)"></span> 
  		<span class="dot" onclick="currentSlide(2)"></span> 
  		<span class="dot" onclick="currentSlide(3)"></span> 
  	</div>


<!-- FUNCAO PARA BUSCAR LIVROS MAIS LIDOS -->

<center><h1 style="text-shadow: 2px 2px 5px black;">OS MAIS LIDOS DO MÊS</h1></center>

<?php
	$servername = "localhost";
	$username = "phpmyadmin";
	$password = "pazeiluminacao";
	$dbname = "passargada";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
			
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT id_book, title FROM (SELECT books.title, books_read.id_book, SUM(books_read.bool_read) qtd FROM books_read join books on books.id = books_read.id_book GROUP BY books_read.id_book ORDER BY qtd DESC) AS result LIMIT 10";


//$result CONTEM ID'S DOS 10 LIVROS MAIS LIDOS
$result = $conn->query($query);

$conn->close();

// output data of each row
$x = 0;

echo "<br> <div class = \"tabela\"> <table width=100% border=\"0\" cellpadding=\"5\"> <tr>";

while($row = $result->fetch_assoc())
{
	echo "<td align=\"center\" valign=\"center\"><a href=\"livro.php?id=";
	echo $row["id_book"];
	echo "\"> <img src=\"imgs/nao-disp.png\" alt=\"Livro 1\" width=241px height=\"346px\" /> <br>";
	echo $row["title"];
	echo "</a> </td>";

	if($x == 4)
		echo "</tr> <tr>";

	$x += 1;
}

echo "</tr> </table> </div>";

?>


    <!-- CSS BEGINS HERE -->

    <style>

    * {box-sizing: border-box}
    @import url(https://fonts.googleapis.com/css?family=Open+Sans);
    body {font-family: 'Lato', sans-serif; margin:0}


    /* TOP NAVIGATION */

    	/* HEADER */
    .header {
      overflow: hidden;
      background-color: #f1f1f1;
      padding: 20px 10px;
    }

    .header input[type=text]{

      width: 100%;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      font-family: 'Lato', sans-serif;
      background-color: white;
      background-image: url('ic_search_black_18dp.svg');
      background-position: 10px 50%; 
      background-repeat: no-repeat;
      padding: 12px 20px 12px 40px;
    }

    .header form{
      margin: 0;
      position: absolute;
      top: 7%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 60%;
    }

    /* Style the header links */
    .header a {
      float: left;
      color: black;
      text-align: center;
      padding: 12px;
      text-decoration: none;
      font-size: 18px;
      line-height: 25px;
      border-radius: 4px;
    }

    	/* LOGO */
    .logo a {
    	width: 10%;
      min-width: 160px;
      border-radius: 0px;
      margin:0 0;
      padding: 0;
    }
    .logo a img{
    	width: 100%;
    }
    .logo a img:hover{
      background-color: #ddd;
    }

    	/* botão */
    .botao {
      font-family: 'Lato', sans-serif;
      font-weight: 800; 
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 16px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;

      position: absolute;
      top: 40%;
      left: 104%;
      transform: translate(-50%, -50%);
    }

    .botao:hover {
      background-color: white; 
      color: black; 
      border: 2px solid #4CAF50;
    }

    	/* header-right */

    	/* Float the link section to the right */
    .header-right {
      float: right;
      position: absolute;
      top: 7%;
      left: 95%;
      transform: translate(-50%, -50%);
      font-family: 'Lato', sans-serif;
      font-weight: 500;
    }

    	/* Change the background color on mouse-over */
    .header-right a:hover {
      background-color: white;
      color: #06AED5;
      border: 2px solid #06AED5;
    }

    .header-right a{
      background-color: #06AED5;
      color: white;
    }

    /* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
    @media screen and (max-width: 500px) {
      .header a {
        float: none;
        display: block;
        text-align: left;
      }
      .header-right {
        float: none;
      }
    }
    
    /* END OF TOP NAVIGATION*/

    /* SLIDE SHOW */

    .mySlides {display: none}

    /* Slideshow container */
    .slideshow-container {
      max-width: "device-width";
      max-height: 300px;
      position: relative;
      margin: auto;
    }

    img.slidesimg {
      width: 100%;
      height: 300px;
      object-fit: cover;
      vertical-align: middle;
    }
    /* Next & previous buttons */
    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -22px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
      background-color: rgba(0,0,0,0.8);
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .prev, .next,.text {font-size: 11px}
    }


    /* END OF SLIDESHOW*/

    /* APRESENTAÇÃO */

    .apres{
      margin: 10px 10px 20px 10px;
      font-family: 'Dosis', sans-serif;
      font-weight: 400;
      line-height: 48px;
      font-size: 40px;
    }

    /* END OF APRESENTAÇÃO*/

    /* TABELA */
    .tabela a{
      font-family: 'Lato', sans-serif;
      font-size: 17px;
      color: black;
      text-decoration: none;
    }
    .tabela a:hover{
      color:blue;
    }

    .tabela td:hover{
      opacity: .7;
      background-color: #ddd;
    }

    /* END OF TABELA */
    
    </style>


    <!-- JS BEGINS HERE -->

    <!-- SLIDE SHOW-->
    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>

  </body>
</html>
