<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>premier league</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="../90min/estilos.css">

</head>
<nav>
    <?php
    include("header.php");
    include("conection.php");
    ?>
</nav>
<body>
<div class="container" style="margin-top: 70px;">

    
    <header 
            class="py-4 text-center">
            <h1>Premier League Jerseys</h1>
    </header>

<div id="products" class="row list-group">
<?php
//Obtiene los registros de la tabla
$query = $connection->query("SELECT * FROM products WHERE category = 'premier' ");


if($query->num_rows > 0){ 
    $count = 0; // Inicializamos un contador para rastrear el número de productos impresos
    while($row = $query->fetch_assoc()){
        if ($count % 3 == 0) { // Cada vez que el contador es divisible por 3, comenzamos una nueva fila
            echo '<div class="row">';
        }
?>
    <div class="item col-lg-4">
            <div class="thumbnail">
                <img src="imgpremiersample/<?php echo $row["image_url"]; ?>" alt="<?php echo $row["name"]; ?>" width="100%" height="auto" class="img-responsive">
                <div class="caption">
                    <h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>
                    <p class="list-group-item-text"><?php echo $row["description"]; ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo '$'.$row["price"].' MXN'; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-default" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Agrega al Carrito</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
        $count++; // Incrementamos el contador después de imprimir un producto
        if ($count % 3 == 0) { // Si hemos impreso tres productos, cerramos la fila
            echo '</div>';
        }
    }
    // Si quedan productos y no se completó la fila, cerramos la última fila
    if ($count % 3 != 0) {
        echo '</div>';
    }
} else {
    ?>
    <p>Producto(s) no encontrados.....</p>
<?php } ?>

</div>
</div>
</body>
</html>
