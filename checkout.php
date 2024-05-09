<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>premier league</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="../90min/estilos.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<nav>
    <?php
    include("header.php");
    
    include 'conection.php';
    
    
    include 'Cart.php';
    // Crear una instancia del carrito
    $cart = new Cart;
    
    // Almacena los detalles del carrito en sesiones
    $_SESSION['cart_items'] = $cart->contents();
    $_SESSION['total'] = $cart->total();
    
    // Verificar si existe una sesión de usuario activa
    if(isset($_SESSION['usuario_id'])) {
        // Obtener el ID del usuario de la sesión
        $usuario_id = $_SESSION['usuario_id'];
        
        // Consultar la base de datos para obtener los detalles del usuario
        $query = $connection->query("SELECT * FROM customers WHERE id = $usuario_id");
        
        // Verificar si se encontraron resultados
        if($query->num_rows > 0) {
            // Extraer los detalles del usuario
            $custRow = $query->fetch_assoc();
            
            // Aquí tienes los detalles del usuario
            // Por ejemplo, puedes acceder al nombre del usuario así: $custRow['name']
            
            // Incluir el archivo para obtener el token de PayPal
           // include 'obtener_token_paypal.php';
        } else {
            // No se encontró ningún usuario con el ID de sesión, puede ser un error
            echo "Error: No se encontró ningún usuario con el ID de sesión.";
        }
    } else {
        // No hay sesión de usuario activa, redirigir al usuario a la página de inicio de sesión
        echo "Error: No hay sesión de usuario activa.";
        // Puedes agregar una redirección a tu página de inicio de sesión aquí
    }
    
    ?>
</nav>
<hr>
<div class="shipAddr" style="text-align: center;">
            
            <h4>Dettalles de envío</h4>
            <p><?php echo $custRow['name']; ?></p>
            <p><?php echo $custRow['email']; ?></p>
            <p><?php
// Obtenemos el número de teléfono del arreglo
$telefono = $custRow['phone'];

// Verificamos si el número de teléfono tiene el prefijo "55"
if (substr($telefono, 0, 2) === '55') {
    // Si lo tiene, imprimimos el número de teléfono con paréntesis
    echo '(' . substr($telefono, 0, 2) . ') ' . substr($telefono, 2);
} else {
    // Si no lo tiene, imprimimos el número de teléfono tal como está
    echo $telefono;
}
?>
</p>
            <p><?php echo $custRow['address']; ?></p>
        </div>
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
            <td></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
</div>
<hr>
        <div class="footBtn" style="margin-left:200px">
        <div id="smart-button-container" style="">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'pay',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"LA DESCRIPCION DE TU PRODUCTO","amount":{"currency_code":"USD","value":13}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
 
actions.redirect('LA URL DE TU PAGINA DE GRACIAS');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
           
        </div>
    </div>
