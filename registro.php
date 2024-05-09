
<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="stylelog.css">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="register.php" method="post">
        <h2>Registro de Usuario</h2>
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br>
        <label for="phone">Teléfono:</label><br>
        <input type="tel" id="phone" name="phone" required><br>
        <label for="address">Dirección:</label><br>
        <textarea id="address" name="address" rows="4" required></textarea><br>
        <input  type="submit" value="Registrar Usuario">
    </form>
        <!-- Buttons -->
        <button onclick="window.location.href='loginPage.php'">Iniciar sesión</button>
        <button onclick="window.location.href='90minutos.php'">Volver</button>
    </div>
</body>
</html>
