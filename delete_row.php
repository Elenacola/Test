
<?php
$textfile = fopen("iscritti.txt", "r");
$textfile_new = fopen("iscritti_new.txt", "a");

while ($rigafile = fgets($textfile,1024)) {
$campiriga = explode("|", $rigafile);
$idriga = $campiriga[0];
if ($idriga <> 3) {
fwrite($textfile_new, $rigafile);
}
}

fclose($textfile);
fclose($textfile_new);

unlink("iscritti.txt");
rename("iscritti_new.txt","iscritti.txt");

echo "Cancellazione eseguita con successo<br>";

?>