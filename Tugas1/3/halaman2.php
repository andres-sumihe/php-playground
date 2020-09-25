<?php 
    $first = $_GET["First"];
    $second = $_GET["Second"];
    if($first != $second)
        echo ($first > $second) 
        ? 
        "{$first} greater than {$second}" 
        :
        "{$second} greater than {$first}";
    else
        echo "The Number is equals";
?>