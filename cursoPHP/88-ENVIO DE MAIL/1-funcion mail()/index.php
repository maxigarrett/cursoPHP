<!-- esto no anda ya que estamos en local para que ande tendriamos que esatr mandando desde un hosting tambien hay q ver
que el hosting o el que provee el servicio tenga activado para enviar email sino hay q comunicarse con el proveedor de
hosting hay otras formas de enviar emails  de forma local para hacer pruebas como  PHPmiller -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>  
    <form action="enviaEmail.php" method="post">
        <table>
            <tr>
                <td><label for="">Nombre *</label></td>
                <td><input type="text" name="nombre" id=""></td>
            </tr>
            <tr>
                <td><label for="">Apellido *</label></td>
                <td><input type="text" name="apellido" id=""></td>
            </tr>
            <tr>
                <td><label for="">Direccion de Email a enviar *</label></td>
                <td><input type="text" name="email" id=""></td>
            </tr>
            <tr>
                <td><label for="">Número de telefono *</label></td>
                <td><input type="text" name="telefono" id="" maxlength="25"></td>
            </tr>
            <tr>
                <td><label for="">Asunto *</label></td>
                <td><input type="text" name="asunto" id=""></td>
            </tr>
            <tr>
                <td><label for="">Contenido *</label></td>
                <td><textarea name="comentario" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="Enviar"></td> 
            </tr>
            
        </table>
    </form>

</body>
</html>