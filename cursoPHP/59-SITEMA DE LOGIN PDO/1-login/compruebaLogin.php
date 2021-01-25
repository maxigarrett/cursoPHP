<?php

    try 
    {
        
        
        $usuario=$_POST['user'];
        $pass=$_POST['pass'];

        $base=new PDO("mysql:host=localhost;dbname=cursodephp","root","");

        $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $base->exec("SET CHARACTER SET UTF8");

        $sql="SELECT * FROM usuarios_pass WHERE USUARIOS=:usuario AND PASS=:contra";

        $resultado= $base->prepare($sql);


        // // otra manera de utilizar marcadores es con el metodo o funcion htmlentities(convierte cualquier simbolo en 
        // // html) y como argumento de esta funcion addslashes(que lo que hace es escapar cualquier caracter de tipo 
        // // extraño que capuramos con la funcion htmlentities, osea los ignora para evitar la inyeccion sql)
        // $usuario=htmlentities(addslashes($_POST['user']));

        // $pass=htmlentities(addslashes($_POST['pass']));//esto es lo mismo y rescatamos la informacion del formulario

        // //otra funcion para decirle que el parametro es igual a lo rescatado del input para que lo almacene en la 
        // // sentencia sql
        // $resultado->bindValue(":usuario",$usuario);
        
        // $resultado->bindValue(":contra",$pass);

        $resultado->execute(array(":usuario"=>$usuario,":contra"=>$pass));


        //si en la consulta sql encuntra un usuario y contraseña en la BBDD que el usuario introdujo devolvera 1
        // so no encuntra coincidencia devulve 0
        $registroEncontrados=$resultado->rowCount();

        if($registroEncontrados!=0)//si encunetra registro 
        {
            session_start();//antes de redirigir al usuario iniciamos secion

            // una ves iniciado seccion creamos esta variable super global y la nombramos 'usuario' y va a ser
            // igual a lo que capturamos del input user despues vamos a la pagina donde redirige y 
            // hacemos un filtro para que solo vean a los usuarios registrados
            $_SESSION['usuario']=$_POST['user'];
            
            header('location: usuariosRegistrados1.php');
        }
        //podriamos redirigir a una pagina de registro
        else  header("location: formularioLogin.php");//si no encuntra coincidencia redirige al fomulario
                                //hasta no encontrar coincidencia no se  saldra del login
    }catch(Exception $e)
    {
        die("ERROR   ".$e->getMessage());
        die("LINEA  ".$e->getLine());
    }

?>