<?php
require_once '../Config.php';
$conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
$sql_th = "SELECT * FROM thuonghieu";
$query_th = mysqli_query($conn, $sql_th);

if(isset($_POST['sbm'])){
    $masp = $_POST['masp'];
    $tensp = $_POST['tensp'];
	$thuonghieu = $_POST['thuonghieu'];
    $mota = $_POST['mota'];
	$soluong = $_POST['soluong'];
	$image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    
	$image1 = $_FILES['image1']['name'];
    $image_tmp = $_FILES['image1']['tmp_name'];
	
	$image2 = $_FILES['image2']['name'];
    $image_tmp = $_FILES['image2']['tmp_name'];
	
	$image3 = $_FILES['image3']['name'];
    $image_tmp = $_FILES['image3']['tmp_name'];
    $gia = $_POST['gia'];
    
   


   

    $sql = "INSERT INTO quanlysanpham(masp,tensp, th_id, mota, soluong, hinhanh,hinh1, hinh2, hinh3, gia) VALUES('$masp', '$tensp', '$thuonghieu', '$mota', '$soluong', '$image','$image1','$image2','$image3' ,'$gia')";

    $query = mysqli_query($conn, $sql);
    move_uploaded_file($image_tmp, '../public/IMG/Sanpham/Phukien'.$image);
	move_uploaded_file($image_tmp, '../public/IMG/Sanpham/Phukien'.$image1);
	move_uploaded_file($image_tmp, '../public/IMG/Sanpham/Phukien'.$image2);
	move_uploaded_file($image_tmp, '../public/IMG/Sanpham/Phukien'.$image3);
    // echo $sql;
    header('location: Qlsanpham1.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>QUẢN LÝ SẢN PHẨM</title>
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
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">QUẢN LÝ SẢN PHẨM</h2>
			</div>
			<div class="panel-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Mã sản phẩm:</label>
                    <input type="text" name="masp" class="form-control">
                </div>
                <div class="form-group">
                    <label>Tên sản phẩm:</label>
                    <input type="text" name="tensp" class="form-control">
                </div>
				<div class="form-group">
                    <label>Thương hiệu: </label>
                    <select class="form-control" name="thuonghieu">
                        <?php
                            while ($row_th = mysqli_fetch_assoc($query_th)) {?>
                                <option value="<?php echo $row_th['th_id']; ?>"><?php echo $row_th['tenthuonghieu']; ?></option>
                            <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Mô tả:</label>
                    <input type="text" name="mota" class="form-control">
                </div>
				<div class="form-group">
                    <label>Số lượng</label>
                    <input type="number" name="soluong" class="form-control">
                </div>
				<div class="form-group">
                    <label>Hình ảnh</label> <br>
                    <input type="file" name="image">
                </div>
				<div class="form-group">
                    <label>Hình ảnh 1:</label> <br>
                    <input type="file" name="image1">
                </div>
				<div class="form-group">
                    <label>Hình ảnh 2:</label> <br>
                    <input type="file" name="image2">
                </div>
				<div class="form-group">
                    <label>Hình ảnh 3:</label> <br>
                    <input type="file" name="image3">
                </div>
                <div class="form-group">
                    <label>Giá sản phẩm</label>
                    <input type="number" name="gia" class="form-control">
                </div>
                    <button name="sbm" class="btn btn-success">Thêm mới</button>
            </form>
			</div>
		</div>
	</div>
</body>
</html>