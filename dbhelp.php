<?php
    require_once('Config.php');
// insert, update, delete
function execute($sql){
    // create conection->database
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);

    // querry
    mysqli_query($conn,$sql);

    // Đóng kết nối
    mysqli_close($conn);
}

// Chạy câu lệnh select
function executeResult($sql){
     // create conection->database
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);

    // querry
    $resultset = mysqli_query($conn,$sql);
    $list = [];
    while($row = mysqli_fetch_array($resultset,1)){
        $list[] = $row;
    }
    // Đóng kết nối
    mysqli_close($conn);
    return $list;
}