<?php
include_once("model/m_gio_hang.php");
include_once("model/m_loai_hang.php");
class C_nav{

    function hienThiSoLuong($ma_khach_hang){
        $so_luong = (new M_gio_hang())->dem_so_luong_gio_hang($ma_khach_hang); 
        
        include_once("view_site/layout/header/index.php");
    }
    
    function hienThiLoaiHang(){
        $loaiHang = (new M_loai_hang())->loai_selectall();
        return $loaiHang;
    }
}