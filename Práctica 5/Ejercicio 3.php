<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $comentario = $_POST["comentario"];
    $nuestra_url = "https://www.google.com";

    $asunto = $nombre. " nos recomienda!";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: Recomendaciones <no-reply@ejemplo.com>\r\n";
    
    $cuerpo = "<html><body>";
    $cuerpo .= "<p>Tu amigo " . $nombre . " pensó que te gustaría visitar nuestro sitio web.</p>";
    $cuerpo .= "<p>Acá dice por qué: " . $comentario . "</p>";
    $cuerpo .= "<p>Hacele caso a " . $nombre . ", entrá a <a href='" . $nuestra_url . "'>" . $nuestra_url . "</a></p>";
    $cuerpo .="</body></html>";

    if (mail($email, $asunto, $cuerpo, $headers)) {
        echo "<p>Recomendación enviada correctamente.</p>";
    } else {
        echo "<p>Error al enviar la recomendación.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recomendar</title>
</head>
<body>
    <h1>Recomendanos!</h1>
    <h2>Formulario de Recomendación</h2>
    <form method="post" action="">
        <label>Tu nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Mail Destinatario:</label><br>
        <input type="email" name="email" required><br><br>
        
        <label>Comentario:</label><br>
        <input type="text" name="comentario"><br><br>
        
        <input type="submit" value="Recomendar el sitio">
    </form>
</body>
</html>