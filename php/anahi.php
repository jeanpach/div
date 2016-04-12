<?php
    $destino = "lasdivastrans@gmail.com , juanjc9292@hotmail.com";
    $subject = "mail de los comentarios de anahi colucci";
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $mensaje = $_POST["mensaje"];
    $contenido = "name:" . $name . "\nmail:" . $mail . "\nmensaje:" . $mensaje;
    mail($destino,"contacto", $contenido, $subject);
    header("location:http://divas-trans.com/index.html");
    ?>