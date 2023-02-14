<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./public/font/fontawesome-free-5.15.2-web/css/all.min.css">
        <link rel="stylesheet" href="./public/css/login.css">
        <title>Login Form</title>
    </head>
    <body>
        
        <div class="container">
            <h1 class="title">THẾ GIỚI GIÀY SNEAKER</h1>
            <h1 class="title1">D2SHOES</h1>
            <form class="loginform" action="login_submit.php" method="POST">
                <h1 class="title2"><i class="fas fa-lock lockicon"></i>ĐĂNG NHẬP</h1>    
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
                        <td class="button" colspan="2">
                            <button class="btn" type="submit" name="submit">ĐĂNG NHẬP</button>
                            <button class="btn" type="reset"><a class="btn1" href="Register.php">ĐĂNG KÍ</a></button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>