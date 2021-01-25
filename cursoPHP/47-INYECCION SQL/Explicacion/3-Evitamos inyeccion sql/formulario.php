<!--INYECCION SQL 
    ¿como evitar la inyeccion SQL?
    hay diferentes formas de evitar la inyeccion sql pero hay dos formas secillas que es utilizar dos funciones
    que vienen con la lbreria mysqli:
        mysqli_real_scape_string() - mas recomendable
        
        mysqli_addslashes() -  esta funcion ebita los caracteres mas utilizados en la inyeccion sql que es '(comilla simple) pero hay
        mas caracteres como & y muchisimos mas y ademas cada caracter se representa por un codigo ASCII entonces se puede remplazar
        el caracter por el codigo ASCCI por lo cual ya esta funcion no sirve ya que en ves de utilizar la ' usamos el codigo
        
        Consultas preparadas - la mas utilizada de todas ya q es mas robusta crea consultas sql con parametros y esos parametros
                            filtrarlos antes de ejecutarlos
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action="resultadoBusqueda.php" method="post">
    <label for="usuario">USUARIO</label>
    <input type="text" name="usuario" id="usuario" autofocus>

    <label for="contraseña">USUARIO</label>
    <input type="text" name="contraseña" id="contraseña" autofocus>

    <input type="submit" value="enviar">
</form>
</body>
</html>
