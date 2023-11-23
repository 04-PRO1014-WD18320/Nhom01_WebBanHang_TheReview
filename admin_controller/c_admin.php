<?php 
include "c_hoi_thoai.php";
include "c_tin_nhan.php";
class C_admin{
    function hienthimanhinh(){

        $hoi_thoai = (new C_hoi_thoai())->hien_thi_hoi_thoai();
        $tin_nhan = (new C_tin_nhan())->hien_thi_tin_nhan();
        include("admin_view/index.php");
    }
}