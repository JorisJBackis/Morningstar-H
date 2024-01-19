<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
   $username = $_POST["username"];
   $pwd = $_POST["pwd"];
   $email = $_POST["email"];

   try {
    require_once "dbh.php";

    $query=("INSERT INTO users (username, pwd, email) 
    VALUES (:username, :pwd, :email);");
    
    $stmt= $pdo ->prepare($query);
    $stmt->bindparam (":username", $username);
    $stmt->bindparam (":pwd", $pwd);
    $stmt->bindparam (":email", $email);

    $stmt -> execute();

    $pdo=null;
    $stmt=null;

    header("location: index.php");

    die();

   
} catch (PDOException $e) {
    die("Query failed: " . $e-> getMessage());
   }

}else{
    //the user needs to be sent to the front page.
    header("location: index.php");
}
