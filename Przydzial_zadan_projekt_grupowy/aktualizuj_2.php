<?php
session_start();
?>

<?php 
$nazwa_projektu_wybor=$_POST['nazwa_projektu_wybor'];
$data_zakonczenia=$_POST['data_zakonczenia'];
$login=$_SESSION['login'];

include 'konfiguracja.php';

$baza = mysqli_connect($db_server, $db_login, $db_pass, $db_baza) or die ("błąd połączenia");
// Edycja daty zakończenia projektu
$zapytanie="UPDATE projekty SET data_zak = '$data_zakonczenia' WHERE nazwa_projektu = '$nazwa_projektu_wybor' AND '$data_zakonczenia' != 0 AND login = '$login' LIMIT 1";

$wynik = $baza->query($zapytanie) or die ('błedne zapytanie');
$baza->close();

header('Location:Wykaz.php');

?>