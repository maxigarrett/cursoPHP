<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  

    <table style="width: 60%;margin:auto; border:1px solid black;">
        <tr>
            <th>SECCION</th>
            <th>PRODUCTOS</th>
            <th>FECHA</th>
            <th>PAIS</th>
            <th>PRECIO</th>
            <th>CODIGO</th>
        </tr>

        <tr>
        <?php
        // este codigo hace de cuenta que lo estamos escribiendo en productos_controlador donde incluimos este archivo 
        // productos_vista
        foreach($arrayProductos as $registroProductos) :?>
            
            <td><?php echo $registroProductos['SECCIÓN'];?></td>
            <td><?php echo $registroProductos['PRODUCTOS'];?></td>
            <td><?php echo $registroProductos['FECHA'];?></td>
            <td><?php echo $registroProductos['PAIS'];?></td>
            <td><?php echo $registroProductos['PRECIO'];?></td>
            <td><?php echo $registroProductos['CODIGO'];?></td>
            </tr>
        <?php endforeach;?>    
       
    </table>
  
</body>
</html>