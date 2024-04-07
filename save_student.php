<?php
include 'db_connect.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];

$query = "INSERT INTO students (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
mysqli_query($conn, $query);

header('Location: index.php');
