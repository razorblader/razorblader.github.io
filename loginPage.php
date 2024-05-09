
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="stylelog.css">
</head>
<nav>
    <?php
  
    ?>
</nav>
<body>
    <img class="header-img" src="LogoOficialk.png" alt="Header Image">
    <h2>Login</h2>
    <form action="../90min/loginphp.php" method="post">
        <label for="email">email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
    <button onclick="window.location.href='registro.php'">¿No tienes cuenta?, registro</button>
</body>
</html>
