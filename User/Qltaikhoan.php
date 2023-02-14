
<?php
// require_once '../Config.php';
// session_start();
// if(isset($_GET['action'])== 'dangxuat'){
//     unset($_SESSION['dangnhap']);
//     header("Location: ./User/Qltaikhoan.php");
// }
?>
<?php
        require_once '../Config.php';
        $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
        $id = $_GET['id'];

        $sql_up = "SELECT * FROM quanlykhachhang WHERE id = $id";
        $query_up = mysqli_query($conn, $sql_up);
        $row_up = mysqli_fetch_assoc($query_up);
    
        if(isset($_POST['sbm'])){
            $taikhoan = $_POST['taikhoan'];
            $matkhau = $_POST['matkhau'];
            $hoten = $_POST['hoten'];
            $diachi = $_POST['diachi'];
            $sdt = $_POST['sdt'];
            $gmail = $_POST['gmail'];
    
            $sql = "UPDATE quanlykhachhang SET taikhoan = '$taikhoan',matkhau = '$matkhau', hoten = '$hoten', diachi = '$diachi', sdt = '$sdt', gmail = '$gmail' WHERE id = $id";
    
            $query = mysqli_query($conn, $sql);
            // echo $sql;
            header('location: Qltaikhoan.php');
        }
?>
<html>
<head>
        <meta charset="UTF-8">
        <title>Quản lý tài khoản</title>
        <link rel="stylesheet" href="../public/font/fontawesome-free-5.15.2-web/css/all.min.css">
        <link rel="stylesheet" href="../public/css/home.css">
        <link rel="stylesheet" href="../public/css/userpage.css">
        
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="header-top">
                <ul class="header-top1" >
                    <li class="header-top1-li"><i class="fas fa-phone-alt header-top1-li-icon"></i>Holine: 0386131716</li>
                </ul>
                <ul class="header-top2">
                <li class="header-top2-li"><i class="fas fa-power-off header-top2-li-icon"></i><a class="header-top2-link" href="./home.php">Đăng xuất</a></li>
                    
                    <li class="header-top2-li"><a class="header-top2-link" href="./Home2.php?action=dangxuat">Xin chào <?php if(isset($_SESSION['dangnhap'])){
                        echo $_SESSION['dangnhap'];
                    } ?></a></li>
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
                <div class="sidebar-title">THÔNG TIN NGƯỜI DÙNG</div>
                <div class="sidebar-list">
                    <ul >
                    
                    </ul>
                </div>
            </div>    
            <div class="maincontent">
                <div class="maincontentgt">
                    <h2 class="register-user-tittle">Thông tin người dùng</h2>

                    <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label> Tài khoản:</label>
                    <input type="text" name="taikhoan" class="form-control" value="<?php echo $row_up['taikhoan']; ?>">
                </div>
                <div class="form-group">
                    <label>Mật khẩu:</label>
                    <input type="text" name="matkhau" class="form-control" value="<?php echo $row_up['matkhau']; ?>">
                </div>
                <div class="form-group">
                    <label>Họ tên:</label>
                    <input type="text" name="hoten" class="form-control" value="<?php echo $row_up['hoten']; ?>">
                </div>

                <div class="form-group">
                    <label>Địa chỉ: </label>
                    <input type="number" name="diachi" class="form-control" value="<?php echo $row_up['diachi']; ?>">
                </div>

                <div class="form-group">
                    <label>SĐT : </label>
                    <input type="number" name="sdt" class="form-control" value="<?php echo $row_up['sdt']; ?>">
                </div>
                <div class="form-group">
                    <label>Gmail : </label>
                    <input type="text" name="gmail" class="form-control" value="<?php echo $row_up['gmail']; ?>">
                </div>
               
                    <button name="sbm" class="btn btn-success">Sửa</button>
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