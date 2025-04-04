<?php
$showForm = false;
$showConfirmation = false;
$cart_items = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['cartItems']) && !isset($_POST['name'])) {
        // First submit: show the form
        $cart_items = unserialize(base64_decode($_POST['cartItems']));
        $encoded_items = $_POST['cartItems'];
        $showForm = true;
    } elseif (isset($_POST['name'], $_POST['address'], $_POST['card'], $_POST['cartItems'])) {
        // Final submit: show confirmation
        $cart_items = unserialize(base64_decode($_POST['cartItems']));
        $name = htmlspecialchars($_POST['name']);
        $address = htmlspecialchars($_POST['address']);
        $days = rand(2, 7);
        $showConfirmation = true;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <link rel="stylesheet" href="collections.css">
    <link rel="icon" type="image/x-icon" href="images/soulslogo.png">
</head>
<body>
    <header>
        <h1>Soul's Collections</h1>
    </header>
    <nav>
        <ul>
            <li id="left"> <a href="homepage.php"> <img src="images/soulslogo.png" style="width:50px;height:auto;"> </a> </li>
            <li> <a href="collections.html#onepiece"> One Piece </a> </li>
            <li> <a href="collections.html#yearn"> Yearn </a> </li>
            <li> <a href="collections.html#stranded"> Stranded </a> </li>
            <li> <a href="collections.html#eaten"> Eaten </a> </li>
            <li id="right"> <a href="cart.php"> <img src="images/cart.png" height="50px"> </a> </li>
        </ul>
    </nav>

    <?php if ($showForm): ?>
        <form method="POST" action="checkout.php">
            <input type="hidden" name="cartItems" value="<?php echo htmlspecialchars($encoded_items); ?>">
            <label>Name: <input type="text" name="name" required></label><br><br>
            <label>Address: <textarea name="address" required></textarea></label><br><br>
            <label>Credit Card Number: <input type="text" name="card" required></label><br><br>
            <button type="submit">Place Order</button>
        </form>
    <?php elseif ($showConfirmation): ?>
        <div class="confirmation">
            <h2>Order Confirmation</h2>
            <p>Hey <?php echo $name ?>, your order will be shipped to <?php echo $address ?> in <?php echo $days ?> days.</p>
            <h3>Your Items:</h3>
            <ul>
                <?php foreach ($cart_items as $item): ?>
                    <li><?php echo $item['name'] . ' - $' . number_format($item['price'], 2); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php else: ?>
        <p>No cart data received. Please go back and try again.</p>
    <?php endif; ?>

</body>
</html>