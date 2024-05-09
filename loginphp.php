<?php
// Incluir archivo de conexión a la base de datos
include 'conection.php';

// Recibir datos del formulario
$email = $_POST['email'];
$password_ingresada = $_POST['password'];
// Imprimir las contraseñas para depuración
echo "Contraseña ingresada por el usuario: " . $password_ingresada . "<br>";

// Obtener la información del usuario desde la base de datos
$sql = "SELECT * FROM customers WHERE email='$email'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $password_hash = $row['password'];
// Imprimir la contraseña almacenada en la base de datos para depuración
echo "Contraseña almacenada en la base de datos: " . $password_hash . "<br>";
    // Verificar la contraseña ingresada con la almacenada en la base de datos
    if (password_verify($password_ingresada, $password_hash)) {
        echo "Inicio de sesión exitoso";

        // Puedes almacenar la información del usuario en sesiones o cookies según tus necesidades
        // Ejemplo de almacenamiento de información en una sesión
        session_start();
        $_SESSION['usuario_id'] = $row['id'];
        $_SESSION['usuario_nombre'] = $row['name']; 
    
        header("Location: index.html"); // Redirigir a la página principal después del inicio de sesión
        exit();
    } else {
        echo "Contraseña incorrecta";
        echo "Inicio de sesión exitoso";

        // Puedes almacenar la información del usuario en sesiones o cookies según tus necesidades
        // Ejemplo de almacenamiento de información en una sesión
        session_start();
        $_SESSION['usuario_id'] = $row['id'];
        $_SESSION['usuario_nombre'] = $row['name']; 
    
        header("Location: 90Minutos.php"); // Redirigir a la página principal después del inicio de sesión
        exit();
    }
} else {
    echo "Usuario no encontrado";
    header('Location: crear.html');
   
}

// Cerrar la conexión
$db->close();
?>

