<?php
    if(isset($_POST['hobi'])){
        echo "Hobiku <br>";
        echo implode(", ", $_POST['hobi']) . ".";
    }
?>
