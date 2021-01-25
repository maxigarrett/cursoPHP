<?php
    // traer la url o maperar la url ingresada en el navegador
    // ejemplo: articulos/crear/3
    // 1-controlador (seria la clase ) paginas
    // 2-metodo (metodo de una clase) crear
    // 3-parametro 3


    class Core 
    {
        // miestras no se cargue ninguna pagina esto es para que se cargue un controlador por defecto y es controladorActual seria
        // paginas y cuado no aya metodo se cargara por defecto index y el parametro si no se cargue sera una rray vacio
        protected $controladorActual='paginas';
        protected $metodoActual='index';
        protected $parametros=[];

        public function __construct()//constructor se ejecuta si o si primero
        {
            // print_r($this->getUrl());//muestra el array con echo tira error
            $url=$this->getUrl();//llammos a la funcion para rescatar toda la url del navegador

            // ucwords convierte la primera letra de la clase en mayusculas y la url es un array y la clase es el num 0
            // buscamos en controladres si el controlador existe
            if(file_exists("../app/controladores/".ucwords($url[0])."php"))
            {
                //si existe se setea como controlador por defecto
                $this->controladorActual=ucwords($url[0]);

                // Destruye una variable especificada para desmontar el indice actual del controlador que es paginas
                unset($url[0]);
            }

            // requerimos controlador de nuevo
            require_once "../app/controladores/". $this->controladorActual.".php";
            $this->controladorActual=new $this->controladorActual;

            if(isset($url[1]))
            {
                // chequear la segunda parte de la url que seria el metodo osea el array en posicion [1] existe
                if(method_exists($this->controladorActual,$url[1]))
                {
                    // si se cargo chequeamos el metodo
                    $this->metodoActual=$url[1];
                    unset($url[1]);
                }
                // echo $this->metodoActual; veremos el nombre de los metodos creados en paginas

                // OBTENER LOS PARAMETROS
                $this->parametros=$url ? array_values($url): [];

                // llamar callback con parametros array que permite traer los arreglos que se allan configurado en la url
                // este metodo recibe dos parametros por lo que los primeros dos los encerramos en un arrray
                call_user_func_array([$this->controladorActual,$this->metodoActual],$this->parametros);
            }
        }
        public function getUrl()
        {
            // echo $_GET['url'];//rescatamos todo lo que se inicie en la url este url lo rescatamos de .htaccess
            if(isset($_GET['url']))
            {
                //cortamos los espacios que tenga hacia la derecha la url y el delimitador como segundo parametro ya q cuando
                // escribimos en la web va separado por esos simbolos /
                $url=rtrim($_GET['url'],'/');

                //filtramos la url con la constante FILTER_SANITIZE_URL Elimina todos los caracteres excepto letras, dígitos y
                //  $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
                $url=filter_var($url,FILTER_SANITIZE_URL);
                // Devuelve un array de string, siendo cada uno un substring del parámetro string formado por la división realizada
                //  por los delimitadores indicados en el parámetro delimiter.
                $url=explode('/',$url);//osea lo convierte en array cada separacion de / es una posicion del array
                return $url;
            }
        }
    }

?>