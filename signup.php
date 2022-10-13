<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Yame</title>
</head>
<style>
        #submit{
            display: flex;
            justify-content: center;
        }
</style>
<body>

<div id="banner">
    <a href=""> <img  id="logo"  src="logo.png" alt=""></a>
    <a class="item" href="">Trang chủ</a>
    <a class="item" href="">Áo</a>
    <a class="item" href="">Quần</a>
    <a class="icon" href=""><span class="glyphicon glyphicon-shopping-cart"></span></a>
    <a class="icon" href="http://localhost/Fanal1/signin.php""><span class="glyphicon glyphicon-user"></span></a>

</div>
<div id="wrapper">
    <form action="reg.php" id="form-register" method="post">
        <span style="color: white;font-family: Gill Sans "><h3>Đăng Ký Tài Khoản</h3></span>
        <div class="form">
            <div class="form-dangky">
                <span style="color: white;font-family: 'Bell MT'">Họ và tên</span>
                <input type="text" name="fullname" id="fullname">
            </div>
            <div class="form-dangky">
                <span style="color: white;font-family: 'Bell MT'">Số điện thoại</span>
                <input type="text" name="phone" id="sdt">
            </div>
            <div class="form-dangky">
                <span style="color: white;font-family: 'Bell MT'">Mật khẩu</span>
                <input type="password" name="password" id="pass1">
            </div>
            <div class="form-dangky">
                <span style="color: white;font-family: 'Bell MT'">Nhập lại mật khẩu</span>
                <input type="password" name="returnpass" id="pass2">
            </div>
            <br>
            <div id="submit">
                <input style="background: transparent;background: rgba(69,66,66,0.08);box-shadow:0px 0px 20px 5px rgba(69,66,66,0.08);
                 color: white;border: 1px solid white;border-radius: 10px;font-family: Gill Sans ;
                 width: 130px;height: 50px;font-size: 20px;" type="submit" name="btn-reg" value="Đăng ký">
            </div>
        </div>
    </form>
</div>
</body>
</html>