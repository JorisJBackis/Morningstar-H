 HEAD
<?

<?php
 99eced674dd65993413d1dcd08c9dfaa5130f6f0
$dsn="mysql:host=localhost;dbname=userDB";
$dbusername="admin";
$dbpassword="123456";


try {
    $pdo= new PDO ($dsn,$dbusername,$dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " .$e ->getMessage();
}
?>
