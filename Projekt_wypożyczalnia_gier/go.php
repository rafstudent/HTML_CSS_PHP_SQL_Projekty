<?php 
$nazwa=$_POST['nazwa'];
$rodzaj=$_POST['rodzaj'];
$tworca=$_POST['tworca'];
$cena=$_POST['cena'];
$sztuki=$_POST['sztuki'];
$nowe=$_POST['nowe'];
$uzywane=$_POST['uzywane'];

include 'konfiguracja.php';

$baza = mysqli_connect($db_server, $db_login, $db_pass, $db_baza) or die ("błąd połączenia");

$zapytanie="INSERT INTO gry (Nazwa, Rodzaj, Tworca, Cena, Sztuki, Nowe, Uzywane) VALUES ('$nazwa','$rodzaj','$tworca','$cena','$sztuki','$nowe','$uzywane')";

$wynik = $baza->query($zapytanie) or die ('błedne zapytanie');

$baza->close();

header('Location:pozycje.php');

?>