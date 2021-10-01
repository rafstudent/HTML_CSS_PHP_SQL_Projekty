<?php 
$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$adres=$_POST['adres'];
include 'konfiguracja.php';

$baza = mysqli_connect($db_server, $db_login, $db_pass, $db_baza) or die ("błąd połączenia");

$zapytanie="INSERT INTO klient (Imie, Nazwisko, Adres) VALUES ('$imie','$nazwisko','$adres')";
$zapytanie2="UPDATE gry SET sztuki=sztuki-1 WHERE nazwa='Assasin' LIMIT 1";

$wynik = $baza->query($zapytanie) or die ('błedne zapytanie');
$wynik1 = $baza->query($zapytanie2) or die ('błedne zapytanie');

$baza->close();

header('Location:podziekowanie.php');

?>