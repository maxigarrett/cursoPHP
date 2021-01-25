<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <?php
        //antes de mostrar la bandera para escoger los idimoas primero se ejecutara este codigo que verifica si la cookie seleccionada
        // es esapñol o inlgesa y no redirige a una de ellas ya que la informacion se almaceno en la cookie
        // 
        if(isset($_COOKIE['idioma_seleccionado']))
        {
            if($_COOKIE['idioma_seleccionado']=='es')
            {
                header('location:spanish.php');//me redirige a la pagina en español
            }
            else if($_COOKIE['idioma_seleccionado']=='en')
            {
                header('location:english.php');
            }
        }
    ?>
    <h1 style="text-align: center">elige idioma</h1>
    <div class="container">
        <div class="container__img">
            <!-- parametro llamado idioma donde se almacena 'es' y con esto la pasamos por url por lo que utilizamos para capturar $_GET-->
            <a href="creaCookie.php?idioma=es"><img src="img/banderaEspaña.jpg" alt="" class="img"></a>
        </div>
        <div class="container__img">
           <a href="creaCookie.php?idioma=en"> <img src="img/banderaInglesa.png" alt="" class="img"></a>
        </div>
    </div>
</body>
</html>