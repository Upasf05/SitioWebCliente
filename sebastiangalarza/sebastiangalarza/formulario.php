<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    echo "<h2>Gracias por contactarme, $nombre</h2>";
    echo "<p><strong>Correo:</strong> $correo</p>";
    echo "<p><strong>Mensaje:</strong> $mensaje</p>";
} else {
    echo "<p>No se ha enviado el formulario.</p>";
}
?>
