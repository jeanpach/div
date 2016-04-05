<?php
    $destino = "jpalaciosve@gmail.com , info@divas-trans.com" ;
    $subject = "usuarios que quieren informacion sobre las chicas ";
    $nombre = $_POST["nombre"];
    $mail = $_POST["mail"];
    $ciudad = $_POST["ciudad"];
    $contenido = "nombre:" . $nombre . "\nmail:" . $mail  . "\nciudad:" . $ciudad;
    mail($destino,"contacto", $contenido, $subject);
    header("location:http://divas-trans.com/index.html");
    ?>