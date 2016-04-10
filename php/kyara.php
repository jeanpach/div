<?php
    $destino = "info@divas-trans.com";
    $subject = "mail de los comentarios de Kyarita Priscila Flores Silva ";
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $mensaje = $_POST["mensaje"];
    $contenido = "name:" . $name . "\nmail:" . $mail . "\nmensaje:" . $mensaje;
    mail($destino,"contacto", $contenido, $subject);
    header("location:http://divas-trans.com/index.html");
    ?>