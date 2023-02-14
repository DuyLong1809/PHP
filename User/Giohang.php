<html>
<head>
        <meta charset="UTF-8">
        <title>Web bán giày</title>
        <link rel="stylesheet" href="../public/font/fontawesome-free-5.15.2-web/css/all.min.css">
        <link rel="stylesheet" href="../public/css/home.css">
        <!-- <link rel="stylesheet" href="./public/css/base.css"> -->
</head>
<body>
    <div class="header">
            <div class="header-top">
                <ul class="header-top1" >
                    <li class="header-top1-li"><i class="fas fa-phone-alt header-top1-li-icon"></i>Holine: 0386131716</li>
                </ul>
                <ul class="header-top2">
                    <li class="header-top2-li"><i class="fa fa-key header-top2-li-icon"></i><a class="header-top2-link" href="./Register.php">Đăng kí</a></li>
                    <li class="header-top2-li"><i class="fas fa-sign-in-alt header-top2-li-icon"></i><a class="header-top2-link" href="./login.php">Đăng nhập</a></li>
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
                    <a href="../User/Giohang.php"><i class="fas fa-shopping-cart header-bot-cart-icon"></i></a>
                </div>
            </div>
        </div>
    <div class="menu">
            <ul class="list-menu">
                <li class="list-menu-li"><a class="list-menu-li-link" href="../home.php">Trang chủ</a></li>
                <li class="list-menu-li"><a class="list-menu-li-link" href="../User/Gioithieu.php">Giới thiệu</a></li>
                <li class="list-menu-li"><a class="list-menu-li-link" href="../home.php">Sản phẩm</a></li>
                <li class="list-menu-li"><a class="list-menu-li-link" href="../User/Lienhe.php">Liên hệ</a></li>
            </ul>
        </div>
    <div class="wrapper">

        <div class="main main-giohang1">
            <div class="main-giohang1-tittle"><h1>GIỎ HÀNG CỦA TÔI</h1></div>
            <div class="main-giohang">
                <form id="cart-form" action="Giohang.php?action=submit" >
                <table class="table produc-list">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="item in OrderDetails" class="ng-scope">
                                <td class="image">
                                        <a href="./giayjordan.php"> <img ng-src="/Uploads/shop22980/images/day%20sac%20remax%201.jpg" width="80px" height="80px" class="img-responsive" src="../public/IMG/Sanpham/Nike/jd2.jpg"></a>
                                </td>
                                <td class="des">
                                        <h2><a href="/san-pham/cap-sac-dien-thoai-da-nang-remax.html" class="ng-binding">Giày Nike Jordan</a></h2>
                                        <span class="ng-binding">Xanh dương</span>
                                </td>
                                <td class="price ng-binding">400$</td>
                                <td class="quantity">
                                        <input type="number" value="1" class="text ng-pristine ng-untouched ng-valid" ng-model="item.Quantity" ng-change="updateItemCart(item)">
                                </td>
                                <td class="amount ng-binding">
                                        400$
                                </td>
                                <td class="remove">
                                    <a ng-click="removeItemCart(item)" href="javascript:void(0)">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr ng-repeat="item in OrderDetails" class="ng-scope">
                                <td class="image">
                                        <a href="./giayjordan.php"> <img ng-src="/Uploads/shop22980/images/day%20sac%20remax%201.jpg" width="80px" height="80px" class="img-responsive" src="../public/IMG/Sanpham/Nike/jd2.jpg"></a>
                                </td>
                                <td class="des">
                                        <h2><a href="/san-pham/cap-sac-dien-thoai-da-nang-remax.html" class="ng-binding">Giày Nike Jordan</a></h2>
                                        <span class="ng-binding">Xanh dương</span>
                                </td>
                                <td class="price ng-binding">400$</td>
                                <td class="quantity">
                                        <input type="number" value="1" class="text ng-pristine ng-untouched ng-valid" ng-model="item.Quantity" ng-change="updateItemCart(item)">
                                </td>
                                <td class="amount ng-binding">
                                        400$
                                </td>
                                <td class="remove">
                                    <a ng-click="removeItemCart(item)" href="javascript:void(0)">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table></form>
            </div>
            <div class="main-tongtien">
                <span><b>Tổng thanh toán:</b></span>
                <span class="pay-price ng-binding">800$</span>
            </div>
            <div class="main-button">
                <a class="main-btn main-btn-default" href="/" onclick="window.history.back()">Tiếp tục mua hàng</a>
                <a class="main-btn main-btn-primary" href="./Thanhtoan.php">Tiến hành thanh toán</a>
            </div>
        </div>
    </div>
        <!-- <div class="clear"></div> -->
    </div>
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
</body>
</html>