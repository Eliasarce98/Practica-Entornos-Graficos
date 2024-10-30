 <?php
$destinatario = "eliasarce9859@gmail.com";
$asunto = "Probando envio mail php";
$cuerpo = "
<html>
<head>
    <title> Correo en HTML </title>
</head>
<body>
    <h1>¡Hola!</h1>
    <p>Este es un correo electrónico en <strong>HTML</strong>.</p>
    <p>Esto es una prueba de envío de correo a través del servidor.</p>
</body>
</html>
";

$cabeceras = "MIME-Version: 1.0" . "\r\n";
$cabeceras .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$cabeceras .= "From: remitente@example.com" . "\r\n"; // Cambia esto por la dirección del remitente

if(mail($destinatario, $asunto, $cuerpo, $cabeceras)) {
    echo "Correo enviado con éxito.";
} else {
    echo "Hubo un error al enviar el correo.";
}
//este ejercicio requiere de varias configuraciones de php para que smtp pueda funcionar con gmail
?>
