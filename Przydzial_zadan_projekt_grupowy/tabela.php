<?php
error_reporting(E_ALL ^ E_NOTICE);
?>

<?php
session_start();
?>

<html>
<head>
 <meta charset="utf-8">
 <title>Tabela</title>
   
  <meta name="description" content="Projekt grupowy">
  <meta name="keywords" content="projekt, grupowy">
  <meta name="author" content="Grupa">
	 
  <link rel="stylesheet" href="style.css">
</head>
<body>

<body background="1.jpg">

<div id="pole" class="pole">

<?php 
include 'konfiguracja.php';

$baza = mysqli_connect($db_server, $db_login, $db_pass, $db_baza) or die ("błąd połączenia");

$zapytanie="SELECT * FROM team";

$wynik = $baza->query($zapytanie) or die ('błedne zapytanie');
$wynik1 = $baza->query($zapytanie) or die ('błedne zapytanie');

// Jeżeli użytkownik jest zalogowany, wyświetlone zostają dane z tabeli "team"
if($_SESSION["zalogowany"]==$_SESSION['login'] && $_SESSION["zalogowany"]!='') {
echo "<table border='5' style='color: white;'>
<thead><td></td><td><b>Login</b></td><td><b>Funkcja</b></td><td><b>" ?><a color="white" id="link" class="link" href="Wykaz.php">Nazwa projektu</a><?php "</b></td></thead>";
};

if($_SESSION["zalogowany"]==$_SESSION['login'] && $_SESSION["zalogowany"]!='') {
while ($wiersz = $wynik->fetch_assoc() and $wynik1->fetch_assoc())
{
	
	echo "<tr><td>".$wiersz['id']."</td><td>".$wiersz['login']."</td><td>".$wiersz['funkcja']."</td><td>".$wiersz['nazwa_projektu']."</td>";
	
};
} else 
{
	echo "<b>Nie masz dostępu do tabeli</b>";
}
$baza->close();

?>

</table>
</div>

<a href="glowna.php"><div id="powrot" class="powrot">
<b>Powrót</b>
</div></a>

<a href="Wykaz.php"><div id="tabela" class="tabela">
<b>Projekty</b>
</div></a>

</body>
</html>