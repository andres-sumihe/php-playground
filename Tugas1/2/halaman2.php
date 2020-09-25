<?php 
    $num = $_POST["angka"];
    echo ($num % 2 == 0) ? "{$num} is even number" : "{$num} is odd number";
?>