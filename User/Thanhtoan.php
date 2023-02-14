<?php session_start() ?>
<html>
<head>
        <meta charset="UTF-8">
        <title>Web bán giày</title>
        <link rel="stylesheet" href="../public/font/fontawesome-free-5.15.2-web/css/all.min.css">
        <link rel="stylesheet" href="../public/css/home.css">
        <!-- <link rel="stylesheet" href="./public/css/base.css"> -->
</head>
<body>
<?php
    require_once '../Config.php';
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    $error = false;
    if(!isset($_SESSION["cart"])){
        $_SESSION["cart"] = array();
    }
    if(isset($_GET['action'])){
        function update_cart($add = false){
            foreach ($_POST['soluong'] as $id => $soluong){
                if($soluong == 0){
                    unset($_SESSION["cart"][$id]);
                }else{
                    if($add){
                        $_SESSION["cart"][$id] += $soluong;
                    }else{
                        $_SESSION["cart"][$id] = $soluong;
                    }
                }
                
            }
        }
        switch ($_GET['action']){
            case "add":
                update_cart(true);
                header("Location: Thanhtoan.php");
                break;
            case "delete":
                if(isset($_GET['id'])){
                    unset($_SESSION["cart"][$_GET['id']]);
                }
                header("Location: Thanhtoan.php");
                break;
            case "submit":
                if(isset($_POST['update_click'])){                  
                    update_cart();
                    header("Location: Thanhtoan.php");
                }
                else if(isset($_POST['order_click']))
                {    
                     if(empty($_POST['hoten'])){
                         $error = "Bạn chưa nhập tên người nhận";
                     }else if(empty($_POST['sdt'])){
                        $error = "Bạn chưa nhập số điện thoại người nhận";
                    }else if(empty($_POST['email'])){
                        $error = "Bạn chưa nhập email người nhận";
                    }else if(empty($_POST['diachi'])){
                        $error = "Bạn chưa nhập địa chỉ người nhận";
                    }else if(empty($_POST['soluong'])){
                        $error = "Giỏ hàng trống";
                    }
                    if($error == false && !empty($_POST['soluong'])){
                        $sanpham = mysqli_query($conn, "SELECT * FROM quanlysanpham WHERE sp_id IN (".implode(",",array_keys($_POST['soluong'])).")");
                        $total = 0;
                        $orderProduct = array();
                        while($row = mysqli_fetch_array($sanpham)){
                            $orderProduct[] = $row;
                            $total += $row['gia'] * $_POST['soluong'][$row['sp_id']];
                        }
                        $addhd = mysqli_query($conn, "INSERT INTO `quanlyhoadon` (`id`, `tenkh`, `sdt`, `gmail`, `diachi`, `ghichu`, `tongtien`, `thoigian`) VALUES (NULL, '".$_POST['hoten']."', '".$_POST['sdt']."', '".$_POST['email']."', '".$_POST['diachi']."', '".$_POST['ghichu']."', '".$total."', '".time()."');");
                        $hoadon_id = $conn -> insert_id; 
                        $insertString = "";
                        
                       foreach($orderProduct as $key=> $sanpham){   
                            $insertString .= "(NULL, '".$hoadon_id."', '".$sanpham['sp_id']."','".$_POST['soluong'][$sanpham['sp_id']]."', '".$sanpham['gia']."')";
                            if($key != count($orderProduct)-1){
                                $insertString .= ",";
                            }

                        }
                        
                        $addhd = mysqli_query($conn, "INSERT INTO `chitiethoadon` (`id`, `hoadon_id`, `sp_id`, `soluong`, `gia`) VALUES ".$insertString.";");
                        $thongbao = "Đặt hàng thành công, Cảm ơn bạn !";
                        unset($_SESSION['cart']);
                    }
                }
                break;
        }
        
    }
    if(!empty($_SESSION["cart"])){
       
        $sanpham = mysqli_query($conn,"SELECT * FROM quanlysanpham WHERE sp_id IN (".implode(",", array_keys($_SESSION['cart'])).") ");
        
    }

?>

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
                    <a href="./User/Hoadon.php"><i class="fas fa-shopping-cart header-bot-cart-icon"></i></a>
                </div>
            </div>
        </div>
    <div class="menu">
            <ul class="list-menu">
                <li class="list-menu-li"><a class="list-menu-li-link" href="../home.php">Trang chủ</a></li>
                <li class="list-menu-li"><a class="list-menu-li-link" href="../User/Gioithieu.php">Giới thiệu</a></li>
                <li class="list-menu-li"><a class="list-menu-li-link" href="#">Sản phẩm</a></li>
                <li class="list-menu-li"><a class="list-menu-li-link" href="../User/Lienhe.php">Liên hệ</a></li>
            </ul>
        </div>
    <div class="wrapper">
        
        <div class="thanhtoan"><h1>THANH TOÁN</h1></div>
        <div class="main-thanhtoan">
            <?php if(!empty($error)) {?>
                <div>
                    <?=$error?>.  <a href="javascript:history.back()">Quay lại</a>
                </div>

            <?php }
            else if(!empty($thongbao)){ ?>
                 <div style="text-align: center; color: red;">
                    <?=$thongbao?>.<a href="../home.php">Tiếp tục mua hàng</a>
                </div>
            <?php }
            else{?>
                <form style="display: flex;" id="cart-form" action="Thanhtoan.php?action=submit" method="POST">
                    <div class="main-thanhtoan-iteam1">
                        <h4>THÔNG TIN VÀ ĐỊA CHỈ NHẬN HÀNG</h4>
                        <div class="main-thanhtoan-iteam-ttn">
                            <h2>THÔNG TIN THANH TOÁN</h2>
                            <div class="main-thanhtoan-iteam-ttn-form">
                                <label style="margin: 10px 0;" for="">Nhập thông tin người nhận :</label>
                                <div id="notify-msg"><?=(!empty($error)) ? $error : ""?></div>

                                <div class="form-group">
                                    <input style="width: 98%; height: 30px; border-radius: 5px solid black" type="text" value="" name="hoten" placeholder="Họ và tên ">
                                </div>
                                <div class="form-group">
                                    <input style="width: 98%; height: 30px; border-radius: 5px solid black" type="text" value="" name="sdt"  placeholder="Số điện thoại" type="text" >
                                </div>
                                <div class="form-group">
                                    <input style="width: 98%; height: 30px; border-radius: 5px solid black" type="text" value="" name="email" placeholder="Email"  >
                                </div>
                                <div class="form-group">
                                    <input style="width: 98%; height: 30px; border-radius: 5px solid black" type="text" value="" name="diachi"  placeholder="Địa chỉ"  >
                                </div>
                                <div class="form-group">
                                    <textarea  style="width: 100%; height: 100px;border-radius: 5px solid black;" name="ghichu" cols="50" rows="7" placeholder="Ghi chú đơn hàng" ></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-thanhtoan-iteam2">
                        <h4>THÔNG TIN ĐƠN HÀNG</h4>
                        <div class="main-thanhtoan-iteam-ttdh">
                            <div class="main-thanhtoan-iteam-ttdh-list">
                                <form id="cart-form" action="Thanhtoan.php?action=submit" method="POST">
                                <table style="width: 99%;" style="border-radius: 1px solid black;">
                                    <tr style="border-radius: 1px solid black;">
                                        <th>STT</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Hình ảnh</th>
                                        <th>Đơn giá</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                        <th>Xóa</th>
                                    </tr>
                                    <?php
                                        if(!empty($sanpham)){
                                            $i = 1;
                                            $total = 0;
                                            while($row = mysqli_fetch_array($sanpham)){
                                                ?>
                                                <tr >
                                                    <th><?=$i++?></th>
                                                    <th><?=$row['tensp'];?></th>
                                                    <th><img src="../public/IMG/Sanpham/Nike/<?=$row['hinhanh']?>" width="100px" alt=""></th>
                                                    <th><?= number_format($row['gia'], 0, "," , ".") ?></th>
                                                    <th><input style="width: 40px;height: 40px; text-align: center;" type="text"  value="<?=$_SESSION["cart"][$row['sp_id']]?>" name="soluong[<?=$row['sp_id']?>]"></th>
                                                    <th><?= number_format($row['gia']*$_SESSION["cart"][$row['sp_id']], 0, "," , ".") ?></th>
                                                    <th><a style="text-decoration: none;" href="Thanhtoan.php?action=delete&id=<?=$row['sp_id']?>">Xóa</a></th>
                                                </tr>
                                                <?php 
                                                $total += $row['gia']*$_SESSION["cart"][$row['sp_id']];
                                            }
                                            ?>
                                                    <tr >
                                                        <th></th>
                                                        <th>Tổng tiền</th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th><?= number_format($total, 0, "," , ".") ?></th>
                                                        <th></th>
                                                    </tr>
                                                <?php
                                            
                                        }else{

                                        }
                                    ?>
                                </table>
                                
                            </div>
                            <form action="Thanhtoan.php?action=add" method="POST">
                                <div style="margin-top: 20px ;" id="form-button" class="button-thanhtoan">
                                    <input  class="button-thanhtoa-btn" name="update_click" type="submit" value="Cập nhật">
                                </div>
                            </form>
                            <div style="margin-top: 300px; width: 100%; height: 60px;" >
                                <input class="button-thanhtoa-btn" style="float: right; margin-right: 150px; padding: 13px 30px;background-color: #ed4c4c; border: 0; color: white;border-radius: 3px;" type="submit" name="order_click" value="Đặt hàng">
                            </div> 
                        </div>
                    
                    </div>
            
                </form>
            <?php }
            
            ?>
            
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