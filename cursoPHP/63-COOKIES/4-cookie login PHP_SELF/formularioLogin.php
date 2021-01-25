<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php

if(isset($_POST['enviar']))//verifica si no pulsamos el boton enviar entonces si no lo pulsamos ejecute el try/catch
{
    
    try 
    {
       
        $comprobar=false;//para saber si se registro correctamente el usuario
        $usuario=$_POST['user'];
        $pass=$_POST['pass'];

        $base=new PDO("mysql:host=localhost;dbname=cursodephp","root","");

        $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $base->exec("SET CHARACTER SET UTF8");


        $sql="SELECT * FROM usuarios_pass WHERE USUARIOS=:usuario AND PASS=:contra";

        $resultado= $base->prepare($sql);

        $resultado->execute(array(":usuario"=>$usuario,":contra"=>$pass));


        //si en la consulta sql encuntra un usuario y contraseña en la BBDD que el usuario introdujo devolvera 1
        // so no encuntra coincidencia devulve 0
        $registroEncontrados=$resultado->rowCount();

        if($registroEncontrados!=0)//si encunetra registro creamos la cookie
        {
            // session_start();  
            // $_SESSION['usuario']=$_POST['user'];  
            $comprobar=true;
            echo'hola '.$_POST['user'];//inicamos sesion si activar la cookie muestra mensaje y si la activamos tambien
            if(isset($_POST['recordar']))//si activo la casilla de recordar creamos cookie
            {
                setcookie('usuario_registrado',$_POST['user'],time()+30);//en la cookie guardamos el nombre de usuario
                
            }  
        }
        else  echo'USUARIO NO EXISTENTE';
    }catch(Exception $e)
    {
        die("ERROR   ".$e->getMessage());
        die("LINEA  ".$e->getLine());
    }
    
}
else
{
    //al iniciar sesion y ceramos la pagina y volvemos a entrar si creamos la cookie mostrar el nombre de usuario
    if(isset($_COOKIE['usuario_registrado']))
    {
        echo 'Hola '.$_COOKIE['usuario_registrado'];
    }
    else
    {
        echo'no iniciaste sesion';
    }
    
}


?>


<?php
// con esto verificamos si entra por pimrea ves no inicio sesion ni creo la cookie asique incluira el formulario
// segunda comprobacion si iniciamos session correctamente entonces no entrara en el primer if entonces no se ejecutara nada de esto 
// y el formulario desaparece
// tercer caso que el usuario aya iniciado session y puso recordar y creo la cooki y cerro la pagina y entro a los 5 dias entonces
// al entrar el usuario no esta logueado por lo que la variable $comprobar esta en false y entrara en el primer if, pero al fijarse
// si la cookie se creo cosa que es asi entonces no entrara en el segundo if por lo que no aparecera el formulario 
   if(isset($comprobar)==false)
   {
       if(!isset($_COOKIE['usuario_registrado']))
       {
           include('formulario.php');
       }
       
   }

?>
<div class="container">
    <img src="imagenes/auto.jpg" >
    <img src="imagenes/ciudad.jpg" alt="">
    <img src="imagenes/espada.jpg" alt="">
    <img src="imagenes/galaxia.jpg" alt="">
</div>
</body>

<?php
    if(isset($comprobar)==true || isset($_COOKIE['usuario_registrado']))
    {
        include('zonaUsuario.php');
    }

?>
</html>