<?php

$name = $_POST["name"];
$number = $_POST["number"];
$email = $_POST["email"];
$sub = $_POST["sub"];
$msg = $_POST["msg"];

$conn = mysqli_connect("localhost", "root", "", "winkelen1") or die("connection failed");
$sql = "INSERT INTO contact(name, number, email, sub, msg) VALUES ('{$name}', '{$number}', '{$email}', '{$sub}', '{$msg}')";
$result = mysqli_query($conn, $sql) or die("insertion failed");
header("location: contactUs.php");
?>