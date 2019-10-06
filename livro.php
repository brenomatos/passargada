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
      <img src="imgs/liberalismo4ever.png" alt="Project Passargada" width="10%"> <!-- height=10% width=10% --> 
      <!-- Busca -->
      <form name="busca" action="busca.php">
          <input type="text" name="search" placeholder="Busque um livro...">
          <button type="submit" class="botao">Ir</button>
      </form>
      <!-- Right side -->
      <div class="topnav">
        <a href="perfil.html">Perfil</a>
        <a href="favs.html">Favoritos</a>
        <a href="lidos.html">Lidos</a>
        <a href="logout.php">Sair</a>
      </div>
    </div>

    <!-- LIVRO -->
    <div id="livroexterno" class="external">
      <div class="fotolivro">
        <img src="imgs/imagemindisponivel.png"  width = "400" height = "420"/>
      </div>
      
      <div class="sobrelivro"> 
      	<div class="caixalivro">
      		<h1> Titulo do livro que ta no site de livros </h1>
      		<h3> Autores do livro </h3>
      		<h3> Outras info do livro? </h3>
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
		<input class="star star-5" id="star-5" type="radio" name="star"/>
		<label class="star star-5" for="star-5"></label>
		
		<input class="star star-4" id="star-4" type="radio" name="star"/>
		<label class="star star-4" for="star-4"></label>
		
		<input class="star star-3" id="star-3" type="radio" name="star"/>
		<label class="star star-3" for="star-3"></label>
		
		<input class="star star-2" id="star-2" type="radio" name="star"/>
		<label class="star star-2" for="star-2"></label>
		
		<input class="star star-1" id="star-1" type="radio" name="star"/>
		<label class="star star-1" for="star-1"></label>


				<!-- Esse é o botão -->
     			<button type="submit" class="botao2">Comentar</button>
	  		</div>
		</form>

		<br><br><br>

		<!-- Teoricamente são os comentários -->
		<?php
			$servername = "localhost";
			$username = "phpmyadmin";
			$password = "pazeiluminacao";
			$dbname = "passargada";
			
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			
			// Check connection
			if ($conn->connect_error)
			{
			    die("Connection failed: " . $conn->connect_error);
			}
			
			$query = "SELECT `name`, `comment_text`  FROM `comments` JOIN`users` ON `comments.id_users`=`user.id` WHERE `id_book` =" ."'%"  . $_GET["id"] . "%'";
			$result = $conn->query($query);
			
			if ($result->num_rows > 0)
			{
			    // output data of each row
				while($row = $result->fetch_assoc())
				{
					echo "<div class=\"passados\">";
					echo "<label class=\"texto\" for=\"comentario\"><b>" . $row["name"]. "</b></label>";
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
      width: 7%;
      max-width: 7%;
    }

    .header img:hover{
      background-color: #ddd;
    }

    .header form{
      margin: 0;
      position: absolute;
      top: 4.8%;
      left: 40%;
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
      top: -5px;
      left: 102%;

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

    body {
      margin: 0;
      font-family: 'Lato', sans-serif;
      font-weight: 800;
    }

    .topnav {
      overflow: hidden;
      background-color: #f1f1f1;  
      float: right;
    }

    .topnav a {
      float: left;
      color: #333;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 18px;
    }

    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    /* Add a color to the active/current link */
    .topnav a.active {
      background-color: #4CAF50;
      color: white;
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

