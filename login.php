<?php 

session_start();

$uname = $_POST['uname'];
//$entrar = $_POST['entrar'];
$psw = $_POST['psw'];

$servername = "localhost";
            $username = "root";
            $password = "pazeiluminacao";
            $dbname = "passargada";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);}

$query = "SELECT * FROM `users` 
WHERE `username` = '$uname' AND `passwdhash`= '$psw'";

$result = $conn->query($query);

if($result->num_rows > 0)
{
$_SESSION['uname'] = $uname;
$_SESSION['psw'] = $psw;
header('location:perfil.php');
}
else{
  unset ($_SESSION['uname']);
  unset ($_SESSION['psw']);
  //header('location:index.php');

  echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
  die();
   
}

$conn->close();

?>
