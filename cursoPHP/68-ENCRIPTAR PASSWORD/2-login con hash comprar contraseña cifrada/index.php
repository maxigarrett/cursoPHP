<?php
/*ENCRIPTACION
    cuando un usuario se registra su usuario y contraseña en la BBDD y lo que necesitamos encriptar es la contraseña
    y conciste en capturar la contraseña de usuario y aplicarle lo uqe se denomina un algoritmo de encriptacion y al hacerlo conseguimos
    que la contraseña de ese o varios usuario se transforme en un codigo indesifrable o ilegible porque se tranforma en una sucesion de 
    letras,numeros y simbolos y a ese codigo resultante osea ese password ilegible se lo denomina HASH 
    
Algoritomos para encriptar la informacion:
    alg de encriptacion     FUNCION A APLICAR
    
    MOD5   -->              md5() no recomendado ya q son viejos y saben como se comporta y es facilmente violable
    
    SHA1   -->              sha1() no recomendado
    
    SHA256   -->            hash() no recomendado
    
    BLOWFISH   -->          crypt() sal(manualmente)
                            password_hash() mas facil de usar sal(automatica)



Algoritmo que utilizaremos es el BLOWFISH
    la contraseña que le apliquemos el algortimo BLOWFISH. Lo que conseguimos es un codigo hash que se va a dividir de la siguinte manera
   
    1er parte- al comienzo del codigo tendremos el algoritmo utilizado y normalmente si se utiliza bowfish se identifica con '$2y$'.
   
    2da parte- a continuacion estaria lo que se denomina opciones de algoritmo seria la fuerza con la que queremos que actue el algoritmo
    a mas fuerza mas tiempo va a tardar la pagina web en aplicar el algoritmo y guardar la informacion en la base de datos pero mas 
    dificil hara que esa contraseña cifrada se pueda crakear  15$ se lo cono tambien como coste
    
    3era parte-  luego aplica lo que seria el codigo hash(sucesion de numeros,simbolos y letras) pero las dos funciones que se encuentran
    en el algoritmo BLOWFISH que son cryp() y password_hash() aplican un elemento diferenciador q es lo qlos hace fuertes y es lo que se
    denomina la SAL en ingles SALT y coinciste en un codigo aleatorio que se aplica a antes del codigo hash final por lo que quedaria
    un codigo hash larguisimo y cambia a cada contraseña de usuario por lo uqe si dos usuarios introducen la misma contraseña el codigo
    final seria distinto por la SAL generada automaticamente diferente para cada usuario*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>REGISTRATE</h1>
    <form action="pagina_insertarUsuarios.php" method="post">
        <label for="">usuario</label>
        <input type="text" name="usuario" id="">

        <label for="">contraseña</label>
        <input type="password" name="contraseña" id="">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>