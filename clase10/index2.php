<?php
// class Usuario{}
    // devulve todas la clases q tenemos declaradas cuando se trabaja en equipo para verlas y muestra las del servidor tambien
    // print_r(get_declared_classes());


    // muestra las clases pero con mas detalles
    // var_dump(get_declared_classes());

class xxxxxxx
{
    public $nombre='pedro';
}
// xxxxxxx nombre de la clase     segundo parametro el alis q le asignamos para identificarlo menjor
   class_alias('xxxxxxx', 'Simple');
    $persona= new Simple;// instanciamos con el nuevo alias
    $persona=new xxxxxxx ;//igual se puede usar el original
    echo $persona->nombre;

    class Usuario
    {
        public function metodo1(){}
            public function metodo2(){}
    }
    print_r(get_class_methods('Usuario'));//devulev los metodo q tenemos en esta clase Usuario
    echo '<br>';
    print_dump(get_class_methods('Usuario'));//devulev los metodos con mas detalles


    // class Persona
    // {
    //     public function final saludar()//una funcion con final no se puede sobreescribir
    //     {
            
    //     }
    // }

    // class Alumno extends persona 
    // {
    //     public function final saludar()//no se puede soobrescribir
    // }
    


    // -----------------------------------------------------------------------------------------------------------------
    // final class humano
    // {

    // } 
    // class humanito extends humano//no se puede eredar clases con final
    // {

    // }
// ---------------------------------------------------------------------------------------------------------------

    // abstract class humano
    // {

    // }
    // $persona= new humano;//no se puede intanciar clase abstracta

// ----------------------------------------------------------------------------------------------------------------


class persona 
{
   abstract public function saudar()//al poner metodo abtracto la clase tamboen hay q declara abstracta
   {

   }


}



?>