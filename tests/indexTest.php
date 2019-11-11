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
		
	// Tests 4-8
       $query = "SELECT id_book, title FROM (SELECT books.title, books_read.id_book, SUM(books_read.bool_read) qtd FROM books_read join books on books.id = books_read.id_book GROUP BY books_read.id_book ORDER BY qtd DESC) AS result LIMIT 10";
	$result = $conn->query($query);
	$this->assertTrue($result->num_rows == 10);

        $query = "SELECT id_book, title FROM (SELECT books.title, books_read.id_book, SUM(books_read.bool_read) qtd FROM books_read join books on books.id = books_read.id_book GROUP BY books_read.id_book ORDER BY qtd DESC) AS result LIMIT 10";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        $this->assertTrue($row["id_book"]== 110);

        $query = "SELECT id_book, title FROM (SELECT books.title, books_read.id_book, SUM(books_read.bool_read) qtd FROM books_read join books on books.id = books_read.id_book GROUP BY books_read.id_book ORDER BY qtd DESC) AS result LIMIT 10";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        $this->assertTrue($row["title"]== "O Caminho da Porta");

        $query = "SELECT id_book, title FROM (SELECT books.title, books_read.id_book, SUM(books_read.bool_read) qtd FROM books_read join books on books.id = books_read.id_book GROUP BY books_read.id_book ORDER BY qtd DESC) AS result LIMIT 10";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        $row = $result->fetch_assoc();
        $row = $result->fetch_assoc();
        $row = $result->fetch_assoc();
        $row = $result->fetch_assoc();
        $row = $result->fetch_assoc();
        $row = $result->fetch_assoc();
        $row = $result->fetch_assoc();
        $row = $result->fetch_assoc();
        $row = $result->fetch_assoc();
        $this->assertTrue($row["id_book"]== 171);


        $query = "SELECT id_book, title FROM (SELECT books.title, books_read.id_book, SUM(books_read.bool_read) qtd FROM books_read join books on books.id = books_read.id_book GROUP BY books_read.id_book ORDER BY qtd DESC) AS result LIMIT 10";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        $row = $result->fetch_assoc();
        $row = $result->fetch_assoc();
        $row = $result->fetch_assoc();
        $row = $result->fetch_assoc();
        $row = $result->fetch_assoc();
        $row = $result->fetch_assoc();
        $row = $result->fetch_assoc();
        $row = $result->fetch_assoc();
        $row = $result->fetch_assoc();
        $this->assertTrue($row["title"]== "Diva");
	}
}	
?>