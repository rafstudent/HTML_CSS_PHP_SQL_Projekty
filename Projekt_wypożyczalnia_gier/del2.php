<?php 
include 'konfiguracja.php';

$baza = mysqli_connect($db_server, $db_login, $db_pass, $db_baza) or die ("błąd połączenia");

$f_co1=$_POST['co_1'];

$zapytanie2="DELETE FROM wyprzedane WHERE id=$f_co1 LIMIT 1";

$wynik= $baza->query($zapytanie2) or die ('błedne zapytanie');

$baza->close();

header('Location:wyprzedane.php');

?>
