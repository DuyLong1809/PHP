<?php
    require_once('./Config.php');
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    session_start();
    // if(!empty($_SESSION['current_user'])){
        $sql = mysqli_query($conn, "SELECT *FROM quanlyhoadon");
        $order = mysqli_fetch_all($sql, MYSQLI_ASSOC);
    // }
    
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./public/css/adhome.css">
    <link rel="stylesheet" href="./public/font/fontawesome-free-5.15.2-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    <script src="./public/JS/Chart.min.js"></script>
</head>
<body>
    <header>
        <div class="navbar-container">
            <div style="display: flex;">
                <span style="width: 50%;font-size: 16px;display: flex; color: white;margin-left: 25px; padding-top: 12px;"><i style="font-size: 26px;margin-right: 5px;" class="fas fa-crown"></i>Xin chào,<h4 style="font-size: 17px;color: rgb(255, 255, 101); margin: 0;padding: 0;">  Admin</h4></span>
                <div style="margin-top: 12px;margin-left: 300px;color: white;"><a style="font-size: 16px;text-decoration: none;color: rgb(185, 185, 185);" href=""><i style="margin-right: 5px;" class="far fa-bell"></i>Thông báo</a></div>
                <div style="margin-top: 12px;margin-left: 20px;color: white;"><a style="font-size: 16px;text-decoration: none;color: rgb(185, 185, 185);" href=""><i style="margin-right: 5px;" class="far fa-comment-dots"></i>Tin nhắn</a></div>
                <div style="margin-top: 12px;margin-left: 20px;color: white;"><a style="font-size: 16px;text-decoration: none;color: white;" href="./login.php"><i style="margin-right: 5px;" class="fas fa-power-off"></i>Đăng xuất</a></div>
            </div>
            
        </div>
    </header>
    <section>
        <div class="body-left">
            <div class="body-left-list">
                <ul class="body-left-list-ul">
                    <li class="body-left-list-ul-li"><a class="body-left-list-iteam" href="./Adminhome.php"><i class="fas fa-tachometer-alt body-left-list-iteam-icon"></i><b>Trang Chủ</b></a></li>
                    <li><a class="body-left-list-iteam" href="./Admin/Qlsanpham1.php"><i class="fas fa-table body-left-list-iteam-icon"></i><b>Sản Phẩm</b></a></li>
                    <li><a class="body-left-list-iteam" href="./Admin/Qlphukien.php"><i class="fas fa-shoe-prints body-left-list-iteam-icon"></i><b>Phụ kiện</b></a></li>
                    <li><a class="body-left-list-iteam" href="./Admin/Qlkhachhang.php"><i class="fa fa-users body-left-list-iteam-icon"></i><b>Khách hàng</b></a></li>
                    <li><a class="body-left-list-iteam" href="./Admin/Qlhoadon.php"><i class="fa fa-shopping-cart body-left-list-iteam-icon"></i><b>Hóa đơn</b></a></li>
                    <li><a class="body-left-list-iteam" href="./Admin/Nguoidung.php"><i class="fas fa-user body-left-list-iteam-icon"></i></i><b>Người dùng</b></a></li>
                </ul>
            </div>
        </div>
        <div class="body-right">
            
            <div class="body-right-row">
                <div class="body-right-row-reportt">
                    <div class="body-right-row-report-tittle"><center><h4><i class="fa fa-check-square body-right-row-report-tittle-icon"></i> Hoạt động hôm nay</h4></center></div>
                </div>
            
            
            <?php
                $tongtien = 0;
                foreach($order as $row){?>
                    <?php $tongtien += $row['tongtien'] ?>
                        
                    <?php
                }
                ?>
                    <div class="body-right-row-reportb">
                            <div class="body-right-row-reportb-iteam">
                                <div class="report-box box-green">
                                    <div class="infobox-icon">
                                        <i style="margin-top: 18px; margin-left: 20px;" class="fas fa-money-check-alt infobox-icon-cart"></i><span style="margin-left: 20px;font-size: 20px;">Doanh thu</span>
                                    </div>
                                    <div class="infobox-data">
                                        <span s class="infobox-data-number text-center"><?php echo number_format($tongtien,0);?></span><span style="font-size: 15px;">VNĐ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="body-right-row-reportb-iteam">
                                <div class="report-box box-blue">
                                    <div class="infobox-icon1">
                                        <i style="margin-top: 18px; margin-left: 20px;" class="fab fa-product-hunt infobox-icon-cart"></i></i><span style="margin-left: 20px;font-size: 20px;">Số sản phẩm</span>
                                    </div>
                                    <div class="infobox-data">
                                        <span class="infobox-data-number text-center">
                                            <?php
                                                 $countsp = mysqli_query($conn,"SELECT * FROM quanlysanpham ");
                                                $i = 0;
                                                while(mysqli_fetch_assoc($countsp)){
                                                    $i++;
                                                }
                                                echo $i;
                                                 
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="body-right-row-reportb-iteam">
                                <div class="report-box box-red">
                                    <div class="infobox-icon2">
                                        <i style="margin-top: 18px; margin-left: 20px;" class="fab fa-product-hunt infobox-icon-cart"></i></i><span style="margin-left: 20px;font-size: 20px;">Số khách hàng</span>
                                    </div>
                                    <div class="infobox-data">
                                        <span class="infobox-data-number">
                                            <?php
                                                 $countkh = mysqli_query($conn,"SELECT * FROM quanlykhachhang ");
                                                $k = 0;
                                                while(mysqli_fetch_assoc($countkh)){
                                                    $k++;
                                                }
                                                echo $k;
                                                 
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="body-right-row-reportb-iteam">
                                <div class="report-box box-orange">
                                <div class="infobox-icon3">
                                        <i style="margin-top: 18px; margin-left: 20px;" class="fab fa-soundcloud infobox-icon-cart"></i><span style="margin-left: 20px;font-size: 20px;">Đơn hàng web</span>
                                    </div>
                                    <div class="infobox-data">
                                        <span class="infobox-data-number">
                                            <?php
                                                 $counthd = mysqli_query($conn,"SELECT * FROM quanlyhoadon ");
                                                $shd = 0;
                                                while(mysqli_fetch_assoc($counthd)){
                                                    $shd++;
                                                }
                                                echo $shd;
                                                 
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
            ?>
            </div>
            
            <div class="body-right-row">
                <div class="body-right-row-tk">
                <div class="body-right-row-iteam1">
                    <div class="widget widget-blue">
                        <div class="widget-header">
                            <h3 class="widget-title"><i class="fa fa-play-circle widget-title-icon"></i>Hoạt động</h3>
                        </div>
                        <div class="widget-body">
                            <div class="row">
                                <div class="info col-xs-7">Tiền bán hàng:</div>
                                <div class="info col-xs-5 data text-right"><b><?php echo number_format($tongtien,0);?></b></div>
                                <div class="info col-xs-7">Số đơn hàng:</div>
                                <div class="info col-xs-5 data text-right"><b>
                                    <?php
                                        $counthd = mysqli_query($conn,"SELECT * FROM quanlyhoadon ");
                                        $shd = 0;
                                        while(mysqli_fetch_assoc($counthd)){
                                            $shd++;
                                        }
                                        echo $shd;        
                                    ?>
                                </b></div>
                                <div class="info col-xs-7">Số sản phẩm</div>
                                <div class="info col-xs-5 data text-right"><b>
                                    <?php
                                        $sql = mysqli_query($conn, "SELECT soluong FROM chitiethoadon");
                                        $ssp = 0;
                                        while($row = mysqli_fetch_assoc($sql)){
                                            $ssp += $row['soluong'];
                                        }
                                        echo $ssp; 
                                    ?>
                                </b></div>
                                <div class="info col-xs-7">Khách hàng trả</div>
                                <div class="info col-xs-5 data text-right"><b>0</b></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body-right-row-iteam1">
                    <div class="widget widget-orange">
                        <div class="widget-header">
                            <h3 class="widget-title"><i class="fab fa-ioxhost widget-title-icon"></i>Thông tin kho</h3>
                        </div>
                        <div class="widget-body">
                            <div class="row">
                                <div class="info col-xs-7">Tồn kho</div>
                                <div class="info col-xs-5 data text-right"><b>
                                            <?php
                                                 $countsp = mysqli_query($conn,"SELECT * FROM quanlysanpham ");
                                                $i = 0;
                                                while(mysqli_fetch_assoc($countsp)){
                                                    $i++;
                                                }
                                                echo $i;
                                                 
                                            ?>
                                </b></div>
                                <div class="info col-xs-7">Hết Hàng</div>
                                <div class="info col-xs-5 data text-right"><b>0</b></div>
                                <div class="info col-xs-7">Sắp hết hàng</div>
                                <div class="info col-xs-5 data text-right"><b>0</b></div>
                                <div class="info col-xs-7">Vượt định mức</div>
                                <div class="info col-xs-5 data text-right"><b>0</b></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body-right-row-iteam1">
                    <div class="widget widget-green">
                        <div class="widget-header">
                            <h3 class="widget-title"><i class="fa fa-barcode widget-title-icon"></i>Thông tin sản phẩm</h3>
                        </div>
                        <div class="widget-body">
                            <div class="row">
                                <div class="info col-xs-7">Thương hiệu</div>
                                <div class="info col-xs-5 data text-right"><b>7</b>
                                    / <b>7</b></div>
                                <div class="info col-xs-7">Chưa làm giá bán</div>
                                <div class="info col-xs-5 data text-right"><b>0</b></div>
                                <div class="info col-xs-7">Chưa nhập giá mua</div>
                                <div class="info col-xs-5 data text-right"><b>0</b></div>
                                <div class="info col-xs-7">Hàng chưa phân loại</div>
                                <div class="info col-xs-5 data text-right"><b>0</b></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="body-right-row">
                <div class="chart-report">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading"><i class="fa fa-align-left panel-heading-icon"></i>Biểu đồ doanh số tuần</div>
                                <div class="panel-body">
                                    Loading ...
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading"><i class="fa fa-globe panel-heading-icon"></i>Thông tin từ web</div>
                                <div class="panel-body">
                                    Loading ...
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading"><i class="fa fa-rss panel-heading-icon"></i>Tin chuyên ngành</div>
                                <div class="panel-body">
                                    Loading ...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>