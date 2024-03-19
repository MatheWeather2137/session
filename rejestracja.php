<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
</head>
<body>
<h1>REGISTER</h1>
    <?php
    include 'menu.php'
    ?>
    <form action="rejestracja.php" method="POST">
        <input type="text" name="login" id="login" placeholder="login">
        <input type="text" name="pass" id="pass" placeholder="password">
        <input type="submit" value="ADD USER">
    </form>
    <?php
    if(isset($_POST["login"]) && isset($_POST["pass"])){
        $log=$_POST["login"];
        $pas=$_POST["pass"];


        function szyfruj_haslo($pas){
            return md5($pas);
        }
        $zaszyfrowane=szyfruj_haslo($pas);
        
        $host="localhost";
        $dbuser="root";
        $dbpassword="";
        $dbname="users";

        $conn=mysqli_connect($host,$dbuser,$dbpassword,$dbname);

        if(!$conn){
            die (mysqli_connect_error() . "error");
        }

        

        $sql="INSERT INTO users(login,pass,upr) VALUES ('$log','$zaszyfrowane','user')";
        if(mysqli_query($conn,$sql)){
            echo "user added";
        } else echo "error";
    }
    ?>
</body>
</html>