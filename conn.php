<?php 
try{
    $host = "localhost";
    $user = "finaltodolist.com";
    $password = "";
    $dbname = "hansel";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $err){
    echo $err->getMessage();
}
?>
