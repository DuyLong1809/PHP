<?php
require_once ('../dbhelp.php');

$s_taikhoan = $s_matkhau = $s_hoten = $s_diachi = $s_sdt = $s_gmail = '';

if (!empty($_POST)) {
	$s_id = '';

	if (isset($_POST['taikhoan'])) {
		$s_taikhoan = $_POST['taikhoan'];
	}

	if(isset($_POST['matkhau'])){
		$s_matkhau = $_POST['matkhau'];
	}

	if (isset($_POST['hoten'])) {
		$s_hoten = $_POST['hoten'];
	}

	if (isset($_POST['diachi'])) {
		$s_diachi = $_POST['diachi'];
	}
	if (isset($_POST['sdt'])) {
		$s_sdt = $_POST['sdt'];
	}
	if (isset($_POST['gmail'])) {
		$s_gmail = $_POST['gmail'];
	}

	if (isset($_POST['id'])) {
		$s_id = $_POST['id'];
	}

	$s_taikhoan = str_replace('\'', '\\\'', $s_taikhoan);
	$s_matkhau = str_replace('\'', '\\\'', $s_matkhau);
	$s_hoten      = str_replace('\'', '\\\'', $s_hoten);
	$s_diachi  = str_replace('\'', '\\\'', $s_diachi);
	$s_sdt  = str_replace('\'', '\\\'', $s_sdt);
	$s_gmail  = str_replace('\'', '\\\'', $s_gmail);
	$s_id       = str_replace('\'', '\\\'', $s_id);

	if ($s_id != '') {
		//update
		$sql = "update quanlykhachhang set taikhoan = '$s_taikhoan', matkhau = '$s_matkhau', hoten = '$s_hoten', diachi = '$s_diachi', sdt = '$s_sdt', gmail = '$s_gmail' where id = " .$s_id;
	} else {
		//insert
		$sql = "insert into quanlykhachhang(taikhoan, matkhau, hoten,diachi, sdt, gmail) value ('$s_taikhoan', '$s_matkhau', '$s_hoten','$s_diachi', '$s_sdt', '$s_gmail')";
	}

	// echo $sql;

	execute($sql);

	header('Location: Qlkhachhang.php');
	die();
}

$id = '';
if (isset($_GET['id'])) {
	$id          = $_GET['id'];
	$sql         = 'select * from quanlykhachhang where id = '.$id;
	$khachhanglist = executeResult($sql);
	if ($khachhanglist != null && count($khachhanglist) > 0) {
		$std        = $khachhanglist[0];
		$s_taikhoan = $std['taikhoan'];
		$s_matkhau = $std['matkhau'];
		$s_hoten      = $std['hoten'];
		$s_diachi  = $std['diachi'];
		$s_sdt  = $std['sdt'];
		$s_gmail  = $std['gmail'];
	} else {
		$id = '';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>QUẢN LÝ KHÁCH HÀNG</title>
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
				<h2 class="text-center">QUẢN LÝ KHÁCH HÀNG</h2>
			</div>
			<div class="panel-body">
				<form method="post">
				<form method="post">
					<div class="form-group">
					  <label for="usr">Tài khoản:</label>
					  <input type="number" name="id" value="<?=$id?>" style="display: none;">
					  <input required="true" type="text" class="form-control" id="usr" name="taikhoan" value="<?=$s_taikhoan?>">
					</div>
					<div class="form-group">
					  <label for="matkhau">Mật khẩu:</label>
					  <input type="password" class="form-control" id="matkhau" name="matkhau" value="<?=$s_matkhau?>">
					</div>
					<div class="form-group">
					  <label for="hoten">Họ tên:</label>
					  <input type="text" class="form-control" id="hoten" name="hoten" value="<?=$s_hoten?>">
					</div>
					<div class="form-group">
					  <label for="diachi">Địa chỉ:</label>
					  <input type="text" class="form-control" id="diachi" name="diachi" value="<?=$s_diachi?>">
					</div>
					<div class="form-group">
					  <label for="sdt">SĐT:</label>
					  <input type="number" class="form-control" id="sdt" name="sdt" value="<?=$s_sdt?>">
					</div>
					<div class="form-group">
					  <label for="gmail">Gmail:</label>
					  <input type="text" class="form-control" id="gmail" name="gmail" value="<?=$s_gmail?>">
					</div>

					<button class="btn btn-success">Save</button>
				</form>
				</form>
			</div>
		</div>
	</div>
</body>
</html>