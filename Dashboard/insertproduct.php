<?php



require "../db/dbconfig.php";
$db = new DB($host,$username,$password,$database);

if ($_POST) {
    $reference = $_POST["reference"];
    $name = $_POST["name"];
    $stock = $_POST["stock"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $result = $db->query("INSERT INTO products(reference,name,stock,price,description) VALUES('$reference','$name','$stock','$price','$description')");
    header("location:dashboard.php");
};