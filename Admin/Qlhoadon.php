<?php
    require_once('../dbhelp.php');
    
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý hóa đơn</title>
    <link rel="stylesheet" href="../public/css/adhome.css">
    <link rel="stylesheet" href="../public/css/ad.css">
    <link rel="stylesheet" href="../public/font/fontawesome-free-5.15.2-web/css/all.min.css">
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <div class="navbar-container">
            <div style="display: flex;">
                <span style="width: 50%;font-size: 16px;display: flex; color: white;margin-left: 25px; padding-top: 12px;"><i style="font-size: 26px;margin-right: 5px;" class="fas fa-crown"></i>Xin chào,<h4 style="font-size: 17px;color: rgb(255, 255, 101); margin: 0;padding: 0;">  Admin</h4></span>
                <div style="margin-top: 12px;margin-left: 300px;color: white;"><a style="font-size: 16px;text-decoration: none;color: rgb(185, 185, 185);" href="./login.php"><i style="margin-right: 5px;" class="far fa-bell"></i>Thông báo</a></div>
                <div style="margin-top: 12px;margin-left: 20px;color: white;"><a style="font-size: 16px;text-decoration: none;color: rgb(185, 185, 185);" href="./login.php"><i style="margin-right: 5px;" class="far fa-comment-dots"></i>Tin nhắn</a></div>
                <div style="margin-top: 12px;margin-left: 20px;color: white;"><a style="font-size: 16px;text-decoration: none;color: white;" href="./login.php"><i style="margin-right: 5px;" class="fas fa-power-off"></i>Đăng xuất</a></div>
            </div>
        </div>
    </header>
    <section>
        <div class="main">
            <div class="body-left">
                <div class="body-left-list">
                    <ul class="body-left-list-ul">
                    <li ><a class="body-left-list-iteam" href="../Adminhome.php"><i class="fas fa-tachometer-alt body-left-list-iteam-icon"></i><b>Trang Chủ</b></a></li>
                        <li><a class="body-left-list-iteam" href="./Qlsanpham1.php"><i class="fas fa-table body-left-list-iteam-icon"></i><b>Sản Phẩm</b></a></li>
                        <li><a class="body-left-list-iteam" href="./Qlphukien.php"><i class="fas fa-shoe-prints body-left-list-iteam-icon"></i><b>Phụ kiện</b></a></li>
                        <li><a class="body-left-list-iteam" href="./Qlkhachhang.php"><i class="fa fa-users body-left-list-iteam-icon"></i><b>Khách hàng</b></a></li>
                        <li class="body-left-list-ul-li"><a class="body-left-list-iteam" href="./Qlhoadon.php"><i class="fa fa-shopping-cart body-left-list-iteam-icon"></i><b>Hóa đơn</b></a></li>
                        <li><a class="body-left-list-iteam" href="./Nguoidung.php"><i class="fas fa-user body-left-list-iteam-icon"></i></i><b>Người dùng</b></a></li>
                    </ul>
                </div>
            </div>
            <div class="body-right body-right-qlkh">
                <div class="container">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            QUẢN LÝ THÔNG TIN HÓA ĐƠN
                            <form method="POST">
                                <input type="text" name="s" class="form-control" style="margin-top: 15px; margin-bottom: 15px;" placeholder="Tìm kiếm...">
                            </form>
                            
                        </div>
                        
                        <div class="panel-body">
                            
                            <table class="table table-bordered">
                                <thead style="background-color: #343a40;">
                                    <tr>
                                        <th style="color: white;">STT</th>
                                        <th style="color: white;">Tên KH</th>
                                        <th style="color: white;">SĐT</th>
                                        <th style="color: white;">Gmail</th>
                                        <th style="color: white;">Địa chỉ</th>
                                        <th style="color: white;">Ghi chú</th>
                                        <th style="color: white;">Tổng tiền</th>
                                        <th style="color: white;">Thời gian</th>
                                        <th width="60px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    require_once '../Config.php';
                                    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
                                    $hoadon = mysqli_query($conn,"SELECT * FROM quanlyhoadon");
                                    if(!empty($hoadon)){
                                        $i = 1;
                                        while($row = mysqli_fetch_array($hoadon)){
                                            ?>
                                            <tr >
                                                <th style="font-weight: normal; font-size: 18px;"><?=$i++?></th>
                                                <th style="font-weight: normal; font-size: 18px;"><?=$row['tenkh'];?></th>
                                                <th style="font-weight: normal; font-size: 18px;"><?=$row['sdt'];?></th>
                                                <th style="font-weight: normal; font-size: 18px;"><?=$row['gmail'];?></th>
                                                <th style="font-weight: normal; font-size: 18px;"><?=$row['diachi'];?></th>
                                                <th style="font-weight: normal; font-size: 18px;"><?=$row['ghichu'];?></th>
                                                <th style="font-weight: normal; font-size: 18px;"><?=$row['tongtien'];?></th>
                                                <th style="font-weight: normal; font-size: 18px;"><?=date('H:i d/m/y', $row['thoigian'] )?></th>
                                                <th><a style="text-decoration: none;" href="Indon.php?id=<?=$row['id'];?>">In</a></th>
                                            </tr>
                                            <?php 
                                            
                                        }
                                    }else{

                                    }
                                ?>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>

            </div>
	
                
        </div>
    </section>
</body>
</html>
 