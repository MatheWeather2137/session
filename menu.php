<?php
echo "logged user: ";
echo $_SESSION['user'];

?>
<ul>
<li> <a href='/session/'>MAIN PAGE</a> </li>
<li> <a href='/session/strona.php'>STRONA</a> </li>

<?php
if($_SESSION['upr']=='admin'){
    echo "<li> <a href='/session/admin.php'>ADMIN</a> </li>";
}
?>



<li> <a href='/session/rejestracja.php'>REJESTRACJA</a> </li>

<?php
if(!$_SESSION['zalogowano']){
    echo "<li> <a href='/session/login.php'>LOGIN</a> </li>";
} else {
    echo "<li> <a href='/session/logout.php'>LOG OUT</a> </li>";
}
?>


</ul>
