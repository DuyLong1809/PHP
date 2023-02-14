<?php
require_once '../Config.php';
$conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    $id = $_GET['id'];

    

    $sql_up = "SELECT * FROM users WHERE id = $id";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if(isset($_POST['sbm'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $sql = "UPDATE users SET username = '$username',password = '$password', fullname = '$fullname', email = '$email', sdt = '$sdt' WHERE id = $id";

        $query = mysqli_query($conn, $sql);
        // echo $sql;
        header('location: Nguoidung.php');
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Quản lý người dúng</title>
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
				<h2 class="text-center">QUẢN LÝ NGƯỜI DÚNG</h2>
			</div>
			<div class="panel-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $row_up['username']; ?>">
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="text" name="password" class="form-control" value="<?php echo $row_up['password']; ?>">
                </div>

                <div class="form-group">
                    <label>Fullname:</label> <br>
                    <input type="text" name="fullname" class="form-control" value="<?php echo $row_up['fullname']; ?>">
                </div>

                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $row_up['email']; ?>">
                </div>

                <div class="form-group">
                    <label>SĐT: </label>
                    <input type="number" name="sdt" class="form-control" value="<?php echo $row_up['sdt']; ?>">
                </div>

                    <button name="sbm" class="btn btn-success">Sửa</button>
            </form>
			</div>
		</div>
	</div>
</body>
</html>