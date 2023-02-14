<?php
require_once '../Config.php';
$conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
$sql_loai = "SELECT * FROM loaipk";
$query_loai = mysqli_query($conn, $sql_loai);

if(isset($_POST['sbm'])){
    $mapk = $_POST['mapk'];
    $tenpk = $_POST['tenpk'];
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $mota = $_POST['mota'];
    $gia = $_POST['gia'];
    $soluong = $_POST['soluong'];
    $loai = $_POST['loai'];


   

    $sql = "INSERT INTO quanlyphukien(mapk,tenpk, hinhanhpk, mota, gia, soluong, loai_id) VALUES('$mapk', '$tenpk', '$image', '$mota', '$gia', '$soluong', '$loai')";

    $query = mysqli_query($conn, $sql);
    move_uploaded_file($image_tmp, '../public/IMG/Sanpham/Phukien'.$image);
    // echo $sql;
    header('location: Qlphukien.php');
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
				<h2 class="text-center">QUẢN LÝ PHỤ KIỆN</h2>
			</div>
			<div class="panel-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Mã phụ kiện:</label>
                    <input type="text" name="mapk" class="form-control">
                </div>
                <div class="form-group">
                    <label>Tên phụ kiện:</label>
                    <input type="text" name="tenpk" class="form-control">
                </div>

                <div class="form-group">
                    <label>Hình ảnh</label> <br>
                    <input type="file" name="image">
                </div>

                <div class="form-group">
                    <label>Mô tả:</label>
                    <input type="text" name="mota" class="form-control">
                </div>

                <div class="form-group">
                    <label>Giá sản phẩm</label>
                    <input type="number" name="gia" class="form-control">
                </div>

                <div class="form-group">
                    <label>Số lượng</label>
                    <input type="number" name="soluong" class="form-control">
                </div>

                <div class="form-group">
                    <label>Loại: </label>
                    <select class="form-control" name="loai">
                        <?php
                            while ($row_loai = mysqli_fetch_assoc($query_loai)) {?>
                                <option value="<?php echo $row_loai['loai_id']; ?>"><?php echo $row_loai['tenloai']; ?></option>
                            <?php } ?>
                    </select>
                </div>
                    <button name="sbm" class="btn btn-success">Thêm mới</button>
            </form>
			</div>
		</div>
	</div>
</body>
</html>