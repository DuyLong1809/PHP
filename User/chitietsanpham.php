<?php
    require_once '../Config.php';
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    $id = $_GET["id"];
	$sql ="SELECT quanlysanpham.*, thuonghieu.tenthuonghieu FROM quanlysanpham 
    INNER JOIN thuonghieu ON quanlysanpham.th_id=thuonghieu.th_id 
    where sp_id = $id";
	$result = mysqli_query($conn,$sql);
?>
<html>
<head>
        <meta charset="UTF-8">
        <title>Chi tiết sản phẩm</title>
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
                <li class="list-menu-li"><a class="list-menu-li-link" href="../home.php">Sản phẩm</a></li>
                <li class="list-menu-li"><a class="list-menu-li-link" href="./Lienhe.php">Liên hệ</a></li>
            </ul>
        </div>
        <div class="maingiay">
<?php
            while($row = mysqli_fetch_array($result)){ ?>
                <div class="main-left">
                <div class="main-left-buy">
                    <div class="main-left-buy-sp">
                        <div class="slideshow-container">
                        <!-- Kết hợp hình ảnh và nội dung cho mội phần tử trong slideshow-->
                            <div class="mySlides fade">
                                <img src="../public/IMG/Sanpham/Nike/<?php echo $row['hinhanh'] ?>" style="width:100%">
                            </div>
                            <div class="mySlides fade">
                                <img src="../public/IMG/Sanpham/Nike/<?php echo $row['hinh1'] ?>" style="width:100%">
                            </div>
                            <div class="mySlides fade">
                                <img src="../public/IMG/Sanpham/Nike/<?php echo $row['hinh2'] ?>" style="width:100%">
                            </div>
                            <div class="mySlides fade">
                                <img src="../public/IMG/Sanpham/Nike/<?php echo $row['hinh3'] ?>" style="width:100%">
                            </div>
                            
                        <!-- Nút điều khiển mũi tên-->
                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                            <a class="next" onclick="plusSlides(1)">❯</a>
                        </div>
                        <br>
                        <!-- Nút tròn điều khiển slideshow-->
                        <div style="text-align:center">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                            <span class="dot" onclick="currentSlide(4)"></span>
                        </div>
                        <script src="../public/JS/sanphamslide.js"></script>
                    </div>
                    <div class="main-left-buy-gia">
                        <div class="main-left-buy-gia-top">
                            <div class="main-left-buy-gia-top-title">
                                <div class="main-left-buy-gia-top-title1">
                                    <h1><?php echo $row['tensp'] ?></h1>
                                    <b>Đánh giá: </b><i class="fas fa-star main-left-buy-gia-top-icon"></i><i class="fas fa-star main-left-buy-gia-top-icon"></i><i class="fas fa-star main-left-buy-gia-top-icon"></i><i class="fas fa-star main-left-buy-gia-top-icon"></i><i class="fas fa-star main-left-buy-gia-top-icon"></i>
                                </div>
                                <img class="main-left-buy-gia-top-img" src="../public/IMG/avt/logo-addas.webp" alt="">
                            </div>
                            <div class="main-left-buy-gia-top-gia">
                                <?php $giakm = 0;
                                    $giakm = $row['gia']*0.8;
                                ?>
                                <span class="main-left-buy-gia-top-gia1"><?php echo $row['gia'] ?>VNĐ</span>
                                <span class="main-left-buy-gia-top-gia2"><?php echo $giakm ?>VNĐ</span>
                            </div>
                        </div>
                        <div class="main-left-buy-gia-bot">
                            <div class="main-left-buy-gia-bot-tinhtrang">
                                <ul>
                                    <li>Trạng thái: <span>Còn hàng</span></li>
                                    <li>Tình trạng: <span>Hàng mới 100%</span></li>
                                    <li>Bảo hành 6 tháng</li>
                                </ul>
                            </div>
                        </div>
                        <form id="add-to-cart-form" action="Thanhtoan.php?action=add" method="POST">
                            <label style="margin-left: 30px ; font-weight: bold;font-size: 18px;">Số lượng: </label><input style="width: 30px;height: 30px;" type="text" value="1" name="soluong[<?= $row['sp_id']?>]">
                            
                            <input style="text-align: center; font-size: 18px;" class="main-left-buy-gia-bot-btn" type="submit" value="Thêm vào giỏ hàng" >
                        </form>
                        </div>
                </div>
                <div class="main-left-tt">
                    <div class="main-left-tt-tittle"><span>CHI TIẾT SẢN PHẨM</span></div>
                    <div class="main-left-tt-sp">
                        <h2><?php echo $row['tensp'] ?></h2>
                        <p><?php echo $row['mota'] ?></p>
                        
                        <div>
                                <table class="main-left-tt-sp-table">
                                    <tbody>
                                        <tr>
                                            <th>Bộ sưu tập</th>
                                            <td><p><?php echo $row['tenthuonghieu'] ?></p></td>
                                        </tr>
                                        <tr>
                                            <th>Màu</th>
                                            <td><p>Xám xanh</p></td>
                                        </tr>
                                        <tr>
                                            <th>Giới tính</th>
                                            <td><p>Nam, Nữ</p></td>
                                        </tr>
                                        <tr>
                                            <th>Size</th>
                                            <td><p>37, 38, 39, 40, 41, 42, 43</p></td>
                                        </tr>
                                        <tr>
                                            <th>Tình trạng</th>
                                            <td><p>Hàng mới 100%</p></td>
                                        </tr>
                                        <tr>
                                            <th>Trạng thái</th>
                                            <td><p>Còn hàng</p></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h4>Màu sắc</h4>
                        <div style="display: flex;" class="main-left-tt-sp-list">
                        <img  class="main-left-tt-sp-list-img" src="../public/IMG/Sanpham/Nike/<?php echo $row['hinhanh'] ?>" alt="">
        
                        </div>
                    </div>
                </div>
            </div>
            <?php }
?>
            <div class="main-right">
                <div class="main-right-top">
                    <div class="main-right-top-cs">
                        <span>Chính sách bán hàng</span>
                    </div>
                    <div class="main-right-top-listcs">
                        <ul>
                            <li>Giao hàng TOÀN QUỐC</li>
                            <li>Thanh toán khi nhân hàng</li>
                            <li>Đổi trả trong 3 ngày</li>
                            <li>Hoàn ngay tiền mặt</li>
                            <li>Chất lượng đảm bảo</li>
                            <li>Miễn phí vận chuyển</li>
                        </ul>
                    </div>
                </div>
                <div class="main-right-bot">
                    <div class="main-right-bot-cs">
                        <span>Hướng dẫn mua hàng</span>
                    </div>
                    <div class="main-right-bot-listcs">
                        <ul>
                            <li>1. Mua hàng trực tiếp tại website</li>
                            <li>2. Gọi điện thoại <span>0386131716</span> để mua hàng</li>
                            <li>3. Mua tại cửa hàng: <span>12 ngõ 2 Phạm Văn Đồng - Mai Dịch - Cầu Giấy - Hà Nội</span></li>
                            <li>4. Mua sỉ/buôn gọi <span>0359860550</span>để được hỗ trợ</li>
                        </ul>
                    </div>
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