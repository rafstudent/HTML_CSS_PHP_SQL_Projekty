<?php 
include 'konfiguracja.php';

$baza = mysqli_connect($db_server, $db_login, $db_pass, $db_baza) or die ("błąd połączenia");

$f_co=$_POST['co'];

$zapytanie="UPDATE gry SET sztuki = sztuki-1 WHERE id=$f_co LIMIT 1";

$wynik1 = $baza->query($zapytanie) or die ('błedne zapytanie');

$baza->close();

header('Location:pozycje.php');

?>
