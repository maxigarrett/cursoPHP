<?php 
/*Que son las COOKIES?
    cuando introducimos la url en el navegador estamos haciendo una peticion a un servidor http y este servidor procesa
    esa peticion que hacemos y devulve con una respuesta en funcion a lo que nosotros pedimos en un archivo html o php
    cuando recibimos esta respuesta se abre una pagina en nuestro navegador y en segundo plano se crea una COOKIE o
    varias y esta se almacena en nuestro disco rigido.

Que contiene la COOKIE alamcenada en el disco duro?
    contiene un fichero de texto plano y ese fichero puede almacenar muchisimas cosas como nombre de usuarios,contraseñas
    la direccion de la pagina web que estamos visitando,fecha,hs, el timepo que permanecimos en esa pagina,etc,
    cualquier cosa, y lo mas normal es almacenar informacion necesaria para que el usuario pueda navegar por diferentes
    paginas y no tenga que introducir constantemente su usuario y contraseña, tambien como son tiendas online podemos
    almacenar lo que el usuario va comprando o almacenando en el carro de la compra y si se cierra la pagina al volver
    a entrar esa compra que estabas haciendo todavia esta alamacenada en el carrito y no se borro. Eso se consigue
    con COOKIES 
    
    tambien sirve para la publicidad por ejemplo si nosotros somos capaces de alamcenar en una cookie las paginas
    que el usuario visita frecuentemente el horario la fecuencia de que las visitas donde hace clic, eso a las 
    empresas le biene excelente ya que estamos almacenando tus habitos de navegacion,es decir, si un usuario
    visita 10 direcciones y esas diez son de autos entonces en esa cookie se almacenara esa informacion y al 
    poder rescatarla podemos lanzarpublicidad especialisada en autos
    
    como podemos guardar en cookies nuestro habitos de navegacion y si habitualmente navegamos por una determinada 
    pagina y al otro dia volvemos a entrar esa pagina rescata la informacion de esa cookie y abre 20 paginas emergentes
    con esa tematica de lo que visitamos al otro dia... por eso es obligacion advertir al usuario que estamos utilizando
    cookies ya que su disco duro es privado y ese usuario decide si quiere que almacenenmos su informacion en su disco
    o no
    
    las cookies pueden permanecer 1minnuto en el disco duro ,1hs o 1 año, eso depende de como programemos nosotros
    
Por que se le llama COOKIE?
    viene del cuento de hansel y gretel porque cuando ellos entran al bosque van dejando un camino me galletitas 
    para encontrar su camino devuelta a su casa y las cookies hacen lo mismo ya que registra por donde vas navegando
    y hace un seguimiento de eso la nombraron cookies(galletitas en ingles)*/



    //para crear una cookie utilizamos esta funcion y primer parametro la clave(como queremos llamarla a la cookie) 
    // y segundo argumento el valor y enste caso almacenamos una frase 
    setcookie('prueba','esta es la informacion de nuestra primera cookie');//rescatamos la informacion en otra pagina

    echo'cookie cargada correctamente';

?>