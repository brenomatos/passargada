<!DOCTYPE html>
<html>
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans|Dosis:400,800" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Lato:300|Grand+Hotel" rel="stylesheet" type="text/css" />

    <title>Lidos</title>
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
      <!-- Busca -->
      <form name="busca" action="busca.php">
          <input type="text" name="search" placeholder="Busque um livro...">
          <button type="submit" class="botao">Ir</button>
      </form>
      <!-- Right Side -->
      <div class="topnav">
        
        <a href="perfil.php">Perfil</a>
        <a href="favs.php">Favoritos</a>
        <a class="active" href="lidos.php">Lidos</a>
        <a href="logout.php">Sair</a>
      </div>
    </div>

<!-- Apresentação -->
    <h1 class="livroslidos">Meus livros lidos</h1>

<!-- TABELA -->


    <br>
    <div class = "tabela">
      <table width=100% border="0" cellpadding="5">
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
            session_start();
            $logado = $_SESSION['uname']; 
            $query = "SELECT books.id,books.title,books.author,books.release_year,books.language FROM books WHERE books.id IN  (SELECT books_read.id_book FROM `users` INNER JOIN `books_read` ON users.id=books_read.id_user WHERE users.username='" . $logado . "')";
            $result = $conn->query($query);


            if ($result->num_rows > 0) {
                echo '<tr>';
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo  '<td align="center" valign="center">
                    <a href="#book">

                    <a href=livro.php?id=';
					echo $row["id"];
					echo '>


                    
                    <img src="imgs/nao-disp.png" alt=' . $row['title'].'width=241px height="346px" />
                    <br>'
                    . $row['title'].'
                      </a>
                    </td>'; 
                }
                echo '<tr>';
            }else{
                echo "      Não há nenhum livro lido";
            }
            $conn->close();
        ?>
      </table>
    </div>


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
      border-radius: 0px;
      margin:0 0;
      padding-right: 20px;
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
    
    /* LIDOS */

    .livroslidos{
      margin: 10px 10px 0px 10px;
      font-family: 'Dosis', sans-serif;
      font-weight: 400;
      line-height: 48px;
      font-size: 40px;
    }

    /* END OF LIDOS */

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



  </body>
</html>
