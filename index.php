<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: <?php echo isset($_SESSION['bgColorAll']) && $_SESSION['bgColorAll'] === "ciemny" ? "#666666" : "whitesmoke"; ?>;
            color: <?php echo isset($_SESSION['bgColorAll']) && $_SESSION['bgColorAll'] === "ciemny" ? "whitesmoke" : "black"; ?>;
        }
    </style>
</head>
<body>
    <h1>MAIN PAGE</h1>
    <?php
    include 'menu.php'
    ?>
    <!-- <form action="index.php" method="POST">
        <input type="text" name="sesja">
        <input type="submit" value="pozdro">
    </form> -->
    <?php
    // $_SESSION["test"]="test";
    // echo $_SESSION["test"] . "<br>";
    // if(isset($_POST["sesja"])){
    // $_SESSION["test"]=$_POST["sesja"];
    // print_r($_SESSION);
    // }
    ?>
    <?php
    if(isset($_SESSION["licznik"])){
        $_SESSION["licznik"]=$_SESSION["licznik"]+1;
    } else{
        $_SESSION["licznik"]=1;
    }
    echo "Liczba odwiedzeń: " . $_SESSION["licznik"] . "<br>";
    ?>
    <form action="" method="POST">
        <button type="submit" name="bgColor" value="ciemny">Ciemny</button>
        <button type="submit" name="bgColor" value="jasny">Jasny</button>
    </form>

    <?php
    if (isset($_POST["bgColor"])) {
        $_SESSION["bgColorAll"] = $_POST["bgColor"];
        echo $_SESSION["bgColorAll"];
    }
    ?>
</body>
</html>