<?php
if (isset($_GET["table"])){
    $table = $_GET["table"];
    for ($x = 0; $x <= 15; $x++) {
        $total = $table * $x;
        echo "$table X $x = $total<br>";
    }
}
?>