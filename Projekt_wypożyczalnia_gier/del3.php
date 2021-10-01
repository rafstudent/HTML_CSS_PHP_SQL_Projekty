<?php 
include 'konfiguracja.php';

$baza = mysqli_connect($db_server, $db_login, $db_pass, $db_baza) or die ("błąd połączenia");

$f_co=$_POST['co'];

$zapytanie2="DELETE FROM klient WHERE id=$f_co LIMIT 1";

$wynik= $baza->query($zapytanie2) or die ('błedne zapytanie');

$baza->close();

header('Location:klienci.php');

?>
