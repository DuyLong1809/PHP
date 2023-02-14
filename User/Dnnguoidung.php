<?php
    require_once '../Config.php';
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    session_start();
    if(isset($_POST['dangnhap'])){
        $user = $_POST['taikhoan'];
        $pass = $_POST['matkhau'];
        $sql = "SELECT * FROM quanlykhachhang WHERE taikhoan = '".$user."' AND matkhau = '".$pass."' ";
        $row = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0){
            $_SESSION['dangnhap'] = $user;
            header("Location: ../Home2.php");
        }else{
            echo '<script>alert ("Tài khoản hoặc mật khẩu không chính xác !")</script>';
            header("Location: Dnnguoidung.php");
        }
    }
?>
<html>
<head>
        <meta charset="UTF-8">
        <title>Đăng nhập</title>
        <link rel="stylesheet" href="../public/font/fontawesome-free-5.15.2-web/css/all.min.css">
        <link rel="stylesheet" href="../public/css/home.css">
        <link rel="stylesheet" href="../public/css/userpage.css">
        <!-- <link rel="stylesheet" href="./public/css/base.css"> -->
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="header-top">
                <ul class="header-top1" >
                    <li class="header-top1-li"><i class="fas fa-phone-alt header-top1-li-icon"></i>Holine: 0386131716</li>
                </ul>
                <ul class="header-top2">
                    <li class="header-top2-li"><i class="fa fa-key header-top2-li-icon"></i><a class="header-top2-link" href="../Register.php">Đăng kí</a></li>
                    <li class="header-top2-li"><i class="fas fa-sign-in-alt header-top2-li-icon"></i><a class="header-top2-link" href="../login.php">Đăng nhập</a></li>
                </ul>
            </div>
            <div class="header-bottom">
                <div class="header-bot-logo">
                    <img class="header-bot-logo-img" src="../public/IMG/avt/logo.jpg" alt="">
                </div>
                <div class="header-bot-search">
                    <div class="header-bot-tt">
                        <ul>
                            <li><i class="fa fa-truck header-bot-tt-icon"></i> Giao hàng miễn phí</li>
                            <li><i class="fas fa-money-bill header-bot-tt-icon"></i> Thanh toán linh hoạt</li>
                            <li><i class="fas fa-sync-alt header-bot-tt-icon"></i> Đổi trả trong vòng 3 ngày</li>
                        </ul>
                    </div>
                    <div class="header-bot-searh1">
                        <input type="text" class="header-bot-searh1-input" placeholder="Tìm kiếm ...">
                        <button class="header-bot-searh1-button"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <div class="header-bot-cart">
                    <a href="#"><i class="fas fa-shopping-cart header-bot-cart-icon"></i></a>
                </div>
            </div>
        </div>
        <div class="menu">
            <ul class="list-menu">
                <li class="list-menu-li"><a class="list-menu-li-link" href="../home.php">Trang chủ</a></li>
                <li class="list-menu-li"><a class="list-menu-li-link" href="./Gioithieu.php">Giới thiệu</a></li>
                <li class="list-menu-li"><a class="list-menu-li-link" href="#">Sản phẩm</a></li>
                <li class="list-menu-li"><a class="list-menu-li-link" href="./Lienhe.php">Liên hệ</a></li>
            </ul>
        </div>
        <div class="main">
            <div class="sidebar">
                <div class="sidebar-title">TÀI KHOẢN</div>
                <div class="sidebar-list">
                    <ul >
                        <li><a href="" class="sidebar-list-iteam">Đăng nhập</a></li>
                        <li><a href="" class="sidebar-list-iteam">Đăng kí</a></li>
                    </ul>
                </div>
            </div>    
            <div class="maincontent">
                <div class="maincontentgt">
                    <h2 class="register-user-tittle">ĐĂNG NHẬP</h2>
                    <form class="register-user-form" method="post">
                        <div class="register-user-form-form-group">
                            <label for="usr">Tài khoản:</label>
                            <input type="number" name="id" value="<?=$id?>" style="display: none;">
                            <input required="true" type="text" class="form-control" id="usr" name="taikhoan" >
                        </div>
                        <div class="register-user-form-form-group">
                            <label for="matkhau">Mật khẩu:</label>
                            <input type="password" class="form-control" id="matkhau" name="matkhau" >
                        </div>
                    
                        <button type="submit" name="dangnhap" class="btn btn-success">Đăng nhập</button>
                    </form>
                </div> 
            </div>
        </div>
        </div>
        <!-- <div class="clear"></div> -->
        <div class="footer">
           
            <div class="footer-list">
                    <img class="footer-logo-img" src="../public/IMG/avt/logo.jpg" alt="">
            </div>

            <div class="footer-list">
                <h3 class="footer-list-tittle">GIỚI THIỆU</h3>
                <ul>
                    <li><a class="footer-list-iteam" href="">Về chúng tôi</a></li>
                    <li><a class="footer-list-iteam" href="">Lĩnh vực hoạt động</a></li>
                    <li><a class="footer-list-iteam" href="">Hỏi đáp</a></li>
                    <li><a class="footer-list-iteam" href="">Quy chế hoạt động</a></li>
                    <li><a class="footer-list-iteam" href="">Tuyển dụng</a></li>
                </ul>
            </div>
            <div class="footer-list">
                <h3 class="footer-list-tittle">TRỢ GIÚP</h3>
                <ul>
                    <li><a class="footer-list-iteam" href="">Hướng dẫn thanh toán</a></li>
                    <li><a class="footer-list-iteam" href="">Quy định đổi trả</a></li>
                    <li><a class="footer-list-iteam" href="">Quy định thảo luận</a></li>
                    <li><a class="footer-list-iteam" href="">Chính sách bảo mật</a></li>
                    <li><a class="footer-list-iteam" href="">Chính sách bán hàng</a></li>
                </ul>
            </div>
            <div class="footer-list">
                <h3 class="footer-list-tittle">THÔNG TIN SHOP</h3>
                <ul>
                    <li class="footer-list-iteam2">D2SHOES STORE</li>
                    <li class="footer-list-iteam2"><i class="fas fa-map-marker-alt footer-list-iteam2-icon"></i>12 ngõ 2 Phạm Văn Đồng - Mai Dịch - Cầu Giấy - Hà Nội</li>
                    <li class="footer-list-iteam2"><i class="far fa-envelope footer-list-iteam2-icon"></i>D2Shoes@sneaker.com</li>
                    <li class="footer-list-iteam2"><i class="fas fa-phone footer-list-iteam2-icon"></i>0386131716</li>
                </ul>
            </div>
            <div class="footer-list">
                <h3 class="footer-list-tittle">LIÊN HỆ</h3>
                <ul class="footer-list-list">
                    <li class="footer-list-list-iteam"><a href=""><i class="fab fa-facebook-square footer-list-list-iteam-icon"></i></a></li>
                    <li class="footer-list-list-iteam"><a href=""><i class="fab fa-google footer-list-list-iteam-icon"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>