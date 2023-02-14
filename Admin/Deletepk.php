<?php
require_once '../Config.php';
$conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    $id = $_GET['id'];
    $sql = "DELETE FROM quanlyphukien WHERE pk_id = $id";
    $query = mysqli_query($conn, $sql);
    header('location: Qlphukien.php');
?>