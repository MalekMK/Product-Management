<?php
/**
 * Created by PhpStorm.
 * User: mk
 * Date: 5/9/18
 * Time: 11:49 AM
 */


require "db/dbconfig.php";
$db = new DB($host,$username,$password,$database);

if ($_POST) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    $result = $db->query("INSERT INTO feedback(name,email,phone,message) VALUES('$name','$email','$phone','$message')");
    header("location:contacts.php");
};