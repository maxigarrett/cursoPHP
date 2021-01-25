<?php

$contador=0;//para saber si el login existe o no e la base de datos

    try 
    {

        $usuario=$_POST['usuario'];
        $contraseña=$_POST['contraseña'];
        
        $base=new PDO("mysql:host=localhost;dbname=cursodephp","root","");
        
        $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        $base->exec("SET CHARACTER SET UTF8");
        
        //si ponemos como criterio tambien la contraseña no anda y debe ser porque esta encriptada y ademas la comparacion
        // de si coincide o no lo hace password_verify
        $sql="SELECT * FROM usuarios_pass WHERE USUARIOS=:usu";
        
        $resultado= $base->prepare($sql);
        
        $resultado->execute(array(":usu"=>$usuario,));
        
    //    matias 11224455 para comprobar la contraseña encriptada hay mas encriptadas pero esas no funcionan xq no modifique la longitud
    //  marcos 6666
        while($fila=$resultado->fetch(PDO::FETCH_ASSOC))
        {
            // echo 'Usuario: '.$fila['USUARIOS'].' CONTRASEÑA: '.$fila['PASS'];//muestra usuario sin contra cifrada

            // para comparar contraseñas cifradas usamos la funcion password_verify que como primer parametro pide la
            // contraseña puesta por el usuario y como segundo parametro la contraseña de la base de datos que la estamos
            // recorriendo en el while y almacenando en la variable $fila todos los campos ademas del PASS
            // devuelve true si son iguales y false sino lo son
            if(password_verify($contraseña,$fila['PASS']))
            {
               $contador++;
            }
        }   
        
        if($contador>0)
        {
            echo'usuario registrado';
        }
        else
        {
            echo'usuario no registrado';
        }
        
        
    } catch (Exception $e) 
    {
        die('error de conexion '.$e->getMessage());
        echo 'linea de erro'.$e->getLine();
    }
    finally
    {
        $resultado->closeCursor();
        $base=null;
    } 


?>