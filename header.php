<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>90 Minutos - Identidad</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="estilomenup.css">
</head>
<nav>

<div class="options-bar" style="background-color: #ffffff;">
    <div class="container">
        <div class="external-menu">
            <button type="button" onclick="window.location.href='90Minutos.php'">Inicio</button>
            <button type="button" onclick="window.location.href='acercade.php'" >Acerca de</button>
            <button type="button" onclick="window.location.href='identidad.php'">Identidad</button>
            <button type="button">Contacto</button>
            <button type="button" onclick="window.location.href='loginPage.php'">Iniciar sesion</button>
            <!-- <button type="button">Aviso legal y políticas de privacidad</button> -->
            <button type="button" onclick="window.location.href='cerrar_sesion.php'">Cerrar sesion</button>

        </div>
    </div>
</div>
</nav>
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
        <!-- Add Login button here -->
        <button type="button" onclick="window.location.href='loginPage.php'">Login</button>
    </div>
</div>

</nav>