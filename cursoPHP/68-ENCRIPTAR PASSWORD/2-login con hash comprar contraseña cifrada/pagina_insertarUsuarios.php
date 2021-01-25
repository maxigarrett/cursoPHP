<?php

    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];

    // despues de capturar y almacenar la contraseña la encriptamos con passwor_hash() y por parametro pide dos argumetos
    // el primero es la informacion que queremos encriptar y el segundo parametro es el modo de incriptacion con PASSWORD_DEFAULT y
    // con esto conseguimos que la sal que nos va a generar lo haga de manera automatica como tercer parametro le pasamos el coste
    // osea el tiempo de cifrado y cambiamos el que viene por defecto si el numero es mas alto mas seguro es pero mas recursos ocupa
    // del servidor por lo tanto mas lento 
    $passEncriptadp=password_hash($contraseña,PASSWORD_DEFAULT,array("cost"=>12));
    try 
    {

        
        $base=new PDO("mysql:host=localhost;dbname=cursodephp","root","");
        
        $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        $base->exec("SET CHARACTER SET UTF8");
        
        $sql="INSERT INTO usuarios_pass (USUARIOS,PASS) VALUES (:usu , :contra)";
        
        $resultado= $base->prepare($sql);
        //en ves de utilizar como marcador de :contra $contraseña utilizaremos la variable encriptada
        $resultado->execute(array(":usu"=>$usuario,":contra"=>$passEncriptadp));
        
        echo'Registro Insertado';
        
        $resultado->closeCursor();
        
        
        
    } catch (Exception $e) 
    {
        die('error de conexion '.$e->getMessage());
        echo 'linea de erro'.$e->getLine();
    }
    finally
    {
        $base=null;
    } 

/*si el usuario como usuario introdujo pepe y contraseña=443322 al guardar en la BBDD la contraseña se vera
    $2y$10$joiahpsfaklñf67ar7ra898haks
    $2y$(tipo de algoritmo utilizado que es BLOWFISH) 10$(furza de encriptado) joiahpsfaklñf67ar7ra898haks(la sal y hash o encriptacion) */
?>