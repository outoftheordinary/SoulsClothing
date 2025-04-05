<?php 
include_once('server_config.php');
require_once ('databaseAccount.php');

handle_form_submission_account();

get_ID();
get_name();
get_user();
get_password();
get_passwordV();


session_start();

$ID =[];
$name = [];
$user = [];
$password = [];
$passwordV = [];

if(isset($_POST['submit'])){
    global $ID;
    global $name;
    global $user;
    global $password;
    global $passwordV;
 
    $len = $user.length()-1;
    $IDNum=$ID[$len];
    $enteredUser=$users[$len];
    $enteredPass=$password[$len];
    $enteredPassV=$passwordV[$len];

    for($i=0;$i<$len;$i++) {
      if($users[$i]==$enteredUser) {
          echo '<p class="error">Username already exists. Please choose another username!</p>';
          "DELETE FROM account WHERE ID = $IDNum";
          "DELETE FROM account WHERE verifyPassword = $enteredName";
          "DELETE FROM account WHERE username = $enteredUser";
          "DELETE FROM account WHERE password = $enteredPass";
          "DELETE FROM account WHERE verifyPassword = $enteredPassV";
          return false;
        }
      else if($enteredPass!=$enteredPassV) {
          echo '<p class="verify">Passwords do not match, please retry!</p>';
          "DELETE FROM account WHERE ID = $IDNum";
          "DELETE FROM account WHERE verifyPassword = $enteredName";
          "DELETE FROM account WHERE username = $enteredUser";
          "DELETE FROM account WHERE password = $enteredPass";
          "DELETE FROM account WHERE verifyPassword = $enteredPassV";
          return false;
        } 
      else {
          header('Location: login.php');
          exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Account</title>
        <link rel="stylesheet" href="collections.css">
        <link rel="icon" type="image/x-icon" href="images/soulslogo.png">
    </head>

    <body>
        <header>
            <h1>Soul's Collections</h1>
        </header>
        <main>
            <h1 class="account-head">Create An Account</h1>
            <div class="account-form">
            <form action="index.php" method="POST" role="form" aria-description="form to create an account">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required><br><br>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required><br><br>
                <p class="error"></p>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required><br><br>
                <p class="verify"></p>
                <label for="verifyPassword">Verify Password:</label>
                <input type="password" name="verifyPassword" id="verifyPassword" required>
                <button type="submit" name="submit" role="button" aria-description="button to create an account">Create</button>
            </form>
            </div>
        </main>
    </body>
</html>