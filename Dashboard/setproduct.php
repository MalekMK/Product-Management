<?php
/**
 * Created by PhpStorm.
 * User: mk
 * Date: 5/16/18
 * Time: 12:51 AM
 */

require "../db/dbconfig.php";
$db = new DB($host,$username,$password,$database);

if ($_POST) {
    $reference = $_POST["reference"];
    $name = $_POST["name"];
    $stock = $_POST["stock"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $result = $db->query("UPDATE products SET name='$name' , stock='$stock' , price='$price' , description='$description' WHERE reference='$reference'");
    header("location:dashboard.php");
};