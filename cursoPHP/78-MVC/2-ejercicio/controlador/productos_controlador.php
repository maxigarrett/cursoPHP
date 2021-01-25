<?php
    // el controlador interactue con la vista y el modelo osea hace de intermediario por eso necesitamos incluir los dos
    // archivos que tenemos en cada carpeta
    require_once('modelo/ProductosModel.php');
    $producto=new Productos_modelo();//instanciamos la clase productos_modelo
    $arrayProductos=$producto->getProductos();//con la instancai llamamos al metodo q devulve los productos

   



    require_once('vista/productos_vista.php');//como todo parte de la raiz index.php los ../ no lo incluimos para q no de error


?>