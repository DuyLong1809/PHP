<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM quanlysanpham WHERE sp_id = $id";
    $query = mysqli_query($conn, $sql);
    header('location: sanphamindex.php');
?>