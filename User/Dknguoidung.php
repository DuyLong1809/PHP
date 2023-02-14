
<?php
require_once ('../dbhelp.php');

$s_taikhoan = $s_matkhau = $s_hoten = $s_diachi = $s_sdt = $s_gmail = '';

if (!empty($_POST)) {
	$s_id = '';

	if (isset($_POST['taikhoan'])) {
		$s_taikhoan = $_POST['taikhoan'];
	}
    if (isset($_POST['matkhau'])) {
		$s_matkhau = $_POST['matkhau'];
	}

	if (isset($_POST['hoten'])) {
		$s_hoten = $_POST['hoten'];
	}

	if (isset($_POST['diachi'])) {
		$s_diachi = $_POST['diachi'];
	}
	if (isset($_POST['sdt'])) {
		$s_sdt = $_POST['sdt'];
	}
	if (isset($_POST['gmail'])) {
		$s_gmail = $_POST['gmail'];
	}

	if (isset($_POST['id'])) {
		$s_id = $_POST['id'];
	}

	$s_taikhoan = str_replace('\'', '\\\'', $s_taikhoan);
    $s_matkhau = str_replace('\'', '\\\'', $s_matkhau);
	$s_hoten      = str_replace('\'', '\\\'', $s_hoten);
	$s_diachi  = str_replace('\'', '\\\'', $s_diachi);
	$s_sdt  = str_replace('\'', '\\\'', $s_sdt);
	$s_gmail  = str_replace('\'', '\\\'', $s_gmail);
	$s_id       = str_replace('\'', '\\\'', $s_id);

	if ($s_id != '') {
		//update
		$sql = "update quanlykhachhang set taikhoan = '$s_taikhoan', matkhau = '$s_matkhau', hoten = '$s_hoten', diachi = '$s_diachi', sdt = '$s_sdt', gmail = '$s_gmail' where id = " .$s_id;
	} else {
		//insert
		$sql = "insert into quanlykhachhang(taikhoan, matkhau, hoten, diachi, sdt, gmail) value ('$s_taikhoan', '$s_matkhau' , '$s_hoten', '$s_diachi', '$s_sdt', '$s_gmail')";
	}

	// echo $sql;

	execute($sql);

	// header('Location: Dnnguoidung.php');
	// die();
}

?>
<html>
<head>
        <meta charset="UTF-8">
        <title>Web bán giày</title>
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
                    <li class="header-top2-li"><i class="fa fa-key header-top2-li-icon"></i><a class="header-top2-link" href="../User/Dknguoidung.php">Đăng kí</a></li>
                    <li class="header-top2-li"><i class="fas fa-sign-in-alt header-top2-li-icon"></i><a class="header-top2-link" href="../User/Dnnguoidung.php">Đăng nhập</a></li>
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
                        <li><a href="./Dnnguoidung.php" class="sidebar-list-iteam">Đăng nhập</a></li>
                        <li><a href="./Dknguoidung.php" class="sidebar-list-iteam">Đăng kí</a></li>
                    </ul>
                </div>
            </div>    
            <div class="maincontent">
                <div class="maincontentgt">
                    <h2 class="register-user-tittle">ĐĂNG KÍ TÀI KHOẢN</h2>

                    <form class="register-user-form" method="post">
                    <div class="register-user-form-form-group">
					    <label for="usr">Tài khoản:</label>
					    <input type="number" name="id" value="<?=$id?>" style="display: none;">
					    <input required="true" type="text" class="form-control" id="usr" name="taikhoan" value="<?=$s_taikhoan?>">
					</div>
                    <div class="register-user-form-form-group">
					    <label for="matkhau">Mật khẩu:</label>
					    <input type="password" class="form-control" id="matkhau" name="matkhau" value="<?=$s_matkhau?>">
					</div>
					<div class="register-user-form-form-group">
					    <label for="hoten">Họ tên:</label>
					    <input type="text" class="form-control" id="hoten" name="hoten" value="<?=$s_hoten?>">
					</div>
					<div class="register-user-form-form-group">
					    <label for="diachi">Địa chỉ:</label>
					    <input type="text" class="form-control" id="diachi" name="diachi" value="<?=$s_diachi?>">
					</div>
					<div class="register-user-form-form-group">
					    <label for="sdt">SĐT:</label>
					    <input type="number" class="form-control" id="sdt" name="sdt" value="<?=$s_sdt?>">
					</div>
					<div class="register-user-form-form-group">
					    <label for="gmail">Gmail:</label>
					    <input type="text" class="form-control" id="gmail" name="gmail" value="<?=$s_gmail?>">
					</div>
                        <button style="margin: 10px 0 0 300px;" class="btn btn-success">Đăng kí</button>
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