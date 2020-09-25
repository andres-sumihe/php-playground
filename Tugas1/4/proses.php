<?php 
    $username = $_POST["username"];
    $password = $_POST["password"];
    echo ($username == $password) 
    ? 
    "User Name dan Password Sama" 
    : 
    "Selamat datang halaman 2";
?>