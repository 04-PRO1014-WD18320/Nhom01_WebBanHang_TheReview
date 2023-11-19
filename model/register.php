<?php
    
    if ($_POST['password'] === $_POST['re-password']) {
        $r_username = $_POST['username'];
        $r_password = sha1($_POST['password']);
        $r_name = $_POST['name'];
        $r_email = $_POST['email'];
        $r_phone = $_POST['phone'];
        
        print_r("<script>alert('Đăng ký tài khoản thành công')</script>");
        header("Location:login.php");
    }
