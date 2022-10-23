<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuarios</title>
</head>

<body>
    
    <form action="usuario.php" method="post" id="" onsubmit="checarcontrasena()" >
                            <label for="">Nombre</label> <br>
                            <input type="text" value="" name="nombre" ><br>
                            <label for="">telefono</label><br>
                            <input type="tel" name="telefono" id=""><br>
                            <label for="">E-mail</label><br>
                            <input type="text" name="email" id=""><br>
                            <label for="">contraseña</label> <br>
                            <input type="password" name="pass1" id="pass1"> <br>
                            <label for="">confirmar contraseña</label> <br>
                            <input type="password" name="pass2" id="pass2"> <br>
                            <label for="">ingrese RFC</label> <br>
                            <input type="text" name="rfc" id=""><br><br>
                            <textarea name="area" id="" cols="30" rows="10"></textarea> <br>
                            <input type="submit" value="btn_enviar" name="Enviar">
                        </form>

    <script>
        function checarcontrasena() {
            var pass1 = document.getElementById("pass1").value;
            var pass2 = document.getElementById("pass2").value;
            var espacios_blacos = false;
            var cont = 0;
            while (!espacios_blacos && (cont < pass1.length)) {
                if (pass1.charAt(cont) == " ")
                    espacios_blacos = true;
                cont++;
            }

            while (!espacios_blacos && (cont < pass2.length)) {
                if (pass2.charAt(cont) == " ")
                    espacios_blacos = true;
                cont++;
            }

            if (espacios_blacos) {
                alert("la contraseña no puede tener espacios en blanco");
                return false;
            }

            if (pass1.length == 0 || pass2.length == 0) {
                alert("llena correctamente los campos del password")
                return false;
            }

            if (pass1 != pass2) {
                alert("la contraseña no coincide");
                return false;
            } else {
                //alert("las contraseñas  o.o coinciden");
                return true;
            }
        }
    </script>
</body>

</html>