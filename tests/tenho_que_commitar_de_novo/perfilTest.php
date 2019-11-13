<?php
use PHPUnit\Framework\TestCase;

class perfilTest extends TestCase
{
	public function testMyFunction()
	{
		// Connection info
		$servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "passargada";
		$logado = "mreichel";

        // Tests 1 and 2
        $test_dbname = $dbname;
        $test_username = $username;
        $this->assertEquals('passargada', $test_dbname);
        $this->assertEquals('root', $test_username);

		// Test 3
        $conn = new mysqli($servername, $username, $password, $dbname);
        $this->assertEquals(NULL,$conn->connect_error);

        // Check connection
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

		// Query
		$query = "SELECT `country`, `email`,`about`,`name`,`age`
			FROM `users` WHERE `username` = '$logado'";

		$result = $conn->query($query);
		$row = $result->fetch_assoc();

		// Tests 4-8
		$this->assertEquals("fuga", $row["name"]);
		$this->assertEquals("75", $row["age"]);
		$this->assertEquals("helmer21@example.org", $row["email"]);
		$this->assertEquals("Eum deserunt consequuntur nulla. Maiores ipsum non in sed. Dolor sit architecto ut at. Voluptas minus dolorum facilis officiis.", $row["about"]);
		$this->assertEquals("Nicaragua", $row["country"]);
	}
}	


?>
