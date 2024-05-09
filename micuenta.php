<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" type="text/css" href="stylelogc.css">
</head>
<body>
<img class="header-img" src="LogoOficialk.png" alt="Header Image">
    <div class="container">
        <?php
        // Include the database connection file
        include("conection.php");

        // Initialize session
        session_start();

        // Check if the user is logged in
        if (!isset($_SESSION['username'])) {
            header("Location: loginPage.php"); // Redirect to login page if not logged in
            exit();
        }

        // Get the username of the logged-in user from the session
        $username = $_SESSION['username'];

        // Query the database to fetch the user's information using their username
        $query = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($connection, $query);

        // Check if the query was successful
        if ($result) {
            // Fetch the user's information
            $row = mysqli_fetch_assoc($result);

            // Display the username
            $user_username = $row['username'];
            echo "<p>Logged in as: $user_username</p>";
        } else {
            echo "Error: Unable to fetch user information.";
        }

        // Close the database connection
        mysqli_close($connection);
        ?>

        <button onclick="window.location.href='90minutos.php'">Ir a comprar</button>
        <p></p>
        <button onclick="window.location.href='90minutos.php'">cerrar sesion</button>
         
        </form>
    </div>
</body>
</html>
