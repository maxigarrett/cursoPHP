<!--INYECCION SQL 
    es una tecnica de hacking o ataque a paginas web y como creadores de paginas web tenemos que estar prevenidos
    de estos ataques
    la INYECCION SQL coinciste en insertar un codigo adicional que se agrega a la instruccion sql por ejemplo colocando
    esa instruccion demas en una casilla de un formulario:
        SELECT * FROM artículos WHERE CODIGO=$busqueda ( inyeccion sql =>)or 'z' 0 'z' 
        en la casilla de texto para poner la iyeccion primero cuando pongamos por ejemplo (Cenicero' or 'z' = 'z)  
        el Cenizero cerramos con comilla simple la instruccion en el input de la pagina web y la z del final va sin comilla ya q lo
        cierra la instruccion sql nuestra
        esto lo uqe ara que en ves de mostrar
        toda la informacion de un producto mediante el codigo como nosotros programamos, mostrará toda la base de datos 
    
        puede ser 1=1 , z=z, etc-->
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
    <label for="bus">BUSQUEDA</label>
    <input type="text" name="buscar" id="buscar" autofocus>

    <input type="submit" value="enviar">
</form>
</body>
</html>
