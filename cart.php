<?php
include('server_config.php');
session_start();

if(!isset($_SESSION['username'])){
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'];

if ($username) {
    $stmt = $pdo->prepare("
    SELECT inventory.price, inventory.image_url, inventory.name
    FROM cartitems
    JOIN inventory ON cartitems.item = inventory.name
    WHERE cartitems.username = :username
");

$stmt->execute(['username' => $username]);
$cartItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

} else {
    echo "Please log in to view your cart.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
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
                <li id="right"> <a href="cart.php"> <img src="images/cart.png" height="50px"> </a>
            </ul>
        </nav>
    <h2>Your items: </h2>
    <table>
        <thead>
            <tr>
                <th><h3>Image</h3></th>
                <th><h3>Item</h3></th>
                <th><h3>Price</h3></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cartItems as $item): ?>
                <tr>
                    <td><img src="<?php echo $item['image_url']; ?>" alt="<?php echo $item['name']; ?>"></td>
                    <td><?php echo $item['name']; ?></td>
                    <td>$<?php echo $item['price']; ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="2">Total:</td>
                <td>$<?php echo array_sum(array_column($cartItems, 'price')); ?></td>
            </tr>
        </tbody>
    </table>
    <form action="checkout.php" method="POST">
    <input type="hidden" name="cartItems" value="<?php echo base64_encode(serialize($cartItems)); ?>">
    <button type="submit">Proceed to Checkout</button>
</form>
    
</body>
