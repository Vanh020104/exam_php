<?php
require "db.php";
$p_name = $_POST["name"];
$p_age = $_POST["age"];
$p_address = $_POST["address"];
$p_telephone = $_POST["telephone"];

// get products from db
// 1. connect db
$conn= connect();

// connection succeed
$sql = "insert into students(name,age,address,telephone) values('$p_name','$p_age','$p_address','$p_telephone')";
$conn->query($sql);
header("Location: students.php");