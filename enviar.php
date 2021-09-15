<?php
    $destinatario = 'atlasian@example.com';
    $nombre = $_POST['names'] ;
    $correo = $_POST['email'] ;
    $asunto = $_POST['subject'] ;
    $mensaje = $_POST['message'] ;

    $header = "Enviado desde la pagina de Atlasian Abogados asociados";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>