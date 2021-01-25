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

        if($registroEncontrados!=0)//si encunetra registro 
        {
            session_start();  
            $_SESSION['usuario']=$_POST['user'];  
           
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
    echo('no has iniciado sesion');
}


?>


<?php

    if(!isset($_SESSION['usuario']))//si la session no existe o no se inicio incluye el formulario
    {
        //incluimos el fomulario
        include('formulario.php');
    }
    else
    {
        //si ya se mando enviar y se creo la sesion y los datos se corroboraron bien el formulario desaparecera porque
        //  aca no lo estamos llamando y mostraremos un mensaje con el nombre del usuario iniciado
        echo'USUARIO: '.$_SESSION['usuario'];
    }

?>
<div class="container">
    <img src="imagenes/auto.jpg" >
    <img src="imagenes/ciudad.jpg" alt="">
    <img src="imagenes/espada.jpg" alt="">
    <img src="imagenes/galaxia.jpg" alt="">
</div>
</body>
</html>