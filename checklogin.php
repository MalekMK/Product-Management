<?php
/**
 * Created by PhpStorm.
 * User: mk
 * Date: 5/9/18
 * Time: 9:41 PM
 */

require "db/dbconfig.php";
$db = new DB($host,$username,$password,$database);

if ($_POST) {
    $username = $_POST["username"];
    $query = $db->query("SELECT * FROM users WHERE username=?",array($username));
    $password = $_POST["password"];
    if ($username == $query[0]["username"] && $password == $query[0]["password"] ) {
        session_start();
        $_SESSION["username"] = $username;
        header("location:Dashboard/dashboard.php");
    } else
        header("location:login.php?error=True");

}