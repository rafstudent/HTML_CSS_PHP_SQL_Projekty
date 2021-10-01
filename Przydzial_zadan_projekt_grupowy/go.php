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

<?PHP
session_start();
// Ustanowienie zmiennych sesyjnych oraz pobranie wartości z formularza
$_SESSION['zalogowany']="Nie";
$_SESSION['login']=$_POST['login'];
$login=$_POST['login'];
$haslo=$_POST['haslo'];

include 'konfiguracja.php';

$baza = mysqli_connect($db_server, $db_login, $db_pass, $db_baza) or die ("błąd połączenia");

$zapytanie="SELECT * FROM uzytkownicy";

$wynik = $baza->query($zapytanie) or die ('błedne zapytanie');

while ($wiersz = $wynik->fetch_assoc())
{

if(($login==$wiersz['login']) && (md5($haslo)==$wiersz['haslo']))

	{
		// Jeżeli dane logowania są poprawne, login zostaje podstawiony pod jedną ze zmiennych sesyjnych
		$_SESSION["zalogowany"]=$_SESSION['login'];
	 	header("Location: glowna.php");
	};
};
	$baza->close();
?>
<!-- Wyświetlane gdy podane zostały niewłaściwe dane logowania -->
<div id="pytanie" class="pytanie">
<b><font size=5 color="orange">Podałeś niewłaściwe dane logowania, czy chcesz spróbować ponownie?</font></b>
</div>

<a href="log.php"><div id="pole5" class="pole5">
<b>Tak</b>
</div></a>

<a href="glowna.php"><div id="pole6" class="pole6">
<b>Nie</b>
</div></a>

</body>
</html>