<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" href="js/jquery-3.6.0.min.js">
    <script>
        $(document).ready(function() {
            alert("si funciona la vercion cnd...")
        })
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="test1.php">ingresar usuario</a>
    <a href="prueba.php">prueba</a>

<br>
<br>

    <a href="btnexcel.php">
       reporte excel
    </a>
    <a href="btnexcel.php">
       reporte pdf
    </a>
    
<br>
<br>

    

    <table id="table" class="table" >
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>E-mail</th>
                <th>Password</th>
                <th>RFC</th>
                <th>texto</th>
                <th>Dir IP</th>
            </tr>
        </thead>
        <?php
        include 'conn.php';
        $resultado = mysqli_query($conn, "SELECT * FROM usuario");
        while ($row = mysqli_fetch_array($resultado)) { ?>
            <tbody>
                <tr>
                    <th><?php echo $row['id']; ?></th>
                    <th><?php echo $row['nombre']; ?></th>
                    <th><?php echo $row['telefono']; ?></th>
                    <th><?php echo $row['email']; ?></th>
                    <th><?php echo $row['pass1']; ?></th>
                    <th><?php echo $row['rfc']; ?></th>
                    <th><?php echo $row['texarea']; ?></th>
                    <th><?php echo $row['ip']; ?></th>
                </tr>
            </tbody>
        <?php } ?>
    </table>


    <?php
    session_start();
    if (isset($_SESSION['nameuser'])) {
        $usuarioingresado = $_SESSION['nameuser'];
        echo "<h1>bienbenido $usuarioingresado</h1>";
    }
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

</body>
<script type="text/javascript">
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>

</html>