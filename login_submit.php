<?php
    include 'Config.php';
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);

    if(isset($_POST["submit"]) && $_POST["username"]!='' && $_POST["password"]!=''){
        $user = $_POST["username"];
        $pass = $_POST["password"];
        $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
        $user = mysqli_query($conn,$sql);
        if(mysqli_num_rows($user) > 0){
            header("location: Adminhome.php");
        }else{
            echo '<script language="javascript">alert("Sai tài khoản hoặc mật khẩu "); window.location="register.php";</script>';
            header("location: login.php");
        }
    }
    else{
        header("location: login.php");
    }
?>