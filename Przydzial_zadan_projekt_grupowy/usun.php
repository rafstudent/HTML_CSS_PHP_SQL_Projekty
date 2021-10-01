<?php 
include 'konfiguracja.php';

$baza = mysqli_connect($db_server, $db_login, $db_pass, $db_baza) or die ("błąd połączenia");

$usun1=$_POST['usun1'];
// Usunięcie pól z tabel w bazie danych
$zapytanie="DELETE FROM team WHERE id=$usun1 LIMIT 1";

$zapytanie1="DELETE FROM projekty WHERE id=$usun1 LIMIT 1";


$wynik= $baza->query($zapytanie) or die ('błedne zapytanie');

$wynik1= $baza->query($zapytanie1) or die ('błedne zapytanie');

$baza->close();

header('Location:Wykaz.php');

?>
