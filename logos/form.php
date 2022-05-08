<?php
    $nombre = $_POST['nombre'];
    $mail = $_POST['email'];
    $telefono = $_POST['telefono']
    $mensaje = $_POST['textarea'];
    
    $para = 'martinetjuliana@gmail.com';
    $asunto = 'Este mail fue enviado desde la web';

    mail($para, $asunto, utf8_decode($nombre, $mail, $telefono, $mensaje));

    header('Location:index.html');
?>