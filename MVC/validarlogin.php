<?php
session_start();
if(isset($_SESSION['nameuser']))
{
    header('location: menu.php');
}
if(isset($_POST['btn_enviar'])){
    include 'conn.php';
    $usuario=$_POST['email'];
$contra=$_POST['pass'];

$consulta="SELECT * FROM `usuario` WHERE email = '$usuario' AND pass1 = '$contra'";
$login = mysqli_query($conn,$consulta);
$nr = mysqli_num_rows($login);
if(!isset($_SESSION[''])){


if($nr == 1){
    $_SESSION['nameuser']=$name;//charcar si cumple con lo que se pide    
    header('location: menu.php');//esta funcion ingresa cuando el usario es el correcto
}
elseif($nr==0){
    echo "
    <script language = 'JavaScript'>
    alert('los datos son incorrectos verifique correo o password');
    location.assign('login.php');
    </script>
    ";
}
}
}
?>