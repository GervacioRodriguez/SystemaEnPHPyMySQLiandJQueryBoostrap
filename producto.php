<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agragar productos</title>
</head>

<body>
    <form action="insertproducto.php" method="post">
        <fieldset>
            <legend>Agragar Productos</legend>
            <div>
                <label for="">Categoria</label><br>
                <select name="categorio" id="">
                    <option value=""></option>
                </select><br>
            </div>
            <div>
                <label for="">Descripcion</label><br>
                <textarea name="descripcion" id="" cols="20" rows="7"></textarea> <br>
            </div>
            <div>
                <label for="">Precio</label><br>
                <input type="text" name="precio" id=""><br>
            </div>
            <div>
                <label for="">Imagen del producto</label>
                <input type="file" name="foto" id=""> <br>
            </div>
            <div>
                <select name="Estatus" id="">
                    <option value="">Estatus</option>
                </select> <br>
            </div>
            <div>
                <label for="">Existencias</label><br>
                <input type="tex" name="exis" id=""><br>
            </div>
            <div>
                <input type="button" value="Enviar" name="btn_enviar">
            </div>
        </fieldset>
    </form>
</body>

</html>