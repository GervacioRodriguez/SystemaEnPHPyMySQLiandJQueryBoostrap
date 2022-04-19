<?php
if(isset($_POST['btn_enviar'])){
    $cate=strtoupper($_POST['categorio']);
    $des=strtoupper($_POST['descripcion']);
    $precio=$_POST['precio'];
    $imagen=$_POST['foto'];
    //tratamiento de fotografias 
    $revisar = getimagesize($_FILES['foto']['tmp_name']);
    if($revisar != false){

    }    

    $estatus=strtoupper($_POST['Estatus']);
    $exis=$_POST['exis'];
    
}
?>