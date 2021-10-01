<?php
session_start();
?>

<?php 
$nazwa_projektu_wybor=$_POST['nazwa_projektu_wybor'];
$nazwa_projektu=$_POST['nazwa_projektu'];
$opis_problemu=$_POST['opis_problemu'];
$funkcja=$_POST['funkcja'];
$login=$_SESSION['login'];

include 'konfiguracja.php';

$baza = mysqli_connect($db_server, $db_login, $db_pass, $db_baza) or die ("błąd połączenia");
// Edycja pól w bazie danych
$zapytanie="UPDATE projekty SET nazwa_projektu = '$nazwa_projektu' WHERE nazwa_projektu = '$nazwa_projektu_wybor' AND '$nazwa_projektu' != '' AND login = '$login' LIMIT 1";

$zapytanie1="UPDATE projekty SET opis_problemu = '$opis_problemu' WHERE nazwa_projektu = '$nazwa_projektu_wybor' AND '$opis_problemu' != '' AND login = '$login' LIMIT 1";

$zapytanie2="UPDATE team SET funkcja = '$funkcja' WHERE nazwa_projektu = '$nazwa_projektu_wybor' AND '$funkcja' != '' AND login = '$login' LIMIT 1";

$zapytanie3="UPDATE team SET nazwa_projektu = '$nazwa_projektu' WHERE nazwa_projektu = '$nazwa_projektu_wybor' AND '$nazwa_projektu' != '' AND login = '$login' LIMIT 1";

$wynik1 = $baza->query($zapytanie) or die ('błedne zapytanie1');
$wynik2 = $baza->query($zapytanie1) or die ('błedne zapytanie2');
$wynik3 = $baza->query($zapytanie2) or die ('błedne zapytanie3');
$wynik4 = $baza->query($zapytanie3) or die ('błedne zapytanie4');
$baza->close();

header('Location:Wykaz.php');

?>