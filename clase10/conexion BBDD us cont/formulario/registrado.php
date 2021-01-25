<?php

    require('../conexion/conexion.php');
    
   
    
    
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
  
    $sql="SELECT * FROM usuario WHERE usuarios= ':user' AND clave= ':pass'";

    $resultado= $conectar->prepare($sql);
    // comparamos lo q introdujo el usuario con los marcadores en la consulta sql
    $resultado->bindValue(":user",$usuario);
    $resultado->bindValue(":pass", $contraseña);

    $resultado->execute();

    // si encuebtra usuarios devolvera 1 sino un 0 ya que no encontro ninguna fila q coincida con el usuario y contraseña 
    // establecido en los campos
    $verificar_usuarios= $resultado->rowCount();

    
    if($verificar_usuarios!=0)
    {
        echo 'bienvenido';
        header('location:registrado.php');
    }
    else
    {
       
        header('location:index.php');
    }
  
?>