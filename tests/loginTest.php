<?php
use PHPUnit\Framework\TestCase;

class loginTest extends TestCase
{
	public function testMyFunction()
	{
		// Connection info
		$servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "passargada";

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

		// Tests 4-7
		$uname = "ortiz.angelina";
		$psw = "b4258cd20431f0f41d9ead356d3d8de149c576aa";
		$query = "SELECT * FROM `users` 
		WHERE `username` = '$uname' AND `passwdhash`= '$psw'";
		$result = $conn->query($query);
		$this->assertTrue($result->num_rows > 0);

		$uname = "jermain86";
		$psw = "41da88d862023605344a32d12c612f0c90bd002b";
		$query = "SELECT * FROM `users` 
		WHERE `username` = '$uname' AND `passwdhash`= '$psw'";
		$result = $conn->query($query);
		$this->assertTrue($result->num_rows > 0);

		$uname = "hansen.isidro";
		$psw = "ce5eef6ff679b64d2c80fb000c2476029b3c3909";
		$query = "SELECT * FROM `users` 
		WHERE `username` = '$uname' AND `passwdhash`= '$psw'";
		$result = $conn->query($query);
		$this->assertTrue($result->num_rows > 0);

		$uname = "mreichel";
		$psw = "4b411ab11bcf446a21be584c9d955fc23e8d7cee";
		$query = "SELECT * FROM `users` 
		WHERE `username` = '$uname' AND `passwdhash`= '$psw'";
		$result = $conn->query($query);
		$this->assertTrue($result->num_rows > 0);

	}
}	


?>
