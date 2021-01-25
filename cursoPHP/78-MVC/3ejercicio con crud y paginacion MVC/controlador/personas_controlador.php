<?php
    // el controlador interactue con la vista y el modelo osea hace de intermediario por eso necesitamos incluir los dos
    // archivos que tenemos en cada carpeta
    require_once('modelo/PersonasModel.php');
    $persona=new Personas_modelo();//instanciamos la clase productos_modelo
    $arrayPersonas=$persona->getPersonas();//con la instancai llamamos al metodo q devulve los productos

   



    require_once('vista/personas_vista.php');//como todo parte de la raiz index.php los ../ no lo incluimos para q no de error
    //al escribir codigo en la pagina personas_vista podemos trabajar con la variables tambien de $arrayPersonas
    // ya q el controlador conecta la vista con el modelo


?>