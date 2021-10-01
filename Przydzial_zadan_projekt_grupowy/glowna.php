<?php
// Odpowiada za nie pokazywanie ostrzeżeń na stronie
error_reporting(E_ALL ^ E_NOTICE);
?>

<?php
// Konieczne do użycia zmiennych sesyjnych
session_start();
?>

<html>
<head>

 <meta charset="utf-8">
 <title>Projekt</title>
   
  <meta name="description" content="Projekt grupowy">
  <meta name="keywords" content="projekt, grupowy">
  <meta name="author" content="Grupa">
	 
  <link rel="stylesheet" href="style.css"> 
   
</head>
<body>

<body background="1.jpg">

<div id="logo" class="logo">

</div>

<div id="menu" class="menu">
<!-- Linki do poszczególnych podstron -->
<a href="log.php"><div id="pole1" class="pole1">
<b><center>Logowanie</center></b>
</div></a>

<a href="tabela.php"><div id="pole2" class="pole2">
<b><center>Tabela</b></center>
</div></a>

<a href="wykaz.php"><div id="pole3" class="pole3">
<b><center>Projekty</b></center>
</div></a>

<a href="autorzy.php"><div id="pole4" class="pole4">
<b><center>Autorzy</b></center>
</div></a>

</div>

<div id="pole_obrazek" class="pole_obrazek">

</div>

<div id="pole7" class="pole7">

<?PHP
// Sprawdza czy użytkownik jest zalogowany
if($_SESSION["zalogowany"]==$_SESSION['login'] && $_SESSION["zalogowany"]!=''){ $zmienna_zalogowany = $_SESSION['login']; echo $zmienna_zalogowany; echo " masz dostęp";} else {echo "Nie masz dostępu"; exit();};
?>

</div>

<?PHP
// Jeżeli użytkownik jest zalogowany, wyświetla opcję "Wyloguj się"
if($_SESSION["zalogowany"]==$_SESSION['login'])
{echo "<a href='wyloguj.php'><div id='pole8' class='pole8'>
<b><center>Wyloguj się</b></center>
</div></a>";};
?>

</body>
</html>