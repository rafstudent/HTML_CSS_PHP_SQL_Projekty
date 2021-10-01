<?php 
$login=$_POST['login1'];
$haslo=$_POST['haslo1'];

include 'konfiguracja.php';

$baza = mysqli_connect($db_server, $db_login, $db_pass, $db_baza) or die ("błąd połączenia");
// Dodanie nowego użytkownika do bazy danych
$zapytanie="INSERT INTO uzytkownicy (login, haslo) VALUES ('$login','".md5($haslo)."')";

$wynik = $baza->query($zapytanie) or die ('błedne zapytanie');

$baza->close();

header('Location:log.php');

?>