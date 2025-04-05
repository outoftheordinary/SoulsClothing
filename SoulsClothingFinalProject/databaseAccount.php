<?php
require_once('server_config.php');

function db_connect() {
    try {
      $connectionString = 'mysql:host='.DBHOST.';dbname='.DBNAME;
      $pdo = new PDO($connectionString, DBUSER, DBPASS);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     return $pdo;
    }
    catch (PDOException $e)
    {
      die($e->getMessage());
    }
  }

  function handle_form_submission_account() {
    global $pdo;
  
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {   
      if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['verifyPassword'])) {
        $sql = "INSERT INTO account (name, username, password, verifyPassword) VALUES (:name, :username, :password, :verifyPassword)";
       
        $statement = $pdo->prepare($sql);
        $statement->bindValue(':name', $_POST['name']);
        $statement->bindValue(':username', $_POST['username']);
        $statement->bindValue(':password', $_POST['password']);
        $statement->bindValue(':verifyPassword', $_POST['verifyPassword']);
  
        $statement->execute();
      }
    }
  }

  function get_account() {
    global $pdo;
    global $account;

    $sql="SELECT * FROM account ORDER BY ID DESC";
    $result = $pdo->query($sql);
    while ($row=$result->fetch())  {
      $account[]=$row;
    }
      return $account;
  }

  function get_ID() {
    global $pdo;
    global $ID;
  
    $sql="SELECT ID FROM account";
    $result = $pdo->query($sql);
    while ($row=$result->fetch())  {
      $ID[]=$row;
    }
  }

  function get_name() {
    global $pdo;
    global $name;
  
    $sql="SELECT name FROM account";
    $result = $pdo->query($sql);
    while ($row=$result->fetch())  {
      $name[]=$row;
    }
  }

  function get_user() {
    global $pdo;
    global $user;
  
    $sql="SELECT username FROM account";
    $result = $pdo->query($sql);
    while ($row=$result->fetch())  {
      $user[]=$row;
    }
  }

  function get_password() {
    global $pdo;
    global $password;
  
    $sql="SELECT password FROM account";
    $result = $pdo->query($sql);
    while ($row=$result->fetch())  {
      $password[]=$row;
    }
  }
   
  function get_passwordV() {
    global $pdo;
    global $passwordV;
  
    $sql="SELECT password FROM account";
    $result = $pdo->query($sql);
    while ($row=$result->fetch())  {
      $passwordV[]=$row;
    }
  }
?>