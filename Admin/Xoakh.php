<?php
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    
        require_once ('../dbhelp.php');
        $sql = 'delete from quanlykhachhang where id = '.$id;
        execute($sql);
    
        echo 'Xoá thông tin khách hàng thành công';
    }
?>