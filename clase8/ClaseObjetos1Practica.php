<?php
// definimos una clase
class persona
{
    // atributos hay que usar public o private para poder usar las variable y no tire error
    public $nombre='pedro';
    public $edad= 40;

    // metodos
    public function saludar()
    {
        echo 'hola, mi nombre '.$this->nombre;
    }
}




// objeto de clase persona llamada pedro
$pedro=new persona;

echo 'Nombre: '.$pedro->nombre;//mostrara el nombre de la clase persona que esta en la variable pedro
echo ' ';
echo 'edad: '.$pedro->edad;

echo '<br>';
 $pedro->saludar();

echo '<br>';
//  hacemos otra instancia de el objeto persona
$jose=new persona;
echo 'Nombre: '.$jose->nombre='jose';//le asignamos un nuevo valor a nombre
echo '<br>';
// al cambiar el nombre de la funciona saludar por la variable u objeto nombre cada ves que intaciemos a la clase persona y le 
//demos un nombre nuevo mostrara el nombre nuevo ya que se almacena en el objeto nombre el nuevo valor cada vez q instanciamos
echo $jose->saludar();
echo '<br>';


// ----------------------------------------------------------------------------------------------------------------------
// CLASE NUEVA PERO USAREMOS METODO CONSTRUCTOR
class persona2
{
    // atributos
   public $nombre;
   public $edad;
    // metodo constructor
    public function __construct($nom,$ed)
    {
        $this->nombre=$nom;
        $this->edad=$ed;

    }
    public function saludar($vecino)
    {
        echo 'hola,'.$vecino. ' mi nombre es '.$this->nombre;
    }

    // para usar en clase usuario y usario2
    public function saludar2()
    {
        echo 'hola mi nombre es:'.$this->nombre;
    }

}

// creamos un objeto de tipo persona2
$pedrito=new persona2('pedro',30);
echo 'nombre objeto pedrito. '.$pedrito->nombre;
echo '<br>';
echo 'Edad de objeto pedro: '.$pedrito->edad;
echo '<br>';
echo $pedrito->saludar('maxi');

echo '<br>';
echo 'comienza herencia';
echo '<br>';
// ---------------------------------------------------------------------------------------------------------

// ---------------------HERENCIA------------------------------------------
class usuario extends persona2
{

}
$usuario_uno=new usuario('maximiliano',28);
$usuario_uno->saludar2();
echo '<br>';
echo 'mi edad: '.$usuario_uno->edad;
echo '<br>';
echo '<br>';

// por ahi queremos modificar los atributos de la clase heredada y quemos solo mostrar el nombre y no la edad
// y lo hacemos de esta manera para q se entienda lo hacemos en una clase nueva que hereda de persona2
class usuario2 extends persona2
{
    public function __construct($nom)
    {
        $this->nombre=$nom;
    }

    /*Por ejemplo, queremos modificar el método SALUDAR para que además del saludo que ya
    tiene programado, muestre por pantalla una bienvenida a la clase de PHP.
   Para casos como este, utilizamos la palabra reservada PARENT y el operador de resolución de
   ámbito :: (doble dos puntos).
   */ 
    public function saludar2()
    {
        parent::saludar2();
        echo '<br> bienvenido a la clase php';
    }
}
$usuario_dos=new usuario2("pepe");
echo '<br>';
$usuario_dos->saludar2();
echo '<br>';
$usuario_dos->saludar2();//parent::saludar hace los mismo que la funcion original pero le agregamos nueva funcionalidad la del saludo

?>