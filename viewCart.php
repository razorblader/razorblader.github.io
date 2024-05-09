<?php

include 'Cart.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>premier league</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="../90min/estilos.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<nav>
    <?php
    include("header.php");
    ?>
</nav>
<div class="container" style="margin-top: 50px; background-color: #333; padding: 20px; border-radius: 10px;">
    <h1 style="color: white; text-align: center;">Carrito de Compra</h1>
    <table class="table" style="color: white;">
    <thead>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
            <th> </th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
           
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '$'.$item["price"].' MXN'; ?></td>
            <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')" style="width: 50px;"></td>
            <td><?php echo '$'.$item["subtotal"].' MXN'; ?></td>
            <td>
                <a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('¿De verdad quieres borrar el producto?')" style="background-color: #d9534f; border-color: #d43f3a;"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>Tu Carrito está vacío</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2"><a href="90Minutos.php" class="btn btn-warning" style="background-color: #f0ad4e; border-color: #eea236;"><i class="glyphicon glyphicon-menu-left"></i> Continua Comprando</a></td>
            <td colspan="2" style="text-align: right;"><strong>Total <?php echo '$'.$cart->total().' MXN'; ?></strong></td>
            <?php if($cart->total_items() > 0){ ?>
            <td><a href="checkout.php" class="btn btn-success btn-block" style="background-color: #5cb85c; border-color: #4cae4c;">Revisar <i class="glyphicon glyphicon-menu-right"></i></a></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
</div>
