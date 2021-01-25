<?php
// RESCATAMOS LOS PARAMETROS DEL FORMULARIO
$codigo=$_POST['cod_art'];
$productos=$_POST['cod_pro'];
$seccion=$_POST['seccion'];
$precio=$_POST['precio'];
$fecha=$_POST['fecha'];
$pais=$_POST['pais'];

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


      
        // actualizamos registro y como CODIGO ES UNICO PARA CADA REGISTRO VAMOS A MODIFICAR SUS VALORES DONDE CODIGO ES IGAUL a 1,2,3
        // OSEA MODIFICARÁ EL CAMPO O LOS CAMPOS DEL REGISTRO AL QUE PERTENEZCA ESE CODIGO
        $consulta="UPDATE artículos SET SECCIÓN='$seccion', PRODUCTOS='$productos',FECHA='$fecha',PAIS='$pais',PRECIO='$precio' WHERE CODIGO='$codigo'";
      
        // ejecutamos la consulta primer parametro la conexion segundo parametro la consulta
        $resultado=mysqli_query($conexion,$consulta);
      
        // INFORMAMOS SI SE INSERTO CORRECTAMENTE
        if($resultado==false)
        {
            echo 'ERROR EN LA CONSULTA PARA INSERTAR REGISTROS';
        }
        else
        {
            echo 'REGISTRO ACTUALIZADO CORRECTAMENTE';
            // mostraremos la informacion registrada
            echo "<table>
                <tr>
                <td>".$codigo."</td>
                </tr>";
            echo "  <tr>
                    <td>".$seccion."</td>
                    </tr>";
                echo '
                    <tr>
                    <td>'.$productos.'</td>
                    </tr>';

                echo '
                    <tr>
                    <td>'.$fecha.'</td>
                    </tr>';
                echo '
                    <tr>
                    <td>'.$pais.'</td>
                    </tr>
                ';

                echo '
                    <tr>
                    <td>'.$precio.'</td>
                    </tr>
                </table>';
            
        }
        mysqli_close($conexion);
    ?>