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

<div id="pole_projekt1" class="pole_projekt1">
<!-- Formularz dodania nowego projektu -->
<form method = "POST" action="przeslij.php">
<font size=5 name="Arial" color="white">Nazwa projektu:</font><input type="text" name="nazwa_projektu" size=15% /> <br /> 
<font size=5 name="Arial" color="white">Data Rozpoczęcia:</font><input type="date" name="data_rozpoczecia" size=10% /> <br />
<font size=5 name="Arial" color="white">Data zakończenia:</font><input type="date" name="data_zakonczenia" size=10% /> <br />
<font size=5 name="Arial" color="white">Opis problemu:</font><input type="text" name="opis_problemu" size=21% /> <br />
<font size=5 name="Arial" color="white">Funkcja:</font><input type="text" name="funkcja" size=15% /> <br /> <br />
<tr><td><input type="reset" value="Wyczyść dane"> <input type="submit" value="Dodaj projekt"></td></tr>
</form>

</div>

<a href="Wykaz.php"><div id="powrot" class="powrot">
<b>Powrót</b>
</div></a>

</body>
</html>