<?php
require_once '../Config.php';
$conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    $id = $_GET['id'];

    $sql_th = "SELECT * FROM thuonghieu";
    $query_th = mysqli_query($conn, $sql_th);

    $sql_up = "SELECT * FROM quanlysanpham WHERE sp_id = $id";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if(isset($_POST['sbm'])){
        $masp = $_POST['masp'];
        $tensp = $_POST['tensp'];
		$thuonghieu = $_POST['th'];
		$mota = $_POST['mota'];
		$soluong = $_POST['soluong'];
        $image_tmp = $_FILES['image']['tmp_name'];
		$image_tmp = $_FILES['image1']['tmp_name'];
		$image_tmp = $_FILES['image2']['tmp_name'];
		$image_tmp = $_FILES['image3']['tmp_name'];
        if($_FILES['image']['name'] == ""){
            $image = $row_up['hinhanh'];
        }else{
            $image = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($image_tmp, '../public/IMG/Sanpham/Phukien'.$image);
        }

		if($_FILES['image1']['name'] == ""){
            $image1 = $row_up['hinh1'];
        }else{
            $image1 = $_FILES['image1']['name'];
            $image_tmp = $_FILES['image1']['tmp_name'];
            move_uploaded_file($image_tmp, '../public/IMG/Sanpham/Phukien'.$image1);
        }

		if($_FILES['image2']['name'] == ""){
            $image2 = $row_up['hinh2'];
        }else{
            $image2 = $_FILES['image2']['name'];
            $image_tmp = $_FILES['image2']['tmp_name'];
            move_uploaded_file($image_tmp, '../public/IMG/Sanpham/Phukien'.$image2);
        }
		if($_FILES['image3']['name'] == ""){
            $image3 = $row_up['hinh3'];
        }else{
            $image3 = $_FILES['image3']['name'];
            $image_tmp = $_FILES['image3']['tmp_name'];
            move_uploaded_file($image_tmp, '../public/IMG/Sanpham/Phukien'.$image3);
        }
        $gia = $_POST['gia'];
        $sql = "UPDATE quanlysanpham SET masp = '$masp',tensp = '$tensp', th_id = '$thuonghieu', mota = '$mota', soluong = '$soluong',hinhanh = '$image',hinh1 = '$image1',hinh2 = '$image2',hinh3 = '$image3' ,gia = '$gia' WHERE sp_id = $id";

        $query = mysqli_query($conn, $sql);
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
				<h2 class="text-center">QUẢN LÝ SÁN PHẨM</h2>
			</div>
			<div class="panel-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Mã sản phẩm:</label>
                    <input type="text" name="masp" class="form-control" value="<?php echo $row_up['masp']; ?>">
                </div>
                <div class="form-group">
                    <label>Tên sản phẩm:</label>
                    <input type="text" name="tensp" class="form-control" value="<?php echo $row_up['tensp']; ?>">
                </div>
				<div class="form-group">
                    <label>Thương hiệu: </label>
                    <select class="form-control" name="th">
                        <?php
                            while ($row_brand = mysqli_fetch_assoc($query_th)) {?>
                                <option <?php if($row_brand['th_id'] == $row_up['th_id']){ echo "selected"; }  ?> value="<?php echo $row_brand['th_id']; ?>"><?php echo $row_brand['tenthuonghieu']; ?></option>
                            <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Mô tả:</label>
                    <input type="text" name="mota" class="form-control" value="<?php echo $row_up['mota']; ?>">
                </div>
				<div class="form-group">
                    <label>Số lượng</label>
                    <input type="number" name="soluong" class="form-control" value="<?php echo $row_up['soluong']; ?>">
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
                    <input type="number" name="gia" class="form-control" value="<?php echo $row_up['gia']; ?>">
                </div>
                    <button name="sbm" class="btn btn-success">Sửa</button>
            </form>
			</div>
		</div>
	</div>
</body>
</html>