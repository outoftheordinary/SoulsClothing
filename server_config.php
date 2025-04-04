<?php
define('DBHOST', 'localhost'); 
define('DBNAME', 'logindb');
define('DBUSER', 'root');
define('DBPASS', '');

$connectionString = "mysql:host=".DBHOST.";dbname=".DBNAME.";charset=utf8";

$pdo = new PDO($connectionString, DBUSER, DBPASS);

try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>