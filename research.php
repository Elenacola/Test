***********************
MOTORE DI RICERCA
***********************


cerca.htm
---------

<form action="motore.php" method="POST">
Cerca <input type="text" name="campo"> all'interno di
<select name="numeropisello">
<option value="0" selected>ID</option>
<option value="1">NOME</option>
<option value="2">COGNOME</option>
</select>
<input type="submit" value="Cerca">
</form>

motore.php
-----------

<?php
$textfile = fopen("iscritti.txt", "r");
while ($rigafile = fgets($textfile,1024)) {
$campiriga = explode("|", $rigafile);
$chiave = $_POST["campo"];
$numpisello = $_POST["numeropisello"];
if ($chiave == $campiriga[$numpisello]) {
echo $rigafile;
}
}
fclose($textfile);
?>

Esempio: semplice motore di ricerca che visualizza i dati della riga del file iscritti.txt sulla base di un criterio di ricerca inserito manualmente all'interno del programma motore1.php.

cerca1.htm
---------

<form action="motore1.php" method="POST">
Cerca <input type="text" name="campo">
<input type="submit" value="Cerca">
</form>

motore1.php
-----------
<?php
$textfile = fopen("iscritti.txt", "r");
while ($rigafile = fgets($textfile,1024)) {
$campiriga = explode("|", $rigafile);
$chiave = $_POST["campo"];
if (($chiave == $campiriga[0]) or ($chiave == $campiriga[1]) or ($chiave == $campiriga[7])) {
echo $rigafile;
}
}
fclose($textfile);
?>
