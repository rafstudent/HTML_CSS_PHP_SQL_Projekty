<?PHP
session_start();
// Wykonywane w momencie wybrania opcji "Wyloguj się" na stronie głównej
$_SESSION["zalogowany"]="Nie";

header ("Location: glowna.php");
?>