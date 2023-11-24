<?php
include "controller/c_sua_tai_khoan.php";
$c_sua_tk = new C_sua_tai_khoan();
if ($_POST['action'] == "update") {
    if (!isset($_POST['email']) || $_POST['email'] == null) {
        $error['sua_tai_khoan']['email'] = "Chưa nhập email";
    }
    if (!isset($_POST['ho_ten']) || $_POST['ho_ten'] == null) {
        $error['sua_tai_khoan']['ho_ten'] = "Chưa nhập tên";
    }
    if (!isset($_FILES['hinh']) || $_FILES['hinh']['size'] <= 0) {
        $error['sua_tai_khoan']['hinh'] = "Chưa nhập ảnh";
    }
    if (!isset($_POST['mat_khau']) || $_POST['mat_khau'] == null) {
        $error['sua_tai_khoan']['mat_khau'] = "Chưa nhập mật khẩu";
    }
    if (isset($error)) {
        $c_sua_tk->hienthisuataikhoan($error['sua_tai_khoan']);
    }else{
        header("location:khach_hang.php");
    }
    return;
}
$c_sua_tk->hienthisuataikhoan($c_sua_tk);

