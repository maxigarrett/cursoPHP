<?php
    class Persona
     {//<---------------se definen sin parentesis

        //Atributos----------------->(desde php7 se debe declarar el tipo de acceso --privada o publica-- de cada variable)
        //modificadorDeAcceso $nombreVariable;
        public $nombre;
        private $apellido;
        protected $edad;    //< No se podra acceder a esta variable durante el programa
                            //se debe usar get
        //Métodos

        public function __construct($nom, $ape, $ed){//el metodo constructor siempre debe ser publico
            $this->nombre = $nom;
            $this->apellido = $ape;
            $this->edad = $ed;
        }
        /*
        public function saludar($vec){//metodo que muestra el atributo nombre de la propia clase
            echo '<br>Hola '.$vec.', mi nombre es '.$this->nombre;
        }
        */
    }

    //HERENCIA:{
    class Usuario extends Persona
     {// esta es una clase heredera (de Persona)
        /*
        public function __construct($nom){

        }
        */
        public function get_edad(){
            echo '<br>'.$this->edad;
        }
        public function set_edad($ed){
            $this->edad = $ed;
        }
        /*
        public function saludar($vec){
            parent :: saludar($vec);
            echo '<br>Bienvenido a la clase';
        }
        */
    }
    $usuario1 = new Usuario('Pedro', 'Rodriguez', 56);
    
    echo $usuario1->nombre;
    //echo $usuario1->edad; /protected: no se permite/
    //echo $usuario1->apellido;

    $usuario1->get_edad();
    $usuario1->set_edad(88);
    
    $usuario1->get_edad();
    //}HERENCIA

    class Ejemplo {
        public static $mensaje = 'Hola mundo'; //<--no se puede modificar directamente desde una instancia u objeto de tipo Ejemplo
    }
    echo '<br>' . Ejemplo::$mensaje;

    // ::  <---resolucion de ambito
?>