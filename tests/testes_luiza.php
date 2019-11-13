<?php
use PHPUnit\Framework\TestCase;

class MyScriptTest extends TestCase {
    public function testMyFunction() {
      
        $servername = "localhost";
        $username = "phpmyadmin";
        $password = "pazeiluminacao";
        $dbname = "passargada";

        // Tests 1 and 2
        $test_dbname = $dbname;
        $test_username = $username;
        $this->assertEquals('passargada', $test_dbname);
        $this->assertEquals('phpmyadmin', $test_username);

        //TESTE 3 -> check connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $this->assertEquals(NULL,$conn->connect_error);
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        //Teste 4
        $logado = '';
        $query = "SELECT 'id' FROM 'users' WHERE `username` = '$logado'";
        $result = $conn->query($query);
        $this->assertEquals(true, empty($result));
        if (!empty($result))
        {
          die("Usuário logado");
        }

        // testando agora livros
        // Teste 5 - a query tem que existir
        $query = "SELECT * FROM `books`";
        $result = $conn->query($query);
        $this->assertEquals(false, empty($result));


        // Teste 6
        $title = "A aia";
        $query = "SELECT * FROM `books` WHERE `title` = '$title'";
        $result = $conn->query($query);
        $this->assertEquals(269,$result->fetch_assoc()["id"]);

        // Teste 7
        $id = 240;
        $query = "SELECT * FROM `books`  WHERE `id` ='$id'";
        $result = $conn->query($query);
        $this->assertEquals("Farsa ou Auto de Ines Pereira", $result->fetch_assoc()['title']);

        //Teste 8
        $id = 2;
        $query = "SELECT * FROM `comments` WHERE `id_book` = '$id'";
        $result = $conn->query($query);
        $this->assertEquals(16,$result->fetch_assoc()["id"]);        

        //TEST 9
        $this->assertEquals(TRUE,$conn->close());


        // comentar.php

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        

        //Teste 10 - o usuário deve estar logado
        $logado = 'rosie.hand';
        $query = "SELECT `id` FROM `users` WHERE `username` = '$logado'";
        $result = $conn->query($query);
        $this->assertEquals(24,$result->fetch_assoc()["id"]);
        if (empty($result))
        {
          die("Usuário deve estar logado");
        }

        //Teste 11 - checa se o id_book do comentário existe
        $id_book = 200;
        $query = "SELECT * FROM `books`  WHERE `id` ='$id_book'";
        $result = $conn->query($query);
        $this->assertEquals(false, empty($result));

        // Teste 12 - checa se o comentário não está vazio
        $comment = 'gostei bastante';
        $is_empty = false;
        if (empty($comment))
        {
          $is_empty = true;
        }
        $this->assertEquals(false, $is_empty);

        //Teste 13 - checa se o usuário deu estrelas
        $star = 4;
        $not_valid = false;
        if ($star <0 || $star > 5 || empty($star))
        {
          $not_valid = true;
        }
        $this->assertEquals(false, $not_valid);

        // Teste 14 - testa se a data é valida
        $data = '2014-08-28';
        $date = explode( '-', $data, 3);
        $ano = (int)$date[0];
        $mes = (int)$date[1];
        $dia = (int)$date[2];
            //print_r($date); 
        $valida = true;
        if($ano>2019 || $ano < 0 || $mes < 0 || $mes > 12 || $dia < 0 || $dia > 31)
        {
          $valida = false;
        }
        $this->assertEquals(true, $valida);

        //Teste 15 - Testa se o comentário foi postado
        $id_user = 24;
        $query = "INSERT INTO `comments` (`comment_text`,`score`,`date`,`id_book`,`id_user`) VALUES";
        $query .= "('$comment','$star','$data', '$id_book', '$id_user')";
        $resposta = $conn->query($query);
        $this->assertEquals(false, empty($resposta));
        if (empty($result))
        {
          die ("Nao foi possivel salvar o comentario");
        }
        $conn->close();



  }
}

?>