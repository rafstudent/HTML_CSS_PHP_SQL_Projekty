<html>
<head>
<title>Wypożyczalnia gier</title>
<link rel="Stylesheet" type="text/css" href="style.css" />

</head>
<body>

<body bgcolor = "#4fc3f7">


<div class="logo">
LOGO
</div>

<div class="menu">
<a href="index.php"> 1. Strona główna </a><br />
<a href="Opis.php"> 2. Opis </a><br />
<a href="Polecane.php"> 3. Polecane </a><br />
<a href="Wyprzedane.php"> 4. Wyprzedane </a><br />
<a href="Dodaj.php"> 5. Dodaj produkt </a><br />
<a href="pozycje.php"> 6. Pozycje </a><br />
<a href="klienci.php"> 7. Klienci </a><br />


</div>

<div class="opis">
<table border="5">
<thead><td>Imie</td><td>Nazwisko</td><td>Adres</td><td>Usuwanie</td></thead>

<?php 
include 'konfiguracja.php';

$baza = mysqli_connect($db_server, $db_login, $db_pass, $db_baza) or die ("błąd połączenia");

$zapytanie="SELECT * FROM klient";

$wynik = $baza->query($zapytanie) or die ('błedne zapytanie');
$wynik1 = $baza->query($zapytanie) or die ('błedne zapytanie');

while ($wiersz = $wynik->fetch_assoc() and $wynik1->fetch_assoc())
{
	
	echo "<tr><td>".$wiersz['Imie']."</td><td>".$wiersz['Nazwisko']."</td><td>".$wiersz['Adres']."</td><td>";	
	
	echo "<form method='POST' action='del3.php'>";
	echo "<input type='hidden' name='co' value= ".$wiersz['id'].">";
	echo "<input type='submit' value='Usun Klienta' />";
	echo "</form>";
	
};

$baza->close();

?>
</table>
</div>

<div class="pole">
<img src="7.jpg" class="sklep"> </img>
</div>


</body>
</html>
