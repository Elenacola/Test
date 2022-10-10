------------------
check_data.php
------------------

<html>
<body>

<?php

function checkdata () {
$data_offerta = mktime (0,0,0,8,1,18);
$data_oggi = mktime (0,0,0,date("m"),date("d"),date("y"));
if ($data_oggi <= $data_offerta) {
return 1;
} else {
return 0;
}
}

if (checkdata ()) {
echo "La nostra offerta per il prodotto A è valida fino al 1 Agosto 2022";
} else {
echo "La nostra offerta per il prodotto A è scaduta";
}

?>

</body>
</html>