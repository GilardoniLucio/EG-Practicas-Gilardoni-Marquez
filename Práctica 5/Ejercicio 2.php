<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $webmaster = "webmaster@egutn.com";
    
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $consulta = $_POST["consulta"];

    $asunto = "Nueva consulta de contacto";
    
    $cuerpo = "Nombre: " . $nombre . "\r\n";
    $cuerpo .= "Email: " . $email . "\r\n";
    $cuerpo .= "Consulta: " . $consulta . "\r\n";

    $headers = "From: " . $email . "\r\n";

    if (@mail($webmaster, $asunto, $cuerpo, $headers)) {
        echo "<p>Consulta enviada correctamente.</p>";
    } else {
        echo "<p>Error al enviar la consulta.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
</head>
<body>
    <h2>Formulario de Contacto</h2>
    <form method="post" action="">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>
        
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        
        <label>Consulta:</label><br>
        <textarea name="consulta" rows="5" required></textarea><br><br>
        
        <input type="submit" value="Enviar al webmaster">
    </form>
</body>
</html>