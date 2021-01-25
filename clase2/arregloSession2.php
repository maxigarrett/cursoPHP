<?php
session_start();
echo $_SESSION['paises'][1];//mostramos el indice 1 del arreglo creado

$a=session_id();//le asignamos un id automatico
echo('<br>');
echo $a;
echo('<br>');
session_id('Vamos Chaco');//le asignamos un id manualmente
$a=session_id();
echo($a);
?>