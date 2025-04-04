<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        header('Location: login.php');
        exit();
    } else{
        $username = $_SESSION['username'];
    }
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Homepage </title>
    </head>

    <body>
        <a href="collections.html"> Browse our collections, <?php echo $username ?> </a>
    </body>
</html>