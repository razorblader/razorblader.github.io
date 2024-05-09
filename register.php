<?php
// Incluir archivo de conexión a la base de datos
include 'conection.php';

// Verificar si se enviaron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password']; 

     // Insertar datos en la base de datos
     $sql = "INSERT INTO customers (name, email, phone, address, password, created, modified, status) VALUES ('$name', '$email', '$phone', '$address', '$password', NOW(), NOW(), 'activo')";

    if ($connection->query($sql) === TRUE) {
        echo "Usuario agregado exitosamente.";
        header('Location: 90Minutos.php');
    } else {
        echo "Error al agregar usuario: " . $db->error;
    }

    // Cerrar conexión a la base de datos
    $db->close();
}
?>
