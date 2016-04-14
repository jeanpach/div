<?php
    $destino = "jpalaciosve@gmail.com" ;
    $subject = "chicas para sitio ";
    $nombre = $_POST["nombre"];
    $mail = $_POST["mail"];
    $twitter = $_POST["twitter"];
    $telefono = $_POST["telefono"];
    $facebook = $_POST["facebook"];
    $formapago = $_POST["formapago"];
    $edad = $_POST["edad"];
    $biografia = $_POST["biografia"];
    $estatura = $_POST["estatura"];
    $ciudad = $_POST["ciudad"];
    $contenido = "nombre:" . $nombre . "\nmail:" . $mail . "\nestatura:" . $estatura . "\nbiografia:" . $biografia . "\ntelefono:" . $telefono . "\nedad:" . $edad . "\nfacebook:" . $facebook . "\nformapago:"  . $formapago  . "\ntwitter:"  . $twitter . "\nciudad:" . $ciudad;
    mail($destino,"contacto", $contenido, $subject);
    header("location:http://divas-trans.com/index.html");
    ?>