<!-- CONSULTAS PREPARADAS
        ventajas: Evitasn inyeccion sql,en consultas de tipo INSERT son mas rapidas y eficientes.
        desventajas: hay que escribir mucho mas codigo
    
    Pasos a seguir:
        1-Creamos la sentencia SQL sustituyendo los valores de criterio por el simbolo ?
            $sql=SELECT * FROM articulos WHERE PAIS=?

        2-Preparar la consulta con la funcion mysqli_prepare(). Esta funcion requiere dos parametros: el objeto conexion y la sentencia
        sql. $resultado= mysqli_prepare($conexion,$sql) esta funcion devulve un objeto de tipo mysqli_stmt(fundamental para los otros 
        pasos)
        $conexion es la variable que se conecta a la BBDD

        3-Unimos los parametros a la sentencia sql . Des esto se encarga la funcion mysqli_stmt_bind_param(). devulve true o false
        esta funcion tres parametros: el objeto mysqli_stmt(la devulve myqli_prepare()), el tipo de dato que se utilizara('s' si es string
        'd' si es decimal, 'i' si es entero,etc como criterio en sql) , variable con criterio 

        4-Ejecutar la consulta con la funcion mysqli_stmt_execute(). Esta funcion devulve true o false. Necesita como parametro
        el objeto mysql_stmt() que seria resultado

        5-Asociar variables al resultado de la consulta. Esto lo conseguimos con la funcion mysqli_stmt_bind_result(). Devuelve true
        o false. Necesita como parametro el objeto mysqli_stmt(lo que devulve la consulta mysqli_prepare()) y tantas variables como
        columnas o campos tengamos en la consulta sql

        6- Lectura de valores. Para ello utilizamos la funcion mysqli_stmt_fetch. Pide como parametro el objeto mysqli_stmt

        
        como se ve simpre las funciones despues de l paso2 esta requiriendo el objeto mysli_stmt que devulve la funcion mysqli_prepare
        almacenada en resultado
     -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="resultadoBusqueda.php" method="post">
    <label for="bus">Introduce Pais</label>
    <input type="text" name="buscar" id="buscar" autofocus>

    <input type="submit" value="enviar">
</form>
</body>
</html>