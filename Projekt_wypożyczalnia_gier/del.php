<?php 
include 'konfiguracja.php';

$baza = mysqli_connect($db_server, $db_login, $db_pass, $db_baza) or die ("błąd połączenia");

$f_co=$_POST['co'];

$zapytanie1="INSERT wyprzedane SELECT * FROM gry WHERE id=$f_co";
$zapytanie="DELETE FROM gry WHERE id=$f_co LIMIT 1";

$wynik = $baza->query($zapytanie1) or die ('błedne zapytanie');
$wynik1 = $baza->query($zapytanie) or die ('błedne zapytanie');

$baza->close();

header('Location:pozycje.php');

?>
