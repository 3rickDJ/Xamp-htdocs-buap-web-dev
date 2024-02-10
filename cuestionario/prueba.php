<?php
include "class/sql.php";
include "class/encuesta.php";

$e = new encuesta();
$obj = $e->preguntas(1,1);

echo "<pre>";
print_r($obj);
echo "</pre>";
?>