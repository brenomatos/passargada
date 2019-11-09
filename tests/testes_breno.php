<?php
use PHPUnit\Framework\TestCase;

class MyScriptTest extends TestCase {
    public function testMyFunction() {

	$servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "passargada";

        // Tests 1 and 2
        $test_dbname = $dbname;
        $test_username = $username;
        $this->assertEquals('passargada', $test_dbname);
        $this->assertEquals('root', $test_username);

        $conn = new mysqli($servername, $username, $password, $dbname);
        //LIVRO.PHP
        //pt1
        // Test 3
        $this->assertEquals(NULL,$conn->connect_error);
        // Check connection
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        // Tests 4-7
        $logado = 'ortiz.angelina';
        $query = "SELECT `id` FROM `users` WHERE `username` = '$logado'";
        $result = $conn->query($query);
        $this->assertEquals(1,$result->fetch_assoc()["id"]);

        $logado = 'jermain86';
        $query = "SELECT `id` FROM `users` WHERE `username` = '$logado'";
        $result = $conn->query($query);
        $this->assertEquals(2,$result->fetch_assoc()["id"]);

        $logado = 'jany.murazik';
        $query = "SELECT `id` FROM `users` WHERE `username` = '$logado'";
        $result = $conn->query($query);
        $this->assertEquals(5,$result->fetch_assoc()["id"]);

        $logado = 'mbayer';
        $query = "SELECT `id` FROM `users` WHERE `username` = '$logado'";
        $result = $conn->query($query);
        $this->assertEquals(7,$result->fetch_assoc()["id"]);

        $logado = 'verna96';
        $query = "SELECT `id` FROM `users` WHERE `username` = '$logado'";
        $result = $conn->query($query);
        $this->assertEquals(18,$result->fetch_assoc()["id"]);

        $logado = 'jarvis.kuhn';
        $query = "SELECT `id` FROM `users` WHERE `username` = '$logado'";
        $result = $conn->query($query);
        $this->assertEquals(23,$result->fetch_assoc()["id"]);

        $logado = 'rosie.hand';
        $query = "SELECT `id` FROM `users` WHERE `username` = '$logado'";
        $result = $conn->query($query);
        $this->assertEquals(24,$result->fetch_assoc()["id"]);

        $logado = 'jgusikowski';
        $query = "SELECT `id` FROM `users` WHERE `username` = '$logado'";
        $result = $conn->query($query);
        $this->assertEquals(25,$result->fetch_assoc()["id"]);

        //pt2
        $id = 2;
  			$query = "SELECT * FROM `comments` WHERE `id_book` = '$id'";
  			$result = $conn->query($query);
        // TEST8
        $this->assertEquals(16,$result->fetch_assoc()["id"]);
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
        //TEST 9
        $this->assertEquals(TRUE,$conn->close());

        // BUSCA.PHP
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        //TEST 10
        $this->assertEquals(NULL,$conn->connect_error);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $this->assertEquals(TRUE,$conn->close());
}}
?>
