<?php
// Include the database connection file
include("conection.php");

// Initialize session
session_start();

// Check if the form is submitted for login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $username = mysqli_real_escape_string($connection, $_POST['name']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    // Query to check if the name and password match
    $query = "SELECT * FROM users WHERE name='$name' AND password='$password'";
    $result = mysqli_query($connection, $query);

    // Check if the query returned any rows
    if (mysqli_num_rows($result) == 1) {
        // name and password are correct, set session variables
        $_SESSION['name'] = $name;

        // Redirect user to the homepage
        header("Location: 90Minutos.php");
        exit;
    } else {
        // name or password is incorrect, display an error message
        $login_error = "Invalid name or password.";
    }
}

// Check if the user is logged in
$is_logged_in = isset($_SESSION['name']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>90 Minutos - Identidad</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="estilomenup.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        #img-logo {
            display: block;
            margin: 0 auto;
            max-width: none;
            max-height: none;
        }
    </style>
</head>
<body>

<div class="nav">
            <div class="logo">
                <img src="LogoOficialK.png" alt="Logo">
            </div>
                <ul class="list-inline">
                    <li>    <a href="viewCart.php" class="cart-link" id="cart" title="View Cart">&#x1F6D2;</a></li>
                    <li class="list-inline-item"><a href="90Minutos.php">Inicio</a></li>
                    <li class="list-inline-item"><a href="acercade.php">Acerca de</a></li>
                    <li class="list-inline-item"><a href="identidad.php">Identidad</a></li>
                    <li class="list-inline-item"><a href="registro.php">Crear cuenta</a></li>
                    <li class="list-inline-item"><a href="loginPage.php">Iniciar sesión</a></li>
                    <li class="list-inline-item"><a href="cerrar_sesion.php">Cerrar sesión</a></li>
                </ul>
    </div>
<div class="buttons-bar">
    <div class="container">
        <div class="dropdown">
            <button class="dropbtn">Jersey de Liga MX</button>
            <div class="dropdown-content">
                <a href="america.php">Club América</a>
                <a href="chivas.php">Chivas</a>
                <a href="azul.php">Cruz Azul</a>
                <!-- Agrega más equipos si es necesario -->
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Jersey de Futbol Europeo</button>
            <div class="dropdown-content">
                <a href="premiersample.php">Premier League</a>
                <a href="laligasample.php">La Liga</a>
                <a href="serieasample.php">Serie A</a>
                <a href="bendesligasampple.php">Bundesliga</a>
                <!-- <a href="ligueonesample.php">Ligue 1</a> -->
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Accesorios</button>
            <div class="dropdown-content">
                <a href="balones.php">Balones</a>
                <a href="tenis.php">Tenis</a>
                <a href="guantes.php">Guantes</a>
                <!-- <a href="#">Medias</a>
                <a href="#">Otros</a> -->
            </div>
        </div>
    </div>
</div>
<body>
<section class="hero-section">
        <div class="container">
            <div class="shadow">
            <h1>TODOS LOS PRODUCTOS</h1>
            <p>En 90 Minutos</p>
            <a href="bendesligasampple.php" class="btn btn-primary" style="background-color: #2d7dff; border-color: #2d7dff;">Explora nuestros servicios</a>
        </div>
        </div>
    </section>
    <section class="team-logos">
    <div class="team-logo">
        <img src="../90min/img/logo.png" alt="Equipo 1">
        <p>Paris</p>
    </div>
    <div class="team-logo">
        <img src="../90min/img/logo1.png" alt="Equipo 1">
        <p>Bayern Munich</p>
    </div>
    <div class="team-logo">
        <img src="../90min/img/logo2.png" alt="Equipo 1">
        <p>Manchester City </p>
    </div>
    <div class="team-logo">
        <img src="../90min/img/logo3.png" alt="Equipo 1">
        <p>Chelsea</p>
    </div>
    <div class="team-logo">
        <img src="../90min/img/logo4.png" alt="Equipo 1">
        <p>Borussia Dortmund</p>
    </div>
    <!-- Agrega más equipos según sea necesario -->
</section>
<section class="equipment">
    <div class="equipment-item">
        <button>
           <a href="balones.php"><img src="img/balon.png" alt="Balones"></a>
            <span class="text">Balones</span>
        </button>
    </div>
    <div class="equipment-item">
        <button>
            <a href="tenis.php"><img src="img/tenis.png" alt="Tenis"></a>
            <span class="text">Tenis</span>
        </button>
    </div>
    <div class="equipment-item">
        <button>
            <a href="guantes.php"><img src="img/guantes.png" alt="Guantes"></a>
            <span class="text">Guantes</span>
        </button>
    </div>
</section>
</body>
<footer>
    <style>
        footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    bottom: 0;
    width: 100%;
}

    </style>
        <p>&copy; 2024 90Minutos. Todos los derechos reservados.</p>
    </div>
</div>
    </footer>
</html>
