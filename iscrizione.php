
Iscrizione
<form method="post" action="http://www.tuosito.com/scrivi.php">
Nome: <input type="text" size="10" name="nome"><br>
Email <input type="text" size="15" name="email"><br>
<input type="submit" value="Invia">
</form>

<?php
$textfile = fopen("iscritti.txt", "a");
$cid = $_POST["id"];
$cnome = $_POST["nome"];
$ccognome = $_POST["cognome"];
$cemail = $_POST["email"];

$datiform = $cid . "|" . $cnome . "|" . $ccognome . "|" . $cemail . "\n";

fwrite($textfile, $datiform);

echo "Grazie per esserti iscritto alla nostra newsletter";
?>