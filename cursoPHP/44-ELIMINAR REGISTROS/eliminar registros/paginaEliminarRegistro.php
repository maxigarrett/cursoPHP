<?php

// RESCATAMOS LOS PARAMETROS DEL FORMULARIO
$seccion=$_POST['seccion'];
$productos=$_POST['productos'];
$fecha=$_POST['fecha'];
$pais=$_POST['pais'];
$precio=$_POST['precio'];
$codigo=$_POST['codigo'];

        $db_host="localhost";
        $db_nombreBD="cursodephp";
        $db_usuarioBD="root";
        $db_contraseñaBD="";

        $conexion= mysqli_connect($db_host,$db_usuarioBD,$db_contraseñaBD) or die("error en la conexion con la bbdd");

        if(mysqli_connect_errno())
        {
            echo 'FALLO EN LA CONEXION';
        }

        // conectamos a la base de datos creada llamada tp1 despues de crear la conexion primer parametro la conexion segundo BBDD
        $db=mysqli_select_db($conexion,$db_nombreBD) or die('no se encuentra la base de datos');
      
        // muestre los acentos y demas
        mysqli_set_charset($conexion,'UTF8');


      
        // ELIMINAMOS DATOS EN UNA TABLA
        $consulta="DELETE FROM artículos WHERE CODIGO= '$codigo'";
      
        // ejecutamos la consulta primer parametro la conexion segundo parametro la consulta
        $resultado=mysqli_query($conexion,$consulta);
      
        // INFORMAMOS SI SE ELIMINO CORRECTAMENTE pero si eliminamos un registro o volvemos a eliminar el mismo dirá registro
        // eliminado porque lo que evaluamos en nuestro primer if es si hay algun error pero siqeliminamos algo que no existe
        // no dara ningun erro y para saber si el registro se elimno hay una funcion myslqiÇ_afected_rows(conexionBBDD); devulve
        // informacin de los registros afectados de tipo INSERT,DELETE,UPDATE
        if($resultado==false)
        {
            echo 'ERROR EN LA CONSULTA PARA INSERTAR REGISTROS';
        }
        else
        {
            echo 'REGISTRO ELIMINADO <br>';
            // echo mysqli_affected_rows($conexion  );//devulve 0 si no se encontro registro a eliminar
            if(mysqli_affected_rows($conexion)==0)
            {
                echo '<br> NO HAY REGISTROS QUE ELIMINAR CON ESE CODIGO';
            }
            else
            {
                echo 'SE ELIMINARO '.mysqli_affected_rows($conexion).' REGISTROS';
            }
        }
        mysqli_close($conexion);
    ?>