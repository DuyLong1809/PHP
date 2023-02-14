<?php
require_once '../Config.php';
$conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    $id = $_GET['id'];

    $sql_loaipk = "SELECT * FROM loaipk";
    $query_loaipk = mysqli_query($conn, $sql_loaipk);

    $sql_up = "SELECT * FROM quanlyphukien WHERE pk_id = $id";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if(isset($_POST['sbm'])){
        $mapk = $_POST['mapk'];
        $tenpk = $_POST['tenpk'];
        $image_tmp = $_FILES['image']['tmp_name'];

        if($_FILES['image']['name'] == ""){
            $image = $row_up['hinhanhpk'];
        }else{
            $image = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($image_tmp, '../public/IMG/Sanpham/Phukien'.$image);
        }


        $mota = $_POST['mota'];
        $gia = $_POST['gia'];
        $soluong = $_POST['soluong'];
        $loai = $_POST['loai'];

        $sql = "UPDATE quanlyphukien SET mapk = '$mapk',tenpk = '$tenpk', hinhanhpk = '$image', mota = '$mota', gia = '$gia', soluong = '$soluong', loai_id = '$loai' WHERE pk_id = $id";

        $query = mysqli_query($conn, $sql);
        // echo $sql;
        header('location: Qlphukien.php');
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>QUẢN LÝ PHỤ KIỆN</title>
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
                    <input type="text" name="mapk" class="form-control" value="<?php echo $row_up['mapk']; ?>">
                </div>
                <div class="form-group">
                    <label>Tên phụ kiện:</label>
                    <input type="text" name="tenpk" class="form-control" value="<?php echo $row_up['tenpk']; ?>">
                </div>

                <div class="form-group">
                    <label>Hình ảnh</label> <br>
                    <input type="file" name="image">
                </div>

                <div class="form-group">
                    <label>Mô tả:</label>
                    <input type="text" name="mota" class="form-control" value="<?php echo $row_up['mota']; ?>">
                </div>

                <div class="form-group">
                    <label>Giá sản phẩm</label>
                    <input type="number" name="gia" class="form-control" value="<?php echo $row_up['gia']; ?>">
                </div>

                <div class="form-group">
                    <label>Số lượng</label>
                    <input type="number" name="soluong" class="form-control" value="<?php echo $row_up['soluong']; ?>">
                </div>

                <div class="form-group">
                    <label>Loại: </label>
                    <select class="form-control" name="loai">
                        <?php
                            while ($row_brand = mysqli_fetch_assoc($query_loaipk)) {?>
                                <option <?php if($row_brand['loai_id'] == $row_up['loai_id']){ echo "selected"; }  ?> value="<?php echo $row_brand['loai_id']; ?>"><?php echo $row_brand['tenloai']; ?></option>
                            <?php } ?>
                    </select>
                </div>
                    <button name="sbm" class="btn btn-success">Sửa</button>
            </form>
			</div>
		</div>
	</div>
</body>
</html>