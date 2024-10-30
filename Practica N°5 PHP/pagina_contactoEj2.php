<?php

include("formularioEj2.html");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar y sanitizar los datos
    $nombre = filter_var(trim($_POST['nombre']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $asunto = filter_var(trim($_POST['asunto']), FILTER_SANITIZE_STRING);
    $mensaje = filter_var(trim($_POST['mensaje']), FILTER_SANITIZE_STRING);
    
    // Verificar que los campos no estén vacíos
    if ($nombre && $email && $asunto && $mensaje) {
        // Destinatario
        $para = "webmaster@tudominio.com"; // Cambia esto al email del webmaster

        // Asunto del correo
        $asuntoCorreo = "Consulta de: $nombre - $asunto";

        // Cuerpo del correo
        $cuerpoCorreo = "
        <html>
        <head>
            <title>Consulta de $nombre</title>
        </head>
        <body>
            <h2>Consulta recibida</h2>
            <p><strong>Nombre:</strong> $nombre</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Mensaje:</strong><br>$mensaje</p>
        </body>
        </html>
        ";

        // Encabezados
        $encabezados = "MIME-Version: 1.0" . "\r\n";
        $encabezados .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $encabezados .= "From: $email" . "\r\n";

        // Enviar el correo
        if (mail($para, $asuntoCorreo, $cuerpoCorreo, $encabezados)) {
            echo "Correo enviado con éxito.";
        } else {
            echo "Hubo un error al enviar el correo.";
        }
    } else {
        echo "Por favor, complete todos los campos correctamente.";
    }
}
?>
