<?php 
require 'vendor/autoload.php';
include 'conn.php';
        $resultado = mysqli_query($conn, "SELECT * FROM usuario");
?>