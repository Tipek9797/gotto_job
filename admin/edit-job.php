<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use PO\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "gottojob");

if (isset($_POST['submit'])) {
    $udpate = $db->editJob(
        $_POST['id'],
        $_POST['image'],
        $_POST['urldetails'],
        $_POST['name'],
        $_POST['location'],
        $_POST['posted'],
        $_POST['pay'],
        $_POST['jobposition'],
        $_POST['jobtype'],
        $_POST['urllistings']
    );

    if ($udpate) {
        header("Location: home.php?status=5");
    } else {
        header("Location: home.php?status=6");
    }
} else {
    header("Location: home.php");
}
