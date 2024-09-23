<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $acompanantes = $_POST['acompanantes'];

    // Aquí puedes guardar los datos en una base de datos o enviarlos por correo electrónico.

    echo "Gracias, $nombre. Hemos recibido tu confirmación. Te esperamos el día de la boda.";
}
?>
