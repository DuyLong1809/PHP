<?php
    require_once('../dbhelp.php');
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý khách hàng</title>
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
                        <li class="body-left-list-ul-li"><a class="body-left-list-iteam" href="./Qlkhachhang.php"><i class="fa fa-users body-left-list-iteam-icon"></i><b>Khách hàng</b></a></li>
                        <li><a class="body-left-list-iteam" href="./Qlhoadon.php"><i class="fa fa-shopping-cart body-left-list-iteam-icon"></i><b>Hóa đơn</b></a></li>
                        <li><a class="body-left-list-iteam" href="./Nguoidung.php"><i class="fas fa-user body-left-list-iteam-icon"></i></i><b>Người dùng</b></a></li>
                    </ul>
                </div>
            </div>
            <div class="body-right body-right-qlkh">
                <div class="container">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            QUẢN LÝ THÔNG TIN KHÁCH HÀNG
                            <form method="get">
                                <input type="text" name="s" class="form-control" style="margin-top: 15px; margin-bottom: 15px;" placeholder="Tìm kiếm...">
                            </form>
                            
                        </div>
                        
                        <div class="panel-body">
                            
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tài khoản</th>
                                        <th>Mật khẩu</th>
                                        <th>Họ & Tên</th>
                                        <th>Địa chỉ</th>
                                        <th>SĐT</th>
                                        <th>Gmail</th>
                                        <th width="60px"></th>
                                        <th width="60px"></th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
        $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    if (isset($_GET['s']) && $_GET['s'] != '') {
        $sql = 'select * from quanlykhachhang where hoten like "%'.$_GET['s'].'%" ';
        $query = mysqli_query($conn, $sql);
        
    } else {
        $sql = 'select * from quanlykhachhang';
    }
    $khachhanglist = executeResult($sql);
    $index = 1;
    foreach($khachhanglist as $std ){
        echo '<tr>
                <td>'.($index++).'</td>
                <td>'.$std['taikhoan'].'</td>
                <td>'.$std['matkhau'].'</td>
                <td>'.$std['hoten'].'</td>
                <td>'.$std['diachi'].'</td>
                <td>'.$std['sdt'].'</td>
                <td>'.$std['gmail'].'</td>
                <td><button class="btn btn-danger" onclick=\'window.open("Addkh.php?id='.$std['id'].'","_self")\'>Edit</button></td>
                <td><button class="btn btn-danger" onclick="deleteKhachhang('.$std['id'].')">Delete</button></td>
            </tr>';
    }
?>                           
                                </tbody>
                            </table>
                            <button class="btn btn-success" onclick="window.open('Addkh.php', '_self')">Thêm khách hàng</button>
                        </div>
                    </div>
                </div>

            </div>
	<script type="text/javascript">
		function deleteKhachhang(id) {
			option = confirm('Bạn có muốn xoá thông tin khách hàng này không')
			if(!option) {
				return;
			}

			console.log(id)
			$.post('Xoakh.php', {
				'id': id
			}, function(data) {
				alert(data)
				location.reload()
			})
		}
	</script>
                
        </div>
    </section>
</body>
</html>
 