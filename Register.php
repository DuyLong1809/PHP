<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/font/fontawesome-free-5.15.2-web/css/all.min.css">
    <link rel="stylesheet" href="./public/css/register.css">
    <title>REGISTER FORM</title>
</head>
<body>
    <div class="container">
        <h1 class="title">THẾ GIỚI GIÀY SNEAKER</h1>
        <h1 class="title1">D2SHOES</h1>
        <form class="loginform" action="register_submit.php" method="POST">
                <h3 class="title2">ĐĂNG KÍ</h3>
                <table class="table">
                    <tr>
                        <td class="name">USERNAME</td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td class="name">PASSWORD</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td class="name">REPASSWORD</td>
                        <td><input type="password" name="repassword"></td>
                    </tr>
                    <tr>
                        <td class="name">FULLNAME</td>
                        <td><input type="text" name="fullname"></td>
                    </tr>
                    <tr>
                        <td class="name">EMAIL</td>
                        <td><input type="text" name="email"></td>
                    </tr>
                    <tr>
                        <td class="name">SĐT</td>
                        <td><input type="text" name="sdt"></td>
                    </tr>
                    <tr>
                        <td class="button" colspan="2">
                            <button class="btn" type="submit" name="submit">ĐĂNG KÍ</button>
                            <button class="btn" type="reset"><a class="btn1" href="./login.php">TRỞ LẠI</a></button>
                        </td>
                    </tr>
                </table>
        </form>
    </div>
</body>
</html>