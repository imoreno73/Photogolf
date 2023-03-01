<?php error_reporting(0);
    $campo = (string)$_POST['Campo'];
    echo 'El campo es '. $campo;
    $nombre = (string)$_POST['Nombre'];
    echo 'El nombre es '. $nombre;
    $apellidos = (string)$_POST['Apellidos'];
    echo 'El apellido es '. $apellidos;
    $direccion = (string)$_POST['Direccion'];
    echo 'La direccion es '. $direccion;
    $cp = (int)$_POST['Cp'];
    echo 'El codigo postal es '. $cp;
    $email = (int)$_POST['Email'];
    echo 'El correo es '. $email;
    $telefono = (int)$_POST['Telefono'];
    echo 'El telefono es '. $telefono;
    $msg = (string)$_POST['Msg'];
    echo 'El mensaje es '. $msg;
    $check = (string)$_POST['Check'];
    echo 'Informacion '. $check;
    
?>