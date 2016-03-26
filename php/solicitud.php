<?php
    $destino = "jpalaciosve@gmail.com" ;
    $subject = "chicas para sitio ";
    $nombre = $_POST["nombre"];
    $mail = $_POST["mail"];
    $twitter = $_POST["twitter"];
    $facebook = $_POST["facebook"];
    $formapago = $_POST["formapago"];
    $ciudad = $_POST["ciudad"];
    $contenido = "nombre:" . $nombre . "\nmail:" . $mail . "\nfacebook:" . $facebook . "\nformapago:"  . $formapago  . "\ntwitter:"  . $twitter . "\nciudad:" . $ciudad;
    mail($destino,"contacto", $contenido, $subject);
    header("location:http://divas-trans.com/index.html");
    ?>