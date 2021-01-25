<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="inserta_contenido.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="">Titulo</label></td>
                <td><input type="text" name="titulo" id="titulo"></td>
            </tr>
            <tr>
                <td><label for="">cometario</label></td>
                <td><textarea name="comentario" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <input type="hidden" name="MAX_TAM" value="2097152"><!--no se ve y sirve para que los archivos no exeda los dos megas-->
            <tr>
                <td style="text-align: center;"><p>seleccione una imagen menor a 2MB</p></td>
            </tr>
            <tr>
                <td> <td><input type="file" name="imagen" id=""></td></td>
            </tr>
            <tr>
                <td><input type="submit" value="Enviar"></td>
            </tr>

        </table>
    </form>
</body>
</html>