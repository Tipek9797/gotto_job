<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use PO\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "gottojob");

if (isset($_POST['submit'])) {
    $insert = $db->insertJob(
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

    if ($insert) {
        header("Location: home.php?status=1");
    } else {
        header("Location: home.php?status=2");
    }
} else {
    header("Location: home.php");
}
