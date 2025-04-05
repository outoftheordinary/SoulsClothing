<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$account = [];
$users = [];

require_once 'databaseAccount.php';

handle_form_submission_account();

get_account();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="collections.css">
    <title>Account Created</title>
</head>
<body>
 <div class="return">
      <a href="login.php">
        <button style="position:fixed; left:50%;" role="button" aria-description="button to go back to login page"> Return to Login </button>
      </a>
    </div>
</body>
</html>