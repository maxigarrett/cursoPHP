<?php
   class Personita
   {
      private $nombre='maxi';

      public function __get($atributo)
      {
          if(property_exists($this,$atributo))
          {
              echo $this->$atributo;
          }
      }

    //   PARA MODIFICAR UNA VARIABLE PRIAVTE O PROTECTED
      public function __set($atributo2, $valor)
      {
          if(property_exists($this,$valor))
          {
              $this->$atributo2=$valor;
          }
          else
          {
            $this->$atributo2=$valor;
          }
      }

   }
   $p=new Personita();
   echo $p->apellido;

//    en caso de no existir con la funcion set la podemos crear ya que dni no existe
   $per=new Personita();
   $per->dni='12839712';
   echo $per->dni;
?>