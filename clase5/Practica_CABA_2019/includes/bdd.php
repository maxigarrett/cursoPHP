<?php
    class BaseDeDatos {
        private $usuario;
        private $password;
        private $servidor;
        private $basededatos;

        function __construct () {
            $this->usuario = "root";
            $this->password = "";
            $this->servidor = "localhost";
            $this->basededatos = "practica";
        // Conexión
	    $conexion = mysqli_connect( $this->servidor, $this->usuario,$this->password) or die ("No se ha podido conectar al servidor de Base de datos");
	    // Base de datos
        $db = mysqli_select_db( $conexion, $this->basededatos ) or die ( "No se ha podido conectar a la base de datos" );        
        if($conexion)
        {
            $this->mensaje='La conexión con la base de datos fue exitosa.';
        }
        return $this->mensaje;    
        }
        
    }
?>