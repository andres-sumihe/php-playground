<?php 
    session_start();
    $_SESSION["data"] = $_POST["data"];
    header('location: rmk.php');
    

?>