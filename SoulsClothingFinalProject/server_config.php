<?php
define('DBHOST', 'localhost'); 
define('DBNAME', 'project');
define('DBUSER', 'root');
define('DBPASS', '1234');

$connectionString = "mysql:host=".DBHOST.";dbname=".DBNAME.";charset=utf8";

$pdo = new PDO($connectionString, DBUSER, DBPASS);

try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>