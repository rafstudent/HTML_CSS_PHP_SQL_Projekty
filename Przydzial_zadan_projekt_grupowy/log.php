<?php
error_reporting(E_ALL ^ E_NOTICE);
?>

<?php
session_start();
?>

<html>
<head>
 <meta charset="utf-8">
 <title>Log</title>
   
  <meta name="description" content="Projekt grupowy">
  <meta name="keywords" content="projekt, grupowy">
  <meta name="author" content="Grupa">
	 
  <link rel="stylesheet" href="style.css"> 
</head>
<body>

<body background="1.jpg">

<div id="pole" class="pole">
<center><b>LOGOWANIE</b></center>

<div id="logowanie" class="logowanie">
<form method = "POST" action="go.php">
<table border="5">
<!-- Formularz logowania użytkownika -->
<tr><td><font size=5 name="Arial" color="white">Login:</font><input type="text" name="login" size=15% /></td></tr>
<tr><td><font size=5 name="Arial" color="white">Hasło:</font><input type="password" name="haslo" size=15% /></td></tr>
</table>
<input type="reset" value="Wyczyść dane"><input type="submit" value="Zaloguj się" name="loguj">
</form>
</div>

</div>

<a href="glowna.php"><div id="powrot" class="powrot">
<b>Powrót</b>
</div></a>

<?PHP
// Jeżeli użytkownik jest zalogowany, wyświetla link do podstrony z możliwością dodania nowego użytkownika
if($_SESSION["zalogowany"]==$_SESSION['login'] && $_SESSION["zalogowany"]!='')
{echo "<a href='nowy.php'><div id='nowy' class='nowy'>
<b>Dodaj użytkownika</b>
</div></a>";};
?>

</body>
</html>