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

<div class="dodawanie">
<table border="5">
<form method = "POST" action="go.php">
<tr><td><font size=5 name="Arial" color="white">Nazwa gry:</font><input type="text" name="nazwa" size=15% /></td></tr>
<tr><td><font size=5 name="Arial" color="white">Twórca:</font><input type="text" name="tworca" size=21% /></td></tr>
<tr><td><font size=5 name="Arial" color="white">Rodzaj:</font>
	<select name="rodzaj">
	<option value = "Strzelanka">Strzelanka</option>
	<option value = "RPG">RPG</option>
	<option value = "Przygodowa">Przygodowa</option>
	<option value = "Sportowa">Sportowa</option>
	</select> </td></tr>
<tr><td><font size=5 name="Arial" color="white">Liczba sztuk:</font><input type="text" name="sztuki" size=2% /></td></tr>
<tr><td><font size=5 name="Arial" color="white">Cena:</font>
  <input type="radio" name="cena" value="50"> <font size=5 name="Arial" color="white">50</font>
  <input type="radio" name="cena" value="100"> <font size=5 name="Arial" color="white">100</font>
  <input type="radio" name="cena" value="150"> <font size=5 name="Arial" color="white">150</font> </td></tr>
<tr><td>Jakie gry dodajesz?<br><input type="checkbox" name="nowe" value="+" />NOWE
<input type="checkbox" name="uzywane" value="+" />UZYWANE</td></tr>
<tr><td><input type="reset" value="Wyczyść dane"> <input type="submit" value="Dodaj do bazy gier"></td></tr>
</form>
</table>
</div>


<div class="pole">
<img src="7.jpg" class="sklep"> </img>
</div>


</body>
</html>