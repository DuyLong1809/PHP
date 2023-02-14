<?php
    require_once 'Config.php';
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
	$qr = "SELECT quanlysanpham.sp_id,quanlysanpham.tensp,quanlysanpham.hinhanh,quanlysanpham.gia
    FROM quanlysanpham
    INNER JOIN thuonghieu ON quanlysanpham.th_id=thuonghieu.th_id 
    WHERE thuonghieu.th_id=9";
	$result = mysqli_query($conn,$qr);
?>
<html>
<head>
        <meta charset="UTF-8">
        <title>Web bán giày</title>
        <link rel="stylesheet" href="./public/font/fontawesome-free-5.15.2-web/css/all.min.css">
        <link rel="stylesheet" href="./public/css/home.css">
        <!-- <link rel="stylesheet" href="./public/css/base.css"> -->
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="header-top">
                <ul class="header-top1" >
                    <li class="header-top1-li"><i class="fas fa-phone-alt header-top1-li-icon"></i>Holine: 0986131716</li>
                </ul>
                <ul class="header-top2">
                    <li class="header-top2-li"><i class="fa fa-key header-top2-li-icon"></i><a class="header-top2-link" href="./User/Dknguoidung.php">Đăng kí</a></li>
                    <li class="header-top2-li"><i class="fas fa-sign-in-alt header-top2-li-icon"></i><a class="header-top2-link" href="./User/Dnnguoidung.php">Đăng nhập</a></li>
                </ul>
            </div>
            <div class="header-bottom">
                <div class="header-bot-logo">
                    <img class="header-bot-logo-img" src="./public/IMG/avt/logo.jpg" alt="">
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
                    <a href="./User/Thanhtoan.php"><i class="fas fa-shopping-cart header-bot-cart-icon"></i></a>
                </div>
            </div>
        </div>
        <div class="menu">
            <ul class="list-menu">
                <li class="list-menu-li"><a class="list-menu-li-link" href="./home.php">Trang chủ</a></li>
                <li class="list-menu-li"><a class="list-menu-li-link" href="./User/Gioithieu.php">Giới thiệu</a></li>
                <li class="list-menu-li"><a class="list-menu-li-link" href="./home.php">Sản phẩm</a></li>
                <li class="list-menu-li"><a class="list-menu-li-link" href="./User/Lienhe.php">Liên hệ</a></li>
            </ul>
        </div>
        <div class="main">
            <div class="sidebar">
                <div class="sidebar-title"></i>DANH MỤC SẢN PHẨM</div>
                <div class="sidebar-list">
                    <ul >
                        <li><a href="./User/Nike.php" class="sidebar-list-iteam">Nike</a></li>
                        <li><a href="./User/Addidas.php" class="sidebar-list-iteam">Adiddas</a></li>
                        <li><a href="" class="sidebar-list-iteam">Supreme</a></li>
                        <li><a href="" class="sidebar-list-iteam">Puma</a></li>
                        <li><a href="" class="sidebar-list-iteam">Balenciaga</a></li>
                        <li><a href="" class="sidebar-list-iteam">New Balance</a></li>
                        <li><a href="" class="sidebar-list-iteam">Converse</a></li>
                        <li><a href="" class="sidebar-list-iteam">Vans</a></li>
                    </ul>
                </div>
            </div>    
            <div class="maincontent">
                <div class="maincontentslide">
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                            <img width="100%" height="100%" src="./public/IMG/Sanpham/a3.jpg" style="width:100%; object-fit: fill">
                        </div>
                        <div class="mySlides fade">
                            <img width="100%" height="100%" src="./public/IMG/Sanpham/a1.jpg" style="width:100%; object-fit: cover">              
                        </div>
                        <div class="mySlides fade">
                            <img  width="100%" height="100%" src="./public/IMG/Sanpham/a2.jpg" style="width:100%; object-fit: cover">
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                    </div>
                    <br>
                    <script src="./public/JS/slide.js"></script>
                </div>
                <div class="maincontents-control">
                    <div class="maincontents-control-s"></div>
                    <div class="sort">
                        <span>Sắp xếp theo :</span>
                        <select name="" id="">
                            <option value="">Mặc định</option>
                            <option value="">Giá tăng dần</option>
                            <option value="">Giá giảm dần</option>
                            <option value="">Theo tên sản phâm: A - Z</option>
                            <option value="">Theo tên sản phâm: Z - A</option>
                        </select>
                    </div>
                </div>
                <h2>Nike</h2>
                <div class="maincontent-list">
                    <?php
                        $giakm = 0;
                        foreach($result as $iteam){?>
                            
                            <div class="maincontent-list-sp">
                                <a href="./User/chitietsanpham.php?id=<?php echo $iteam['sp_id']?>">
                                    <div class="maincontent-list-sp-offer">-20%</div>
                                    <div class="sanpham">
                                    <img class="sanpham-img" src="./public/IMG/Sanpham/Nike/<?=$iteam['hinhanh']  ?>" alt="">
                                    <div style="height: 65px;font-size: 20px; padding: 0 10px;" class="sanpham-name"><?=$iteam['tensp'] ?></div>
                                    <div class="sanpham-gia">
                                        <?php $giakm = $iteam['gia']*0.8; ?>
                                        <span class="sanpham-gia1"><?=number_format($giakm,0)?></span>
                                        <span class="sanpham-gia2"><?=number_format($iteam['gia'],0)?></span>
                                    </div>
                                    <div class="button-group">
                                        <button class="button add-cart"><span style="font-size: 16px;font-family: Verdana Geneva;">Chi tiết</span></button>
                                        <button class="button compare"><i class="fas fa-exchange-alt"></i></button>
                                        <button class="button love"><i class="far fa-heart"></i></i></button>
                                    </div>
                                    </div>
                                </a>
                            </div>
                        <?php }?>
                    
                    
                </div>
                
              
                <div class="maincontent-list1">
                    <?php
                        $sql = "SELECT quanlysanpham.sp_id,quanlysanpham.tensp,quanlysanpham.hinhanh,quanlysanpham.gia
                        FROM quanlysanpham
                        INNER JOIN thuonghieu ON quanlysanpham.th_id=thuonghieu.th_id 
                        WHERE thuonghieu.th_id=1";
                        $result1 = mysqli_query($conn,$sql);
                        
                        foreach($result1 as $iteam){?>
                            
                            <div class="maincontent-list-sp">
                                <a href="./User/chitietsanpham.php?id=<?php echo $iteam['sp_id']?>">
                                    <div class="sanpham">
                                    <img class="sanpham-img" src="./public/IMG/Sanpham/Nike/<?=$iteam['hinhanh']  ?>" alt="">
                                    <div style="height: 75px;font-size: 20px; padding: 0 10px;" class="sanpham-name"><?=$iteam['tensp'] ?></div>
                                    <div class="sanpham-gia">
                                        <span class="sanpham-gia1"><?=number_format($iteam['gia'],0)?></span>
                                    </div>
                                    <div class="button-group">
                                        <button class="button add-cart"><span style="font-size: 16px;font-family: Verdana Geneva;">Chi tiết</span></button>
                                        <button class="button compare"><i class="fas fa-exchange-alt"></i></button>
                                        <button class="button love"><i class="far fa-heart"></i></i></button>
                                    </div>
                                    </div>
                                </a>
                            </div>
                        <?php }?>
                    
                    
                </div>
               
                <div class="maincontent-list1">
                    <?php
                        $sql = "SELECT * FROM quanlyphukien";
                        $result1 = mysqli_query($conn,$sql);
                        
                        foreach($result1 as $iteam){?>
                            
                            <div class="maincontent-list-sp">
                                <a href="./User/chitietphukien.php?id=<?php echo $iteam['pk_id']?>">
                                    
                                    <div class="sanpham">
                                    <img class="sanpham-img" src="./public/IMG/Sanpham/Nike/<?=$iteam['hinhanhpk']  ?>" alt="">
                                    <div style="height: 65px;font-size: 20px; padding: 0 10px;" class="sanpham-name"><?=$iteam['tenpk'] ?></div>
                                    <div class="sanpham-gia">
                                        <?php $giakm = $iteam['gia']*0.8; ?>
                                        
                                        <span class="sanpham-gia1"><?=number_format($iteam['gia'],0)?></span>
                                    </div>
                                    <div class="button-group">
                                        <button class="button add-cart"><span style="font-size: 16px;font-family: Verdana Geneva;">Chi tiết</span></button>
                                        <button class="button compare"><i class="fas fa-exchange-alt"></i></button>
                                        <button class="button love"><i class="far fa-heart"></i></i></button>
                                    </div>
                                    </div>
                                </a>
                            </div>
                        <?php }?>
                    
                    
                </div>
            </div>
        </div>
        </div>
        <!-- <div class="clear"></div> -->
        <div class="footer">
           
            <div class="footer-list">
                    <img class="footer-logo-img" src="./public/IMG/avt/logo.jpg" alt="">
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