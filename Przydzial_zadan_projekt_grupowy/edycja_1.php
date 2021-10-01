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
<!-- Formularz edycji daty rozpoczęcia projektu -->
<form method = "POST" action="aktualizuj_1.php">
<font size=5 name="Arial" color="white">Podaj nazwę projektu do edycji:</font><input type="text" name="nazwa_projektu_wybor" size=15% /> <br /> <br /> 
<font size=5 name="Arial" color="white">Podaj nową datę rozpoczęcia:</font><input type="date" value="0" name="data_rozpoczecia" size=10% /> <br />
<tr><td><input type="reset" value="Wyczyść dane"> <input type="submit" value="Zmień dane"></td></tr>
</form>

</div>

<a href="Wykaz.php"><div id="powrot" class="powrot">
<b>Powrót</b>
</div></a>

</body>
</html>