<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans|Dosis:400,800" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Lato:300|Grand+Hotel" rel="stylesheet" type="text/css" />

<?php 

session_start();
if((!isset ($_SESSION['uname']) == true) and (!isset ($_SESSION['psw']) == true))
{
  unset($_SESSION['uname']);
  unset($_SESSION['psw']);
  header('location:login.html');
  }
 
$logado = $_SESSION['uname'];

$servername = "localhost";
            $username = "phpmyadmin";
            $password = "pazeiluminacao";
            $dbname = "passargada";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);}

$query = "SELECT `name`,`age` FROM `users` 
WHERE `username` = '$logado'";

$result = $conn->query($query);

$row = $result->fetch_assoc()

?>


<title>Perfil</title>
  </head>


  <body>

    <!-- TOP NAVIGATION -->
    <div class="header">

      <!-- Logo -->
      <div class="logo">
        <a href="index.html">
          <img src="imgs/liberalismo4ever.png" alt="Project Passargada"> 
        </a>
      </div>

      <!-- Busca -->
      <form name="busca" action="busca.php">
          <input type="text" name="search" placeholder="Busque um livro...">
          <button type="submit" class="botao">Ir</button>
      </form>

      <!-- Menu -->
      <div class="topnav">
        <a class="active" href="perfil.php">Perfil</a>
        <a href="favs.html">Favoritos</a>
        <a href="lidos.html">Lidos</a>
        <a href="logout.php">Sair</a>
      </div>
    </div>

    <!-- PERFIL -->
    <br><br><br><br> 
	<p style="width: 100%; overflow: hidden;">

		<!-- Informações do usuário -->
    	<center style="width: 600px; float: left;">
    		<div class="circle">
      			<img src="imgs/anon.jpeg">
    		</div>
			<br>
			<?php
     			echo "<h1>" . $row["name"]. "</h1>";
     			echo "<h5>" . $row["age"] . "</h5>";
      			echo "<h3>" . $row["email"] . "</h3>";
      			echo "<h3>" . "Sobre" . "</h3>";
      			echo "<h3>" . "País" . "</h3>";
			?>
		</center>

		<!-- Livros lidos -->
    	<div class = "tabela" style="margin-left: 620px;">
			<center><h1>Livros Lidos</h1>
      		<table width=80% border="1" cellpadding="5", frame=void> <tr>
			<td align="center" valign="center">
            <a href="#book">
			  	<img src="imgs/nao-disp.png" alt="Livro 1" width=120px height="170px" />
			<br> Livro 1.  </a> </td>

          	<td align="center" valign="center">
            <a href="#book">
              	<img src="imgs/nao-disp.png" alt="Livro 2" width=120px height="170px" />
            <br> Livro 2.  </a> </td>

          	<td align="center" valign="center">
            <a href="#book">
              	<img src="imgs/nao-disp.png" alt="Livro 2" width=120px height="170px" />
            <br> Livro 3.  </a> </td> </tr>

        <tr>

          <td align="center" valign="center">
            <a href="#book">
              <img src="imgs/nao-disp.png" alt="Livro 2" width=120px height="170px" />
              <br>
              Livro 4.
          </a>
          </td>
        
          <td align="center" valign="center">
            <a href="#book">
              <img src="imgs/nao-disp.png" alt="Livro 1" width=120px height="170px" />
              <br>
              Livro 5.
          </a>
          </td>

          <td align="center" valign="center">
            <a href="#book">
              <img src="imgs/nao-disp.png" alt="Livro 2" width=120px height="170px" />
              <br>
              Livro 6.
          </a>
          </td>

        </tr>
      </table></center>
    </div>
    </p>



    <!-- CSS STARTS HERE -->
    <style>

    /* TOP NAVIGATION */

    body {
      margin: 0;
      font-family: 'Lato', sans-serif;
      font-weight: 800;
    }

      /* Header */
    .header {
      overflow: hidden;
      background-color: #f1f1f1;
      padding: 20px 10px;
    }
    .header a {
      float: left;
    }

    .header form{
      margin: 0;
      position: absolute;
      top: 4.8%;
      left: 40%;
      transform: translate(-50%, -50%);
      width: 60%;
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
      /* LOGO */

    .logo a{
      width: 8%;
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

      /* top nav */
      
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

    /* PROFILE */

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

    /* fon styling */
    h1 {
        font-family: 'Dosis', sans-serif;
        font-weight: 400;
        line-height: 40px;
        font-size: 32px;
        margin: 0 0 23px 0;
    }

    h2
    {
      font-family: 'Lato', sans-serif;
      font-size: 20px;
      line-height: 23px;
      margin: 0 0 23px 0;
    }
    h3
    {
      font-family: 'Lato', sans-serif;
      font-size: 16px;
      line-height: 23px;
      margin: 0 0 23px 0;
    }

    </style>
  

  </body>
</html>

</html>
