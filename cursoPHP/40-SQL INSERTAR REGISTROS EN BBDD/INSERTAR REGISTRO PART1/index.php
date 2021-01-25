<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<h1>INSERTAMOS REGISTRO EN MYSQL</h1>
   
    <form action="paginaInsertarRegistro.php" method="post">

        <table >
            <tr>
                <td><label for="">SECCIÓN</label></td>
                <td><input type="text" name="seccion" id="" autofocus></td>
            </tr>
            <tr>
               <td><label for="">PRODUCTOS</label></td>
              <td><input type="text" name="productos" id=""></td> 
            </tr>
         
            <tr>
                <td> <label for="">FECHA</label></td>
                <td><input type="text" name="fecha" id=""></td>
                
            </tr>

            <tr>
                <td><label for="">PAIS</label></td>
                <td><input type="text" name="pais" id=""></td>
                
            </tr>
            <tr>
                <td><label for="">PRECIO</label></td>
                <td><input type="text" name="precio" id=""></td>
                
            </tr>

            <tr>
                <td><input type="submit" value="enviar"></td>
               <td> <input type="reset" value="borrar"></td>
              
            </tr>
         
          
          </table>
    </form>
</body>
</html>