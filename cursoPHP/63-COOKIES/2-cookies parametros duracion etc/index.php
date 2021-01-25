<?php

   

// primer parametros es como llamamos a la cookie segundo parametro es el valor en este caso texto plano estos dos son obligatorios
// como tercer parametro es el tiempo si le ponemos time() se crea la cookie en el momento que marque el reloj del sistema osea en
// el momento que abrimos el navegador se fija el reloj del sistema y lo almacena para saber a la hora que se ingreso y si le
// agregamos +30 le decimos que en el momento que se crea tiene que durar 30segundo. Si quicieramos que durara un mes tendriamos
// que hacer un calculo matematico como 60(seg que tiene un minuto) * 60(min que tiene una hora) * 24(horas que tiene el dia) *
// 30(dias que tiene un mes) entonces quedaria 60*60*24*30

// si establecemos un caurto parametro hace referencia a la ruta donde tiene que actuar esta cookie entonces vemos que tenemos
// una carpeta llamada zona_contendido y dentro tenemos un archivo que lee la cookie que se llama rescatandoInfo.php entonces abrimos
// la la pagina en el navegador copiamos la url menos la parte que dice localhost y los archivos y pegamos la ruta como cuarto parametro
//  de setcookie ya que queremos que afecte a todos loa archivos de esa carpeta solo ponemos la ruta de la carpeta
// entonces su zona de actuacion sera la ruta especificada y no otro archivo fuera de esa carpeta

// el quinto y sexto parametro es parecido al 4(buscar el informacion)
// el septimo parametro le psuimos true y le decimos si queremos que se cree bajo el protocolo https o no en ese caso ponemos false
//el ocatavo parametro le decimos si queremos aceptar o no el protocolo http
    setcookie('prueba','esta es la informacion de nuestra cookie',time()+30,'/programasphp/cursoPHP/63-COOKIES/2-cookies%20parametros%20duracion%20etc/zona_contenido/',
'','',true,false);



?>