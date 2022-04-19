<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script>
       /* $(document).ready(function (){
            alert("si funciona la vercion cnd...")
        })*/
    </script>
</head>

<body>
    <form id="frmajax" method="POST">
        <label for="">nombre</label><br>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="">contraseña</label><br>
        <input type="text" name="contra" id="contra"><br>
        <button id="btn_guardar">Guardar Datos</button>
    </form>
    <div id="respuesta"></div>
</body>

<script>
   $('#btn_guardar').click(function(){
       $.ajax({
           type:'POST',
           url:'insert.php',
           data:$('#frmajax').serialize(),
       }).done(function(res){
            ('#respuesta').html(res)
       });
   });
</script>

</html>