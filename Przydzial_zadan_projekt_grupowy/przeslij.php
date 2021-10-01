<?php
session_start();
?>

<?php 
$nazwa_projektu=$_POST['nazwa_projektu'];
$data_rozpoczecia=$_POST['data_rozpoczecia'];
$data_zakonczenia=$_POST['data_zakonczenia'];
$opis_problemu=$_POST['opis_problemu'];
$login=$_SESSION['login'];
$funkcja=$_POST['funkcja'];

include 'konfiguracja.php';

$baza = mysqli_connect($db_server, $db_login, $db_pass, $db_baza) or die ("błąd połączenia");
// Dodanie nowego projektu do tabel w bazie danych
$zapytanie="INSERT INTO projekty (nazwa_projektu, data_rozp, data_zak, opis_problemu, login) VALUES ('$nazwa_projektu','$data_rozpoczecia','$data_zakonczenia','$opis_problemu','$login')";

$zapytanie1="INSERT INTO team (login, nazwa_projektu, funkcja) VALUES ('$login','$nazwa_projektu','$funkcja')";

$wynik = $baza->query($zapytanie) or die ('błedne zapytanie');

$wynik1 = $baza->query($zapytanie1) or die ('błedne zapytanie');

$baza->close();

header('Location:Wykaz.php');

?>