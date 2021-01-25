<?php
    class persona
    {
        public $nombre;
        private $apellido;
        protected $edad;

        public function __construct($nom,$ape,$ed)
        {
            $this->nombre=$nom;
            $this->apellido=$ape;
            $this->edad=$ed;
        }

        public function saludar()
        {
            echo 'hola alumnos mi nombre es: '.$this->nombre;
        }
    }


    // calse que hereda
    class usuario extends persona
    {
        // para poder usar las variables que no sean publicas tenenmos que usar get y set
        public function set_edad($ed)
        {
            $this->edad=$ed;
        }

        public function get_edad()
        {
            echo'<br> Edad: '.$this->edad;
        }

    }
   
    $usuario_uno= new usuario('maximiliano','garrett',27);
    
    
    echo $usuario_uno->nombre;//atributo public

    // $usuario_uno->edad;//atributo protected
    $usuario_uno->set_edad(27);
    $usuario_uno->get_edad();
    
    echo '<br>';


    /*Atributos estáticos.
Las propiedades y métodos estáticos son accesibles como propiedades de clase sin necesidad
de instanciar la clase.
Si a partir de una clase que tiene métodos y atributos, creamos varios objetos, cada uno de
estos objetos tendrá su propia copia de esas propiedades, es decir, tendremos una copia por
cada objeto creado.
Si a una propiedad la declaramos del tipo STATIC lo que estamos haciendo en realidad es
decirle a nuestra clase que no cree una copia cada vez que la instanciamos, sino que comparta
el elemento estático con todos los objetos que vayamos creando, por lo que ahora existirá
solo una copia del elemento (en la clase original) y todos los objetos creados tendrán acceso
al mismo */

class ejemplo
{
    public static $mensaje='hola mundo';
    
}
// Para acceder a este tipo de atributos, utilizamos el operador de ámbito ::
echo ejemplo::$mensaje;
?>