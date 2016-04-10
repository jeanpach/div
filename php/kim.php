<?php
    $destino = "info@divas-trans.com , edgarandrade@hotmail.es ";
    $subject = "mail de los comentarios de Domenika Andrade divas-trans.com";
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $mensaje = $_POST["mensaje"];
    $contenido = "name:" . $name . "\nmail:" . $mail . "\nmensaje:" . $mensaje;
    mail($destino,"contacto", $contenido, $subject);
    header("location:http://divas-trans.com/index.html");
    ?>