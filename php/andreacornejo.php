<?php
    $destino = "lasdivastrans@gmail.com";
    $subject = "mail de los comentarios de andrea cornejo";
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $mensaje = $_POST["mensaje"];
    $contenido = "name:" . $name . "\nmail:" . $mail . "\nmensaje:" . $mensaje;
    mail($destino,"contacto", $contenido, $subject);
    header("location:http://divas-trans.com/index.html");
    ?>