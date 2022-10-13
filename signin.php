<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="signin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Yame</title>
</head>
<style>
    #su{
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
    <a class="icon" href="http://localhost/Fanal1/signin.php"><span class="glyphicon glyphicon-user"></span></a>

</div>
<div id="wrapper">
    <form action="Collect.php" id="form-login">
        <h1 class="form-heading">Đăng Nhập</h1>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" placeholder="Số điện thoại">
        </div>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="password" type="password" class="form-control" name="password" placeholder="Mật khẩu" >
        </div>
        <div id="su">
            <input style="border-radius: 10px; width: 130px;height: 50px;font-family: Gill Sans;font-size:
20px" type="submit" name="submit" value="Đăng nhập" class="form-submit">
        </div>
        <div class="form-register">
            <ul>
                <li><a href=" http://localhost/Fanal1/signup.php" style="font-family: Gill Sans;font-size: 15px">Đăng ký tài khoản?</a></li>
            </ul>
        </div>
    </form>
</div>
</body>
</html>