<!DOCTYPE html>
<?php
            $servername = "localhost";
            $username = "phpmyadmin";
            $password = "pazeiluminacao";
            $dbname = "passargada";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }


            $name = $_POST["name"];
            $email = $_POST["email"];
            $username = $_POST["uname"];
            $country = $_POST["pais"];
            $about = $_POST["bio"];
            $age = $_POST["age"];
            $passwdhash = $_POST["psw"];

            if($passwdhash != $_POST["psw2"]){
                echo"<script language='javascript' type='text/javascript'>
                alert('As senhas não são as mesmas');window.location
                .href='cadastro.html'</script>";
            }

            $query = 'INSERT INTO users(username,name,age,passwdhash,email,about,country) VALUES
            ("'.$username.'","'.$name.'",'.$age.',"'.$passwdhash.'","'.$email.'","'.$about.'","'.$country.'")';

            $result = $conn->query($query);
            if($result){
                echo"<script language='javascript' type='text/javascript'>
                alert('Usuário cadastrado com sucesso!');window.location.
                href='login.html'</script>";
              }else{
                echo"<script language='javascript' type='text/javascript'>
                alert('Não foi possível cadastrar esse usuário');window.location
                .href='cadastro.html'</script>";
              }
?>