<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- PHP -->
<?php
try
{

    $conectar= new PDO("mysql:host=localhost; dbname=tp1","root", "");

   
}
catch(Exception $e)
{
    die ('error...!!!'. $e->getMessage());
}

?>
    
</body>
</html>