<?php
session_start();
?>

<html>
<head>

 <meta charset="utf-8">
 <title>Edycja</title>
   
  <meta name="description" content="Projekt grupowy">
  <meta name="keywords" content="projekt, grupowy">
  <meta name="author" content="Grupa">
	 
  <link rel="stylesheet" href="style.css"> 
   
</head>
<body>

<body background="1.jpg">

<div id="pole_projekt1" class="pole_projekt1">
<!-- Formularz edycji podstawowych danych projektu -->
<form method = "POST" action="aktualizuj.php">
<font size=5 name="Arial" color="white">Podaj nazwę projektu do edycji:</font><input type="text" name="nazwa_projektu_wybor" size=15% /> <br /> <br /> 
<font size=5 name="Arial" color="white">Nowa nazwa:</font><input type="text" name="nazwa_projektu" size=15% /> <br /> 
<font size=5 name="Arial" color="white">Zaktualizuj opis problemu:</font><input type="text" name="opis_problemu" size=21% /> <br />
<font size=5 name="Arial" color="white">Zmień funkcję:</font><input type="text" name="funkcja" size=15% /> <br />
<tr><td><input type="reset" value="Wyczyść dane"> <input type="submit" value="Zmień dane"></td></tr>
</form>

</div>

<a href="Wykaz.php"><div id="powrot" class="powrot">
<b>Powrót</b>
</div></a>

</body>
</html>