

<!DOCTYPE html>
<html>

  <head>
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans|Dosis:400,800" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Lato:300|Grand+Hotel" rel="stylesheet" type="text/css" />

  	<title>Resultados</title>
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
  			<a class="active" href=login.html>Entrar</a>
  		</div>

  	</div>


	<!-- TABELA -->
	 <br> <br> <br>
  	<table>
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
            $query = "SELECT * FROM `books` WHERE `title` LIKE " ."'%"  . $_GET["search"] . "%'";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo  '<tr><td class="imagem"><img src="imgs/nao-disp.png" height="218px">
                            </td><td class="informacao"colspan="4">';
                    echo "<h1>" . $row["title"]. "</h1>";
                    echo "<h2>" . $row["author"]. "</h2>";
                    echo "<h3>" . $row["release_year"]. "</h3>";
                    echo "<h3>" . $row["language"]. "</h3>";
                    echo "</td></tr>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
        ?>
    </table>


  <!-- CSS BEGINS HERE -->

    <style>

    * {box-sizing: border-box}
    @import url(https://fonts.googleapis.com/css?family=Open+Sans);
    body {font-family: 'Lato', sans-serif; margin:0}


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
      font-family: 'Lato', sans-serif;
      font-weight: 800;

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
      background-color: #ddd;
      color: black;
    }

    /* Style the active/current link*/
    .header a.active {
      background-color: #06AED5;
      color: white;
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

    .header-right a.active {
      background-color: #06AED5;
      color: white;
    }

    .header-right a.active:hover {
      background-color: white;
      color: #06AED5;
      border: 2px solid #06AED5;
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


    /*	TABELA */

    table{
    	border-collapse: collapse;
    	table-layout: fixed;
    	width: 90%; /* must have this set */

    }

    td,th{
    	border: 3px solid #999;
      padding: 0.5rem;
    }

    .imagem{
      text-align:center;

    }
    .imagem:hover{
      opacity: .7;
      background-color: #ddd;
    }

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
