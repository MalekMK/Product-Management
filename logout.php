<?php
/**
 * Created by PhpStorm.
 * User: ichebbi
 * Date: 24/05/17
 * Time: 08:09
 */

session_start();
unset($_SESSION["username"]);
session_destroy();
header("location:index.php");