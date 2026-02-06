<?php
session_start();
include "config/db.php";

$name = $_SESSION['cv']['name'];
$pid = $_GET['pid'];

mysqli_query($conn,"INSERT INTO payments(name,amount,payment_id)
VALUES('$name',5,'$pid')");

header("Location: pdf/generate.php");
?>