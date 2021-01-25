<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .form
        {
            width: 40%;
            height: 60%;
            margin: auto;
            display: flex;
            flex-direction: column;
            
        }
        .btenviar
        {
            width: 20%;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <!-- para decirle que va hacer imagenes  enctype="multipart/form-data"-->
    <form class="form" action="datosImagen.php" method="post" enctype="multipart/form-data">
        <label for="imagen">Imagen</label>
        <input type="file" name="archivoImagen" size="50" id="imagen" multiple><!--size especificamos el tamaño del archivo enbites-->
        <input class="btenviar" type="submit" value="Enviar">
    </form>
</body>
</html>