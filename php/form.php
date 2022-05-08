<?php
    $nombre = $_POST['nombre'];
    $mail = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['textarea'];
    
$mensaje = "Este mensaje fue enviado por: " . $nombre . ",\r\n"
$mensaje = "Su mail es: " . $mail . ",\r\n"
$mensaje = "Su telefono es: " . $telefono . ",\r\n" 
$mensaje = "Mensaje: " . $mensaje . ",\r\n"
$mensaje = "Enviado el: " . date('d/m/y', time()); 

    $para = 'martinetjuliana@gmail.com';
    $asunto = 'Este mail fue enviado desde la web';

    mail($para, $asunto, utf8_decode($mensaje), $header);

    header('Location:index.html');
?>