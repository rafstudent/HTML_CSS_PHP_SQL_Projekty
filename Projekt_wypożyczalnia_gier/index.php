<html>
<head>
<title>Wypożyczalnia gier</title>
<link rel="Stylesheet" type="text/css" href="style.css" />

<script type="text/javascript" src="jq.js"></script>
<script type="text/javascript">

$(document).ready(function()
{
	$("a").on("click",function(){
		var x=$(this).attr("pokaz");
		$("#test1").load(x);
		
	})
});

</script>

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

<div id="test" class="test">
<a pokaz="test.php"><b>Autorzy |</b></a>
<a pokaz="test1.php"><b>Dodatki |</b></a>
<a pokaz="test2.php"><b>Opis Projektu</b></a>
</div>

<div id="test1" class="test1">
</div>

<div class="pole">
<img src="7.jpg" class="sklep"> </img>
</div>


</body>
</html>