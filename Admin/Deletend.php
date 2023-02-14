<?php
require_once '../Config.php';
$conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = $id";
    $query = mysqli_query($conn, $sql);
    header('location: Nguoidung.php');
?>