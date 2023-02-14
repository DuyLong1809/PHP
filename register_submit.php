<?php
    include 'Config.php';
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    if( isset($_POST['submit']) && $_POST["username"]!= '' && $_POST["password"]!='' && $_POST["repassword"]!='' && $_POST["fullname"]!='' && $_POST["email"]!='' && $_POST["sdt"]!=''){
        $user = $_POST["username"];
        $pass = $_POST["password"];
        $repass = $_POST["repassword"];
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $sdt = $_POST["sdt"];
        if($pass != $repass){
            header("location: Register.php");
        }
        $sql = "SELECT * FROM users WHERE username='$user'";
        $old = mysqli_query($conn,$sql);
        if(mysqli_num_rows($old) > 0){
            // header("location: Register.php");
            echo "Trùng";
        }else{
            $sql = "INSERT INTO users(username,password,fullname,email,sdt) VALUE ('$user','$pass','$fullname','$email','$sdt')";
            mysqli_query($conn,$sql);
            echo "ĐĂNG KÍ THÀNH CÔNG";
            header("location: login.php");
        }
    }else{
        header("location: Register.php");
    }   
?>