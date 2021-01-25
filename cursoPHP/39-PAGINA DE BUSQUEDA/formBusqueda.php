<!-- PARA BUSCAR TENENMOS QUE TRABAJAR CON LAS INTRUCCIONES SQL CON COMODIN (% _) 
    
    el %: este sirve para identificar el valor de un o varios dato dentro de una tabla por ejemplo queremos identificar
            el valor CABALLERO dentro del campo NOMBREARTICULO pero no se encuentra solo esa palabra sino que puede decir
            CAMISA CABALLERO entonces dara error y para eso esta el comodin % oara indicarle que por delante o por detras
        puede haber caracteres o palabras ademas de la que buscamos %CABALLERO, CABALLERO% o %CABALLERO%.
     sintaxis:
        SELECT * FROM artículos WHERE NOMBRE ARTÍCULO LIKE '%CABALLERO';
    
    el _: sustituye a un unico caracter por ejemplo byscamos CENISERO pero sospechas de q pudo ser escrito con z osea CENIZERO
    la sintaxis seria asi: SELECT * FROM artículos WHERE NOMBRE ARTÍCULO LIKE 'CENI_ERO';  sustituimos ese caracter por un _-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action="pagina_busqueda.php" method="post">
    <label for="bus">BUSQUEDA</label>
    <input type="text" name="buscar" id="bus" autofocus>

    <input type="submit" value="enviar">
</form>
</body>
</html>