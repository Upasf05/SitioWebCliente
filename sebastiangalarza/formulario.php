<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    require_once 'conexion.php';

    $stmt = $conexion->prepare("INSERT INTO mensajes (nombre, correo, mensaje) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $correo, $mensaje);

    if ($stmt->execute()) {
        echo "<h2>Gracias por contactarme, $nombre</h2>";
        echo "<p><strong>Correo:</strong> $correo</p>";
        echo "<p><strong>Mensaje:</strong> $mensaje</p>";
    } else {
        echo "<p>Error al guardar el mensaje. Intenta más tarde.</p>";
    }

    $stmt->close();
    $conexion->close();
} else {
    echo "<p>No se ha enviado el formulario.</p>";
}
?>
