<?php
require_once('server_config.php');
require_once('index.php');

session_start();
  function handle_form_submission_order() {
    global $pdo;
  
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {       

      if(isset($_POST['items']) && isset($_POST['size']) && isset($_POST['color'])) {
        
        $sql = "INSERT INTO itemsincart (username, items  , size, color) VALUES (:username, :items, :size, :color)";
        
        $statement = $pdo->prepare($sql);
        $statement->bindValue(':username', $_SESSION['username'] ?? 'guest');
        $statement->bindValue(':items', $_POST['items']);
        $statement->bindValue(':size', $_POST['size']);
        $statement->bindValue(':color', $_POST['color']);
  
        $statement->execute();

      }
    }
  }
?>