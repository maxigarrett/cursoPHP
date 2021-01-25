<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form style="display: flex; flex-direction:column; width:20%" action="insertaDatosPDO.php" method="post">
        <label for="">SECCION</label>
        <input type="text" name="insertaSeccion" id="">
       
        <label for="">PRODUCTO</label>
        <input type="text" name="insertaProductos" id="">
       
        <label for="">FECHA</label>
        <input type="text" name="insertaFecha" id="">
        
        <label for="">PAIS De ORIGEN</label>
        <input type="text" name="insertaPais" id="">
        
        <label for="">PRECIO</label>
        <input type="text" name="insertaPrecio" id="">
        
        <label for="">CODIGO</label>
        <input type="text" name="insertaCodigo" id="">
        


        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>