<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGOUT</title>
</head>
<body>
    <?php
    include 'menu.php';
    ?>
    <?php
    $_SESSION['zalogowano']=false;
    $_SESSION['user'] = "";
    $_SESSION['upr'] = "";
    
    echo "bye bye";

    echo "
    <script>
    setTimeout(()=>{
        location.href = './index.php'
    },'2000');
    </script>
    ";
    
    ?>
</body>
</html>