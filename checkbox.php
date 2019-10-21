<?php

$book = $_POST['id_book'];
$user = $_POST['id_user'];

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


$query2 = "INSERT INTO books_read(id_book,id_user,bool_read) VALUES ('$book', '$user',1)";
$conn->query($query2) or die ("Nao foi possivel");

$query = "INSERT INTO favorite_books(id_book,id_user,bool_fav) VALUES ('$book', '$user',1)";
$conn->query($query) or die ("Nao foi possivel");
$conn->close();
header('location:livro.php?id=' . $book);

?>
