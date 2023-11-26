<?php
include "controller/c_dang_ky_dang_nhap.php";
$c_dang_ky_dang_nhap = new C_dang_ky_dang_nhap();


if ($_POST['action'] == "dang_nhap") {
    $c_dang_ky_dang_nhap->dang_nhap_tk($_POST);
    // var_dump($_POST);
    if (!isset($_POST['tai_khoan']) || $_POST['tai_khoan'] == null) {
        $error['dang_nhap']['tai_khoan'] = "Chưa nhập taì khoản";
    }
    if (!isset($_POST['mat_khau']) || $_POST['mat_khau'] == null) {
        $error['dang_nhap']['mat_khau'] = "Chưa nhập mật khẩu";
    }
    if (isset($error)) {
        $c_dang_ky_dang_nhap->dang_nhap_tk($error);
    } else {
        $c_dang_ky_dang_nhap->dang_ky_tk($_POST);
        $c_dang_ky_dang_nhap->hienthidangnhap();
    }
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
    if (!isset($_POST['username']) || $_POST['username'] == null) {
        $error['quen_mat_khau']['username'] = "Chưa nhập tài khoản ";
    }
    if (isset($error)) {
        $c_dang_ky_dang_nhap->quenmatkhau($error['quen_mat_khau']);
    } else {
        $c_dang_ky_dang_nhap->kiem_tra_tk($_POST['username']);
    }
    return;
}
if ($_POST['action2'] == "change_pass") {
   
    if (!isset($_POST['email']) || $_POST['email'] == null) {
        $error['doi_mat_khau']['email'] = "Chưa nhập email";
    }
    if (!isset($_POST['mat_khau']) || $_POST['mat_khau'] == null) {
        $error['doi_mat_khau']['mat_khau'] = "Chưa nhập mật khẩu";
    }
    if (!isset($_POST['re-password']) || $_POST['re-password'] == null) {
        $error['doi_mat_khau']['re-password'] = "Chưa nhập lại mật khẩu";
    }
    if (isset($error)) {
        $c_dang_ky_dang_nhap->doi_mat_khau($error);
    } else {
        $c_dang_ky_dang_nhap->change_pass($_POST);
    }
    return;
}
if ($_POST['action'] == "quen_mat_khau") {
    $c_dang_ky_dang_nhap->quenmatkhau($_POST);
    $c_dang_ky_dang_nhap->hienthidangnhap();
    return;
}
if ($_GET['email']) {
    $c_dang_ky_dang_nhap->doi_mat_khau($_GET['email']);
    return;
}


$c_dang_ky_dang_nhap->hienthidangnhap();
