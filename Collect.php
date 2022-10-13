<?php
$db = mysqli_connect("localhost","root","Blackk29103","unitop-signup");
if(isset($_POST['submit'])){
    $ph = $_POST['phone'];
    $pass = $_POST['password'];
    $sql = "Select * from users where phone='$ph' and password='$pass'";
    $rs =mysqli_query($db,$sql);
//     if ($ph == $_POST['phone'] && $pass == $_POST['password']){
//         header('Location: index.html');
//     }
    if(mysqli_num_rows($rs)===1){
        header("location: index.html");
    }else {
        echo "<h2>Thất Bại</h2>";
    }
}
?>
