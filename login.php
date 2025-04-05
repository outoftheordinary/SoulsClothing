<?php include('server_config.php');

session_start();

if(isset($_POST['login'])){
    $enteredUsername = $_POST['uname'];
    $enteredPassword = $_POST['pass'];

    $query = "SELECT * FROM users WHERE Username=:username";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['username' => $enteredUsername]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && $user['Password'] === $enteredPassword) {
        $_SESSION['username'] = $enteredUsername;
        header('Location: homepage.php');
        exit();
    } else {
        echo "<script>console.log('Wrong username and password');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Log In </title>
        <link rel="stylesheet" href="styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="scripts.js"></script>
    </head>
    <body>
        <header>
            <h1>Soul's Collections</h1>
        </header>
        <div id="wrapper">
            <div class="pic pic1"> <img src="login_images/eaten_model.png" class="login-image" style="max-width:200px; height: auto;"> </div>
            <div class="pic pic2"> <img src="login_images/stranded_girlModel.png" class="login-image" style="max-width:200px; height: auto;"> </div>
            <div class="pic pic3"> <img src="login_images/stranded_maleModel.png" class="login-image" style="max-width:200px; height: auto;"> </div>
            <div class="pic pic4"> <img src="login_images/yearn_girlModel.png" class="login-image" style="max-width:200px; height: auto;"> </div>
            <div class="pic pic5"> <img src="login_images/yearn_maleModel.png" class="login-image" style="max-width:200px; height: auto;"> </div>
            <div class="pic pic6"> <img src="login_images/eaten_skull.png" class="login-image" style="max-width:200px; height: auto;"> </div>

            <div id="loginForm">
                <form method="post" action="login.php">
                    <fieldset>
                        <legend> Log In </legend>
                        <input type="text" id="uname" name="uname" placeholder="Username" required style="color: #FFF8F0; padding: 5px; border-radius: 5px; margin:15px;">
                        <br> <br>
                        <input type="password" id="pass" name="pass" placeholder="Password" required style="color: #FFF8F0; padding: 5px; border-radius: 5px; margin:15px;">
                        <br> <br>
                        <input type="submit" name="login" style="background-color: #D72638; color: #FFF8F0; padding: 5px; border-radius: 5px; margin:15px;">
                        <p> or </p>
                        <button id="register" style="background-color: #D72638; color: #FFF8F0; padding: 5px; border-radius: 5px; margin:15px;"> <a href="register.php" style="text-decoration: none; color: #FFF8F0;"> Register </a> </button> 
                    </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>