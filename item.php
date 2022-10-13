<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="item.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Yame</title>
</head>
<body>

<div id="banner">
    <a href=""> <img  id="logo"  src="logo.png" alt=""></a>
    <a class="item" href="">Trang chủ</a>
    <a class="item" href="">Áo</a>
    <a class="item" href="">Quần</a>
    <a class="icon" href=""><span class="glyphicon glyphicon-shopping-cart"></span></a>
    <a class="icon" href="http://127.0.0.1:5500/form-login/index.html"><span class="glyphicon glyphicon-user"></span></a>

</div>
<div id="warpper">
    <form action="" id="form-money">
        <div class="form">
            <div><h1>Người mua/nhận hàng</h1></div>
            <div class="form-giohang">
                <label>Tên:</label>
                <input type="text" id="name" placeholder="Tên người nhận">
            </div>

            <div class="form-giohang">
                <lable>Điện thoại liên lạc:</lable>
                <input type="text" id="number" placeholder="Số điện thoại" >
            </div>
            <div class="form-giohang">
                <label>Địa chỉ:</label>
                <input type="text" id="adress" placeholder="Địa chỉ nhận hàng" >
            </div>

            <div class="form-giohang1">
                <label>Ghi chú</label>
                <textarea row="2" class="form-control" id="txtNote" name="txtNote"></textarea>
            </div>
            <div class="button-input">
                <input name="ite" type="button" value="Đặt hàng" class="form-submit1">
            </div>
            <hr>
            <div class="button-input">
                <input type="button" value="Cần sản phẩm khác?Tiếp tục mua hàng" class="form-submit2">
            </div>
        </div>
    </form>
</div>
</body>
</html
