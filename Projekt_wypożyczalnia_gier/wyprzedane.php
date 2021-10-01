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
<thead><td>Nazwa</td><td>Rodzaj</td><td>Tworca</td><td>Cena</td><td>Sztuki</td><td>Nowe</td><td>Uzywane</td><td>Usuwanie</td></thead>

<?php 
include 'konfiguracja.php';

$baza = mysqli_connect($db_server, $db_login, $db_pass, $db_baza) or die ("błąd połączenia");

$zapytanie="SELECT * FROM wyprzedane";

$wynik = $baza->query($zapytanie) or die ('błedne zapytanie');

while ($wiersz = $wynik->fetch_assoc())
{
	
	echo "<tr><td>".$wiersz['Nazwa']."</td><td>".$wiersz['Rodzaj']."</td><td>".$wiersz['Tworca']."</td><td>".$wiersz['Cena']."</td><td>".$wiersz['Sztuki']."</td><td>".$wiersz['Nowe']."</td><td>".$wiersz['Uzywane']."</td><td>";	
	
	echo "<form method='POST' action='del2.php'>";
	echo "<input type='hidden' name='co_1' value= ".$wiersz['id'].">";
	echo "<input type='submit' value='Usun Pozycje' />";
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
