<?php
use PHPUnit\Framework\TestCase;
class lidosTest extends TestCase
{
	public function testMyFunction()
	{
        $servername = "localhost";
        $username = "phpmyadmin";
        $password = "pazeiluminacao";
        $dbname = "passargada";
                    
        // Create connection
 		// Test 1
        $conn = new mysqli($servername, $username, $password, $dbname);
        $this->assertNull($conn->connect_error);
        
        //Test 2
        $book = 1;
        $user = 1;
        $query2 = "INSERT INTO books_read(id_book,id_user,bool_read) VALUES ('$book', '$user',1)";
        $this->assertFalse($conn->query($query2));

        //Test 3
        $query = "INSERT INTO favorite_books(id_book,id_user,bool_fav) VALUES ('$book', '$user',1)";
        $this->assertFalse($conn->query($query));

        //Test 4
        $value = $conn->close();
        $this->assertTrue($value);
        
	}
}	
?>
