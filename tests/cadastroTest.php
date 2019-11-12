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
                     
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        $name = "Igor";
        $email = "igorma.test@gmail.com";
        $username = "igo";
        $country = "brasil";
        $about = "sou igor";
        $age = "32";
        $passwdhash = "senha";
        $psw = "senha";

        //Test 2
        $this->assertEquals($passwdhash,$psw);
        
        //Test 3
        $passwdhash = "senha";
        $psw = "senha2";
        $this-> assertFalse($psw == $passwdhash);

        //Test 4
        if(!($passwdhash == $psw)){
            $message = "<script language='javascript' type='text/javascript'>alert('As senhas não são as mesmas');window.location.href='cadastro.html'</script>";
        }
        $this->assertEquals("<script language='javascript' type='text/javascript'>alert('As senhas não são as mesmas');window.location.href='cadastro.html'</script>",$message);

        //Test 5
        $passwdhash = "senha";
        $psw = "senha";
        $query = 'INSERT INTO users(username,name,age,passwdhash,email,about,country) VALUES ("'.$username.'","'.$name.'",'.$age.',"'.$passwdhash.'","'.$email.'","'.$about.'","'.$country.'")';
        $this->assertEquals('INSERT INTO users(username,name,age,passwdhash,email,about,country) VALUES ("igo","Igor",32,"senha","igorma.test@gmail.com","sou igor","brasil")',$query);

        //Test 6
        $result = $conn->query($query);
        $this->assertTrue($result);

        //Test 7
        if($result){
            $message = "<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
          }else{
            $message = "<script language='javascript' type='text/javascript'>
            alert('Não foi possível cadastrar esse usuário');window.location
            .href='cadastro.html'</script>";
          }
          $this->assertEquals($message,
          "<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>");

        //Test 8 Testa se pode inserir o mesmo usuário duas vezes
        $result = $conn->query($query);
        $this->assertTrue($result);
        
        //Test 9
        $query = 'INSERT INTO users(username,name,age,passwdhash,email,about,country) VALUES
        ("'.$name.'",'.$age.',"'.$passwdhash.'","'.$email.'","'.$about.'","'.$country.'")';
        $result = $conn->query($query);
        $this->assertFalse($result);
        
        //Test 10
        if($result){
            $message = "<script language='javascript' type='text/javascript'>
            alert('Usuário cadastrado com sucesso!');window.location.
            href='login.html'</script>";
          }else{
            $message = "<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
          }
          $this->assertEquals($message,"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>");

        //Test 11
        $age = "Teste string";
        $query = 'INSERT INTO users(username,name,age,passwdhash,email,about,country) VALUES
        ("'.$username.'","'.$name.'",'.$age.',"'.$passwdhash.'","'.$email.'","'.$about.'","'.$country.'")';
        $result = $conn->query($query);
        $this->assertFalse($result);

	}
}	
?>
