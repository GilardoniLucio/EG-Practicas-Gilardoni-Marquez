
<?php
$dest = "matiastmarquez@gmail.com";
$asunto = "Mensaje de prueba con formato HTML";

$headersmail = "MIME-Version: 1.0\r\n";
$headersmail .= "Content-type: text/html; charset=utf-8\r\n";
$headersmail .= "From: Webmaster <admin@egutn.com>\r\n";

$cuerpomail = "
<html>
<head>
    <title>Prueba de correo HTML</title>
</head>
<body>
    <h1 style='color: blue;'>ola!</h1>
    <p>Este es un correo de prueba enviado desde PHP.</p>
</body>
</html>
";

if (mail($dest, $asunto, $cuerpomail, $headersmail)) {
    echo "El correo se envió correctamente.";
} else {
    echo "Error al enviar el correo.";
}
?>