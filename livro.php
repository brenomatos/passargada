<?php

$id = $_GET["id"];

session_start();
if((!isset ($_SESSION['uname']) == true) and (!isset ($_SESSION['psw']) == true))
{
  unset($_SESSION['uname']);
  unset($_SESSION['psw']);
  header('location:livro_semcadastro.php?id=' . $id);
  }
 
$logado = $_SESSION['uname']; 

			$servername = "localhost";
			$username = "root";
			$password = "pazeiluminacao";
			$dbname = "passargada";
			
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			
			// Check connection
			if ($conn->connect_error)
			{
			    die("Connection failed: " . $conn->connect_error);
			}

$query = "SELECT `id` FROM `users` WHERE `username` = '$logado'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$id_user = $row["id"];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans|Dosis:400,800" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Lato:300|Grand+Hotel" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Livro</title>
  </head>


  <body>

    <!-- TOP NAVIGATION -->
  	<div class="header">

  		<!-- Logo -->
  		<img src="imgs/liberalismo4ever.png" alt="Project Passargada" width="10%"> 
  		
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

    <!-- LIVRO -->
    <div id="livroexterno" class="external">
      <div class="fotolivro">
        <img src="imgs/imagemindisponivel.png"  width = "400" height = "420"/>
      </div>
      
      <div class="sobrelivro"> 
      	<div class="caixalivro">
<?php
		$query = "SELECT * FROM `books` WHERE `id` = '$id'";
		$result = $conn->query($query);
		if($result->num_rows > 0)
			$row = $result->fetch_assoc();
      		echo "<h1>" . $row["title"]. "</h1>";
      		echo "<h3>" . $row["author"]. "</h3>";
      		echo "<h3>" . $row["release_year"]. "</h3>";
                echo "<h3>" . $row["language"]. "</h3>";
?>
      		<p align="justify">Isso deve estar bem claro na sinopse, que é uma parte ou um resumo da história. Essa sinopse, no geral, fica na orelha do livro ou na contra capa. A sinopse deve contar um pouco do que o leitor irá ver no livro, mas não deve ter muitas revelações, pois senão não tem porque o leitor querer comprar o livro. Bentinho e Capitu são criados juntos e se apaixonam na adolescência. Mas a mãe dele, por força de uma promessa, decide enviá-lo ao seminário para que se torne padre. Lá o garoto conhece Escobar, de quem fica amigo íntimo. Algum tempo depois, tanto um como outro deixam a vida eclesiástica e se casam. Escobar com Sancha, e Bentinho com Capitu. Os dois casais vivem tranquilamente até a morte de Escobar, quando Bentinho começa a desconfiar da fidelidade de sua esposa e percebe a assombrosa semelhança do filho Ezequiel com o ex-companheiro de seminário. </p> 
      		<br> <br>
      		<div class="container"> 
            <label for="livrolido">Lido
              <input type="checkbox" id="livrolido" name="Lido" checked = "checked">
              <span class="checkmark"></span>
            </label> 
          </div>
      		
          <div class="container"> 
            <label for="livrofav">Favorito
              <input type="checkbox" id="livrofav" name="Favorito">
              <span class="checkmark"></span>
            </label>
          </div>
      		<br>
      		<input type="button" name="botao-ler" value="Adquirir">
      	</div>
      </div>
    </div>

			<br>
			<br>

	<!-- Aqui começa a seção dos comentários -->
	<div class=comentarios>
		<h1 align="center">Comentários</h1>
		
		<!-- Aqui começa o form-->
		<form class="comenta" action="comentar.php" method="post">
	  		<div class="container">
	
				<!-- Essa é a caixa de texto -->
				<label for="caixa"><b>Comentário</b></label><br>
				<textarea id="caixa" name="caixa" rows="10" cols="70">
				</textarea>

		<!-- Essas são as estrelas -->
		<input class="star star-5" id="star-5" type="radio" name="star" value="5"/>
		<label class="star star-5" for="star-5"></label>
		
		<input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
		<label class="star star-4" for="star-4"></label>
		
		<input class="star star-3" id="star-3" type="radio" name="star" value="3" />
		<label class="star star-3" for="star-3"></label>
		
		<input class="star star-2" id="star-2" type="radio" name="star" value="2" />
		<label class="star star-2" for="star-2"></label>
		
		<input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
		<label class="star star-1" for="star-1"></label>
	
		<input type="hidden" name="id_user" id="id_user" value="<?php echo $id_user ?>" />
		<input type="hidden" name="id_book" id="id_book" value="<?php echo $id ?>" />


				<!-- Esse é o botão -->
     			<button type="submit" class="botao2">Comentar</button>
	  		</div>
		</form>

		<br><br><br>

		<!-- Teoricamente são os comentários -->
			<?php

			$query = "SELECT * FROM `comments` WHERE `id_book` = '$id'";
			$result = $conn->query($query);
			
			if ($result->num_rows > 0)
			{
			    // output data of each row
				while($row = $result->fetch_assoc())
				{
					$id_user = $row["id_user"];
					$query2 = "SELECT `name` FROM `users` WHERE `id` = '$id_user'";
					$result2 = $conn->query($query2);
					$row2 = $result2->fetch_assoc();
					echo "<div class=\"passados\">";
					echo "<label class=\"texto\" for=\"comentario\"><b>" . $row2["name"]. "</b></label>";
					echo "<br> <br>";
					echo "<p class=\"comentario\" name=\"comentario\">";
					echo $row["comment_text"];
					echo "</p></div> <br> <br>";
			    }
			}
		?>

	</div>

    <!-- CSS STARTS HERE -->
    <style>

    /* TOP NAVIGATION */
    .header {
      overflow: hidden;
      background-color: #f1f1f1;
      padding: 20px 10px;
    }

    .header img{
      width: 10%;
      max-width: 10%;
    }

    .header img:hover{
      background-color: #ddd;
    }
    .header form{
      margin: 0;
      position: absolute;
      top: 7%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 60%;
    }

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

    /* Change the background color on mouse-over */
    .header a:hover {
      background-color: white;
      color: #06AED5;
      border: 2px solid #06AED5;
    }


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
    /* END OF TOP NAVIGATION */
    
    /* coisa da foto */
    .circle {
      background-color: #aaa;
      border-radius: 50%;
      width: 190px;
      height: 190px;
      overflow: hidden;
      position: relative;
    }

    .circle img {
      position: center;
      bottom: 0;
      width: 100%;
    }

    /*EDITANDO A FONTE*/

    h1 {
        font-family: 'Dosis', sans-serif;
        font-weight: 400;
        line-height: 42px;
        font-size: 34px;
        margin: 0 0 23px 0;
    }

    h3
    {
      font-family: 'Lato', sans-serif;
      font-size: 18px;
      line-height: 23px;
      margin: 0 0 23px 0;
    }

    p
    {
      font-family: 'Lato', sans-serif;
      font-size: 14px;
      line-height: 16px;
      margin: 0 0 16px 0;
    }
    /* FIM EDIÇÃO FONTE */


    /*SOBRE O LIVRO */

    /* coisa da caixa de livro */
    .caixalivro{
      background-color: #f1f1f1;
      width: 540px;
      height: 540px;
      border: 15px #f1f1f1;
      padding: 50px;
      margin: 20px;
    }

    /* alinhando livro */

    .external {
        position: center;
    }

    .fotolivro{
      /*float:left; */
      margin-left: 200px;
      position: absolute;
      top: 50%;
      left: 10%;
      transform: translate(0, -50%);
    }

    .sobrelivro{
      margin-left: 900px;
    }
    /* FIM SOBRE O LIVRO */


    /* BOTÕES */
      input[type=button] {
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
    }

    input[type=button]:hover {
      background-color: white; 
      color: black; 
      border: 2px solid #4CAF50;
    }

    .container{
      
      display: block;
      position: relative;
      padding-left: 35px;
      margin-bottom: 12px;
      cursor: pointer;
      font-size: 22px;
      font-family: 'Lato', sans-serif;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .container input{

        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Checkbox customizada*/
    .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 25px;
      width: 25px;
      background-color: #ddd;
    }

    /* Mouse-over --> add background cinza*/
    .container:hover input ~ .checkmark {
      background-color: #ddd;
    }

    /* Checkbox checked --> back colorido*/
    .container input:checked ~ .checkmark {
      background-color: #4CAF50;
    }

    /* Cria o indicador de checkmark (escondido) */
    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }

    /* Mostra checkmark quando checked */
    .container input:checked ~ .checkmark:after {
      display: block;
    }

    /* Estilo do checkmark */
    .container .checkmark:after {
      left: 9px;
      top: 5px;
      width: 5px;
      height: 10px;
      border: solid white;
      border-width: 0 3px 3px 0;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
    }

    /*FIM BOTÕES */

    /* Box de Comentário */
    input[type=text] {
      width: 50%;
      padding: 10px 10px;
      margin: 0px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    .comentarios {
        background-color: #f1f1f1;
        margin: auto;
        width: 70%;
        padding: 10px;
    }

    .comenta {
        width: 100%; 
        height: 60%;
    }

    .passados {
      width: 80%;
      margin: auto;
      border: 5px solid #ccc;
      padding: 16px
    }

    .comentario {
      color: #666666;
    }

    .botao2 {
      font-family: 'Lato', sans-serif;
      font-weight: 800;
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 16px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      position: absolute;
      bottom: 0px;
      left: 50%;
    }

    .botao2:hover {
      background-color: white; 
      color: black; 
      border: 2px solid #4CAF50;
    }

    /* ESTRELINHAS */
    input.star {
      display: none;
    }

    label.star {
        float: right;
        padding: 10px;
        font-size: 36px;
        color: #444;
        transition: all .2s;
    }

    input.star:checked ~ label.star:before {
        content: '\f005';
        color: #FD4;
        transition: all .25s;
      }

      input.star-5:checked ~ label.star:before {
        color: #FE7;
        text-shadow: 0 0 20px #952;
      }

      input.star-1:checked ~ label.star:before {
      color: #F62;
    }

    label.star:before {
      content: '\f006';
        font-family: FontAwesome;
    }

    </style>


  </body>
</html>

