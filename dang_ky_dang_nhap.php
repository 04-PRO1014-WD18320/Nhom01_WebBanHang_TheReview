<?php
include "controller/c_dang_ky_dang_nhap.php";
$c_dang_ky_dang_nhap = new C_dang_ky_dang_nhap();


if ($_POST['action'] == "dang_nhap") {
    $c_dang_ky_dang_nhap->dang_nhap_tk($_POST);
    // var_dump($_POST);
    return;
}

if ($_POST['action'] == "dang_ky") {
    $c_dang_ky_dang_nhap->dang_ky($_POST);
    return;
}
if ($_POST['action2'] == "dang_ky") {
    if (!isset($_POST['ho_ten']) || $_POST['ho_ten'] == null) {
        $error['dang_ky']['ho_ten'] = "Chưa nhập tên";
    }
    if (!isset($_POST['email']) || $_POST['email'] == null) {
        $error['dang_ky']['email'] = "Chưa nhập email";
    }
    if (!isset($_FILES['hinh']) || $_FILES['hinh']['size'] <= 0) {
        $error['dang_ky']['hinh'] = "Chưa nhập ảnh";
    }
    if (!isset($_POST['mat_khau']) || $_POST['mat_khau'] == null) {
        $error['dang_ky']['mat_khau'] = "Chưa nhập mật khẩu";
    }
    if (!isset($_POST['re-password']) || $_POST['re-password'] == null) {
        $error['dang_ky']['re-password'] = "Chưa nhập lại mật khẩu";
    }
    if (isset($error)) {
        $c_dang_ky_dang_nhap->dang_ky($error);
        // foreach ($error['dang_ky'] as $value) {
        //     echo "$value" . "<br/>";
        // }
    } else {
        $c_dang_ky_dang_nhap->dang_ky_tk($_POST);
        $c_dang_ky_dang_nhap->hienthidangnhap();
    }

    return;
}
if ($_POST['action2'] == "submit_forgot") {
    $c_dang_ky_dang_nhap->kiem_tra_tk($_POST['username']);
    return;
}
if ($_POST['action2'] == "change_pass") {
    $c_dang_ky_dang_nhap->change_pass($_POST);
    return;
}
if ($_POST['action'] == "quen_mat_khau") {
    $c_dang_ky_dang_nhap->quenmatkhau();
    return;
}
if ($_GET['email']) {
    $c_dang_ky_dang_nhap->doi_mat_khau($_GET['email']);
    return;
}


$c_dang_ky_dang_nhap->hienthidangnhap();
