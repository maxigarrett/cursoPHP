<?php
/* para actualizar datos de una tabla la sintaxis es asi:
    UPDATE(clausula para modificar registro) NOMBRE_TABLA  SET CAMPOS_A_ACTUALIZAR = VALOR_DE_CAMPO WHERE CAMPO= CRITERIO

EJEMPLO:
    en nuestra vase de datos tenemos una tabla llamada 'articulos' que tiene campos 'SECCION' 'PRODUCTOS' 'FECHA' 'PAIS' 'PRECIO'
     'CODIGO'

     entonces si nosotros quicieramos modificar en el campo PRODUCTOS un valor como 'tubo' y ponerle 'el tubo' la consulta sql seria:
        UPDATE articulos SET PRODUCTOS='el tubo' WHERE PAIS='china'
        esto modificara todos los productos llamadas tubo donde el pais sea china y pasaran a llamarse el tubo


        si queremos modificar el precio de unn solo producto por mas que se repita solo modificamos por su codigo de articulo
        unico para cada uno 
        UPDATE artículos SET PRECIO='600' WHERE CODIGO='27'(el precio antes era de 500 y pasa a ser 600)
        si fuera el precio entero y no texto pondremos PRECIO=PRECIO + 100 para que pase de 500 a 600


        si queremos modificar mas campo se separan con como despues del SET pero SET se escribe uno ves
        UPDATE artículos SET PRODUCTOS='el tubito', PAIS='ESPAÑA' WHERE FECHA='04/03/1997'

        anteriormente modificamos todos los productos 'tubo' por 'el tubo' y ahora modificamos una sola fila
        diciendo SET PRODUCTOS='el tubito', PAIS='ESPAÑA' modificando dos campos y donde la fecha sea  FECHA='04/03/1997'
        con esto modificara los dos campo el registro que tenga esa fecha especificada
    */


?>