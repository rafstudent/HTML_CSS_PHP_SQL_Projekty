<html>
<head>
<title>Wypożyczalnia gier</title>
<link rel="Stylesheet" type="text/css" href="style.css" />

</head>
<body>

<div class="logo">
LOGO
</div>

<body bgcolor = "#4fc3f7">

<div class="menu">
<a href="index.php"> 1. Strona główna </a><br />
<a href="Opis.php"> 2. Opis </a><br />
<a href="Polecane.php"> 3. Polecane </a><br />
<a href="Wyprzedane.php"> 4. Wyprzedane </a><br />
<a href="Dodaj.php"> 5. Dodaj produkt </a><br />
<a href="pozycje.php"> 6. Pozycje </a><br />
<a href="klienci.php"> 7. Klienci </a><br />


</div>

<div class = "tekst"> Dostępne sztuki: 

<?php 
include 'konfiguracja.php';

$baza = mysqli_connect($db_server, $db_login, $db_pass, $db_baza) or die ("błąd połączenia");

$zapytanie="SELECT * FROM gry WHERE Nazwa = 'Wieśmin'";

$wynik = $baza->query($zapytanie) or die ('błedne zapytanie');
$wynik1 = $baza->query($zapytanie) or die ('błedne zapytanie');

while ($wiersz = $wynik->fetch_assoc() and $wynik1->fetch_assoc())
{
	
	echo $wiersz['Sztuki']." ";
	
};

$baza->close();

?>

</div><br />
<div class = "tekst">Cena pojedynczej sztuki: 

<?php 
include 'konfiguracja.php';

$baza = mysqli_connect($db_server, $db_login, $db_pass, $db_baza) or die ("błąd połączenia");

$zapytanie="SELECT * FROM gry WHERE Nazwa = 'Wieśmin'";

$wynik = $baza->query($zapytanie) or die ('błedne zapytanie');
$wynik1 = $baza->query($zapytanie) or die ('błedne zapytanie');

while ($wiersz = $wynik->fetch_assoc() and $wynik1->fetch_assoc())
{
	
	echo $wiersz['Cena']." ";
	
};

$baza->close();

?>
<br />
<input type="button" value="Powrot" onClick="location.href='polecane.php';" />
<input type="button" value="Zakup" onClick="location.href='zakup2.php';" />

</div>

<div class="pole">
<img src="7.jpg" class="sklep"> </img>
</div>


</body>
</html>