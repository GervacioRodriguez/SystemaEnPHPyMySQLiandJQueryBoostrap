<?php 
include 'conn.php';
if($conn){
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $contra1 = $_POST['pass1'];
    $contra2 = $_POST['pass2'];
    $rfc = $_POST['rfc'];
    $text1 = $_POST['area'];

    if($contra1 && $contra2){
            $pass1=sha1($contra1);
            $pass2=sha1($contra2);
            $ip = $_SERVER['REMOTE_ADDR'];//se obtiene la ip del servidor 
            $format = Date('YYYY-MM-DD HH:MI:SS');//se guarda la hora del servidor
    $guardar = "INSERT INTO `usuario`(`nombre`, `telefono`, `email`, `pass1`, `pass2`, `rfc`, `texarea`, `ip`, `fecha`) 
    VALUES ('$nombre','$telefono','$email','$pass1','$pass2','$rfc','$text1','$ip','$format')";               
    $resultado = mysqli_query($conn,$guardar);
    //var_dump($resultado);
    //var_dump($guardar);
    if($resultado){
        echo"
        <script language = 'JavaScript'>
             alert('los datos fueron ingresados correctamente');
             location.assign('test1.php');
             </script>
        ";
    }else{
        
        echo "
        <script language = 'JavaScript'>
        alert('los datos No fueron guardados correctamente');
        location.assign('test1.php');
        </script>
       ";
    }mysqli_close($conn);


    }else{
        echo "
        <script language = 'JavaScript'>
        alert('las contraseñas son diferentes');
        location.assign('test1.php');
        </script>
       ";
    }
}mysqli_close($conn);

?>