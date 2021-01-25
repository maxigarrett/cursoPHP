<?php

// RESCATAMOS LOS PARAMETROS DEL FORMULARIO
$seccion=$_POST['seccion'];
$productos=$_POST['productos'];
$fecha=$_POST['fecha'];
$pais=$_POST['pais'];
$precio=$_POST['precio'];

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


      
        // INSERTAMOS DATOS EN UNA TABLA
        $consulta="INSERT INTO artículos (SECCIÓN,PRODUCTOS,FECHA,PAIS,PRECIO) VALUES ('$seccion','$productos','$fecha','$pais','$precio')";
      
        // ejecutamos la consulta primer parametro la conexion segundo parametro la consulta
        $resultado=mysqli_query($conexion,$consulta);
      
        // INFORMAMOS SI SE INSERTO CORRECTAMENTE
        if($resultado==false)
        {
            echo 'ERROR EN LA CONSULTA PARA INSERTAR REGISTROS';
        }
        else
        {
            echo 'INSERCION CORRECTA';
            // mostraremos la informacion registrada
            echo '<table>
                    <tr>
                    <td>'.$seccion.'</td>
                    </tr>
                </table>';
                echo '<table>
                    <tr>
                    <td>'.$productos.'</td>
                    </tr>
                </table>';

                echo '<table>
                    <tr>
                    <td>'.$fecha.'</td>
                    </tr>
                </table>';
                echo '<table>
                    <tr>
                    <td>'.$pais.'</td>
                    </tr>
                </table>';

                echo '<table>
                    <tr>
                    <td>'.$precio.'</td>
                    </tr>
                </table>';
            
        }
        mysqli_close($conexion);
    ?>