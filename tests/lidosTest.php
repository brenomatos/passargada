<?php
use PHPUnit\Framework\TestCase;
class lidosTest extends TestCase
{
	public function testMyFunction()
	{
		// Connection info
	 $servername = "localhost";
        $username = "root";
        $password = "pazeiluminacao";
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
       $logado = "jessie.hettinger";
       $query = "SELECT books.id,books.title,books.author,books.release_year,books.language FROM books WHERE books.id IN  (SELECT books_read.id_book FROM `users` INNER JOIN `books_read` ON users.id=books_read.id_user WHERE users.username='" . $logado . "')";
	$result = $conn->query($query);
	$this->assertTrue($result->num_rows > 0);

	$logado = "ernestine77";
       $query = "SELECT books.id,books.title,books.author,books.release_year,books.language FROM books WHERE books.id IN  (SELECT books_read.id_book FROM `users` INNER JOIN `books_read` ON users.id=books_read.id_user WHERE users.username='" . $logado . "')";
	$result = $conn->query($query);
	$this->assertTrue($result->num_rows == 0);

	$logado = "marco.klein";
       $query = "SELECT books.id,books.title,books.author,books.release_year,books.language FROM books WHERE books.id IN  (SELECT books_read.id_book FROM `users` INNER JOIN `books_read` ON users.id=books_read.id_user WHERE users.username='" . $logado . "')";
	$result = $conn->query($query);
	 $row = $result->fetch_assoc();
        $this->assertTrue($row["id"]== 264);

        $logado = "marco.klein";
       $query = "SELECT books.id,books.title,books.author,books.release_year,books.language FROM books WHERE books.id IN  (SELECT books_read.id_book FROM `users` INNER JOIN `books_read` ON users.id=books_read.id_user WHERE users.username='" . $logado . "')";
	$result = $conn->query($query);
	 $row = $result->fetch_assoc();
        $this->assertTrue($row["title"]== "No moinho");
        
	}
}	
?>