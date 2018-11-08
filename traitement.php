<?php
$table = $_GET["table"];

for ($x = 0; $x <= 30; $x++) {
    $total = $table * $x;
    echo "$total";
} 

?>