<?php

$comment = $_POST['caixa'];
$star = $_POST['star'];
$book = $_POST['id_book'];
$user = $_POST['id_user'];
$date = date('Y-m-d');

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


$query = "INSERT INTO `comments` (`comment_text`,`score`,`date`,`id_book`,`id_user`) VALUES";
$query .= "('$comment','$star','$date', '$book', '$user')";
$conn->query($query) or die ("Nao foi possivel salvar o comentario");
$conn->close();
header('location:livro.php?id=' . $book);
?>
