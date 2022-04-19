<?php 
include 'conn.php';
if ($conn){

    $datos = "SELECT * FROM usuario";
    $query = mysqli_query($conn,$datos);
    $nom_document = "Usuarios.xls";
    header('content-type: application/vnd.ms-excel');
    header('content-Disposition: attachment; filename='.$nom_document);
    header('Pragma: no-cache');
    header('Expires: 0');
    echo'<table border=1>';
    echo'<tr>';
    echo'<th colspan = 8>Tabla de Usuarios </th>';
    echo'<tr>';
    echo'<tr><th>ID</th><th>NOMBRE</th><th>TELEFONO</th><th>E-MAIL</th><th>PASSWORD 1</th><th>PASSWORD 2</th><th>RFC</th><th>TEXTO</th><th>IP</th></tr>';
    while($filas = mysqli_fetch_array($query)){
        echo'<tr>';
        echo'<td>'.$filas['id'].'</td>';
        echo'<td>'.$filas['nombre'].'</td>';
        echo'<td>'.$filas['telefono'].'</td>';
        echo'<td>'.$filas['email'].'</td>';
        echo'<td>'.$filas['pass1'].'</td>';
        echo'<td>'.$filas['pass2'].'</td>';
        echo'<td>'.$filas['rfc'].'</td>';
        echo'<td>'.$filas['texarea'].'</td>';
        echo'<td>'.$filas['ip'].'</td>';
        echo'</tr>';
    }
    echo '</table>';
}else{
    echo "no se pudo conectar a la base de datos";
}
?>