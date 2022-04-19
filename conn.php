<?php

$server= "127.0.0.1";
$user = "root";
$pass = "";
$db = "prueba";
$port = "3310";

$conn = mysqli_connect($server,$user,$pass,$db,$port);

if($conn){
    //echo "jala";
}else{
    echo "no jala";
}

?>