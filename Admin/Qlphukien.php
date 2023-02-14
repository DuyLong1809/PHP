<?php
    require_once('../Config.php');
    require_once('../dbhelp.php');
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    if(isset($_POST['sbm']) && !empty($_POST['search'])){
        $search = $_POST['search'];
        $sql = "SELECT * FROM quanlyphukien INNER JOIN loaipk ON quanlyphukien.loai_id = loaipk.loai_id WHERE tenpk LIKE '%$search%'";
        $query = mysqli_query($conn, $sql);
        $total_prd = mysqli_num_rows($query);
    }else{
        $sql = "SELECT * FROM quanlyphukien inner join loaipk on quanlyphukien.loai_id = loaipk.loai_id";
        $query = mysqli_query($conn, $sql);
    }

    if(isset($_POST['all_prd'])){
        unset($_POST['sbm']);
    }
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
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
                        <li class="body-left-list-ul-li"><a class="body-left-list-iteam" href="./Qlphukien.php"><i class="fas fa-shoe-prints body-left-list-iteam-icon"></i><b>Phụ kiện</b></a></li>
                        <li ><a class="body-left-list-iteam" href="./Qlkhachhang.php"><i class="fa fa-users body-left-list-iteam-icon"></i><b>Khách hàng</b></a></li>
                        <li><a class="body-left-list-iteam" href="./Qlhoadon.php"><i class="fa fa-shopping-cart body-left-list-iteam-icon"></i><b>Hóa đơn</b></a></li>
                        <li><a class="body-left-list-iteam" href="./Nguoidung.php"><i class="fas fa-user body-left-list-iteam-icon"></i></i><b>Người dùng</b></a></li>
                    </ul>
                </div>
            </div>
            <div class="body-right body-right-qlkh">
            <div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2>Danh sách phụ kiện</h2>
            <form style="display: flex;" method="POST" class="d-flex" action="">
                <input name="search" type="search" class="form-control" placeholder="Tìm kiếm...">
                <button style="width: 200px; height: 40px;" name="sbm" class="btn btn-success">Tìm kiếm</button>
            </form>
        </div>
        <button style="width: 200px;margin-left: 800px;margin-top: 20px;" class="btn btn-success" onclick="window.open('Addpk.php', '_self')">Thêm phụ kiện</button>
        <div class="card-body">
            <?php
                if(isset($total_prd)){
                    if($total_prd !==0){
                        echo "<p class='text-success'>Tìm thấy $total_prd sản phẩm</p>";
                    }else{
                        echo "<p class='text-danger'> Không tìm thấy sản phẩm nào! </p>";
                    }
                }
            ?>
            <table class="table bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Mã phụ kiện</th>
                        <th>Tên phụ kiên</th>
                        <th>Ảnh phụ kiện</th>
                        <th>Mô tả</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Loại</th>
                        <th width="12%">Hành động</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($query)) {?>
                            <tr>
                                <td><?php echo $i++; ?></th>
                                <td><?php echo $row['mapk']; ?></td>
                                <td><?php echo $row['tenpk']; ?></td>
                                <td>
                                    <img src="../public/IMG/Sanpham/Phukien/<?php echo $row['hinhanhpk']; ?>" width="100px">
                                
                                </td>

                                <td><?php echo $row['mota']; ?></td>
                                <td><?php echo $row['gia']; ?></td>
                                <td><?php echo $row['soluong']; ?></td>
                                <td><?php echo $row['tenloai']; ?></td>
                                <td style="display: flex;">
                                    <a style="margin-right: 10px;" class="btn btn-warning" href="phukienindex.php?page_layout=sua&id=<?php echo $row['pk_id']; ?>">Sửa</a>

                                    <a onclick="return Del('<?php  echo $row['tenpk'];?>')" class="btn btn-danger" href="phukienindex.php?page_layout=xoa&id=<?php echo $row['pk_id']; ?>">Xóa</a>
                                </td>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="card-footer d-flex justify-content-between">
        <button class="btn btn-success" onclick="window.open('Addpk.php', '_self')">Thêm phụ kiện</button>

            <?php
                if(isset($_POST['sbm']) && !empty($_POST['search'])){?>
                    <form method="POST" action="">
                        <button name="all_prd" class='btn btn-success text-light'>Tất cả sản phẩm</button>
                    </form>
                <?php } ?>
        </div>
    </div>
</div>


            </div>
            <script>
    function Del(name){
        return confirm("Bạn có chắc chắn muốn xóa: " + name + " ?");
    }
    </script>
                
        </div>
    </section>
</body>
</html>
 