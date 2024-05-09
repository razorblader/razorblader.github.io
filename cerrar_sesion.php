<?php
// Iniciar la sesión
session_start();

// Eliminar todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redirigir al usuario a la página de inicio de sesión o a otra página
header("Location: 90Minutos.php"); // Reemplaza "inicio_sesion.php" con la página a la que deseas redirigir
exit();
?>