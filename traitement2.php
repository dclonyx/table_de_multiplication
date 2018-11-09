<?php
if (isset($_GET["table"])){
    $table = $_GET["table"];
    for ($x = 15; $x <= 30; $x++) {
        $total = $table * $x;
        echo "$table X $x = $total<br>";
    }
}
?>