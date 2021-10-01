<?php
error_reporting(E_ALL ^ E_NOTICE);
?>

<?php
session_start();
?>

<html>
<head>
 <meta charset="utf-8">
 <title>Projekty</title>
   
  <meta name="description" content="Projekt grupowy">
  <meta name="keywords" content="projekt, grupowy">
  <meta name="author" content="Grupa">
	 
  <link rel="stylesheet" href="style.css">
</head>
<body>

<body background="1.jpg">

<div id="pole_projekt" class="pole_projekt">

<?php 
// Jeżeli użytkownik jest zalogowany, otrzyma dostęp do danych z tabeli "projekty"
if($_SESSION["zalogowany"]==$_SESSION['login'] && $_SESSION["zalogowany"]!='') {
echo "<table border='5' style='color: white;'>
<thead><td></td><td><b>Nazwa projektu</b></td><td><b>Rozpoczęcie</b></td><td><b>Zakończenie</b></td><td><b>Opis problemu</b></td><td><b>Login</b></td></thead>";
};
?>

<?php 
if($_SESSION["zalogowany"]==$_SESSION['login'] && $_SESSION["zalogowany"]!='') {
include 'konfiguracja.php';

$baza = mysqli_connect($db_server, $db_login, $db_pass, $db_baza) or die ("błąd połączenia");

$zapytanie="SELECT * FROM projekty";

$wynik = $baza->query($zapytanie) or die ('błedne zapytanie');
$wynik1 = $baza->query($zapytanie) or die ('błedne zapytanie');

while ($wiersz = $wynik->fetch_assoc() and $wynik1->fetch_assoc())
{
	// Przycisk odpowiedzialny za usunięcie rekordu
	echo "<form method='POST' action='usun.php'>";
	echo "<input type='hidden' name='usun1' value= ".$wiersz['id'].">";
	echo "<tr><td><input type='submit' value='X' /></td>";
	echo "</form>";
	
	echo "<td>".$wiersz['nazwa_projektu']."</td><td>".$wiersz['data_rozp']."</td><td>".$wiersz['data_zak']."</td><td>".$wiersz['opis_problemu']."</td><td>".$wiersz['login']."</td>";
	
};

$baza->close();
} else
{
	// Wyświetlane w momencie gdy użytkownik nie jest zalogowany
	echo "<b>Nie masz dostępu do projektów</b>";
}
?>

</table>
</div>

<a href="glowna.php"><div id="powrot" class="powrot">
<b>Powrót</b>
</div></a>

<a href="tabela.php"><div id="tabela" class="tabela">
<b>Tabela</b>
</div></a>

<?php 
if($_SESSION["zalogowany"]==$_SESSION['login'] && $_SESSION["zalogowany"]!='') {
echo "<a href='dodaj.php'><div id='dodaj' class='dodaj'>
<b>Dodaj projekt</b>
</div></a>;";
};
?>

<?php 
if($_SESSION["zalogowany"]==$_SESSION['login'] && $_SESSION["zalogowany"]!='') {
echo "<a href='edycja.php'><div id='edytuj' class='edytuj'>
<b>Edytuj podstawowe dane</b>
</div></a>;";
};
?>

<?php 
if($_SESSION["zalogowany"]==$_SESSION['login'] && $_SESSION["zalogowany"]!='') {
echo "<a href='edycja_1.php'><div id='edytuj_1' class='edytuj_1'>
<b>Edytuj datę rozpoczęcia</b>
</div></a>;";
};
?>

<?php 
if($_SESSION["zalogowany"]==$_SESSION['login'] && $_SESSION["zalogowany"]!='') {
echo "<a href='edycja_2.php'><div id='edytuj_2' class='edytuj_2'>
<b>Edytuj datę zakończenia</b>
</div></a>;";
};
?>

</body>
</html>