<?php
require 'datab/connect.php';
if (isset($_POST['btn-reg'])){
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $returnpass = $_POST['returnpass'];

    if (!empty($fullname)&&!empty($phone)&&!empty($password)&&!empty($returnpass)) {
        $sql = " INSERT INTO `users` (`fullname`,`phone`,`password`,`returnpass`)VALUES('$fullname','$phone','$password','$returnpass')";
        if ($conn->query($sql) === TRUE) {
            header("Location: signin.php");
        } else {
            echo "Lỗi {$sql}" . $conn->error;
        }

    }
}

?>
