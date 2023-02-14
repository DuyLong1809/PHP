<?php
    require_once '../Config.php';
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
?>
<?php
    if(isset($_GET['option'])){
        switch($_GET['option']){
            case'chitietsanpham':
                require_once "./User/chitietsanpham.php";
                break;
            default:
                require_once "home.php";
                break;
        }
    }else{
        require_once "home.php";
    }
?>