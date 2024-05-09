<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>90 Minutos - Identidad</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="estilomenup.css">
</head>

<body>

<div class="top-bar">
    <div class="logo-container">
        <img src="LogoOficialK.png" alt="Logo" class="logo">
    </div>
    <div class="search-bar">
        <input type="text" placeholder="Buscar...">
    </div>
    <div class="navbar">
        <div class="dropdown-menu">
            <div class="dropdown">
                <img src="usuario.png" alt="Usuario" class="user-icon">
                <div class="dropdown-content">
                    <a href="#">Mi Perfil</a>
                    <a href="#">Configuración</a>
                    <a href="#">Cerrar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="options-bar" style="background-color: #ffffff;">
    <div class="container">
        <div class="external-menu">
            <button type="button">Inicio</button>
            <button type="button" onclick="window.location.href='acercade.php'" >Acerca de</button>
            <button type="button" onclick="window.location.href='identidad.php'">Identidad</button>
            <button type="button">Contacto</button>
            <button type="button">Condiciones de compra o contratación</button>
            <button type="button">Aviso legal y políticas de privacidad</button>
        </div>
    </div>
</div>

<div class="buttons-bar">
    <div class="container">
        <div class="dropdown">
            <button class="dropbtn">Jersey de Liga MX</button>
            <div class="dropdown-content">
                <a href="#">Club América</a>
                <a href="#">Chivas</a>
                <a href="#">Cruz Azul</a>
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
                <a href="ligueonesample.php">Ligue 1</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Accesorios</button>
            <div class="dropdown-content">
                <a href="#">Balones</a>
                <a href="#">Tenis</a>
                <a href="#">Guantes</a>
                <a href="#">Medias</a>
                <a href="#">Otros</a>
            </div>
        </div>
        <!-- Replace Login button with "Mi Cuenta" button -->
        <button type="button" onclick="window.location.href='micuenta.php'">Mi Cuenta</button>
    </div>
</div>

<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="imgb2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>TODOS LOS PRODUCTOS</h5>
                <p>En 90 Minutos.</p>
            </div>
        </div>
    </div>
</div>
<h2>Logos de Equipos de Fútbol</h2>
    <table>
        <tr>
            <th>Equipo</th>
            <th>Logo</th>
        </tr>
        <tr>
            <td>Real Madrid</td>
            <td><img src="real_madrid_logo.png" alt="Real Madrid"></td>
        </tr>
        <tr>
            <td>FC Barcelona</td>
            <td><img src="barcelona_logo.png" alt="FC Barcelona"></td>
        </tr>
        <tr>
            <td>Manchester United</td>
            <td><img src="manchester_united_logo.png" alt="Manchester United"></td>
        </tr>
        <!-- Agrega más filas según sea necesario -->
    </table>
</body>
</html>