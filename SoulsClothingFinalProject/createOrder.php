<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('server_config.php');
require_once 'databaseOrder.php';

handle_form_submission_order();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="collections.css">
     <script src="myscripts.js"></script>
    <title>Order Created</title>
</head>
<body>
<header>
        <h1>Soul's Collections</h1>
    </header>
<nav>
        <ul>
            <li id="left"> <a href="homepage.html"> <img src="images/soulslogo.png" style="width:50px;height:auto;"
                        alt="Soul's Clothing Logo"> </a> </li>
            <li> <a href="collections.html#onepiece"> One Piece </a> </li>
            <li> <a href="collections.html#yearn"> Yearn </a> </li>
            <li> <a href="collections.html#stranded"> Stranded </a> </li>
            <li> <a href="collections.html#eaten"> Eaten </a> </li>
            <li id="right"> <a href="cart.php"> <img src="images/cart.png" height="50px" alt="Cart icon"> </a>
        </ul>
    </nav>
    <h2>Congratulations!</h2>
    <p>Your order has been made!</p>
 <div class="return">
      <a href="collections.html">
        <button role="button" aria-description=" button to go back to collections page">Continue Shopping</button>
      </a>
    </div>
</body>
</html>