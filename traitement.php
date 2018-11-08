<?php
$table = $_GET["table"];
if (isset($_GET["table"])){
    for ($x = 0; $x <= 30; $x++) {
        $total = $table * $x;
        print "$table X $x = $total<br>";
    }   
} 





?>