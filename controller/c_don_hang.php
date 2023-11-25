<?php
include_once "model/m_don_hang.php";

class C_don_hang{

    function them_don_hang($ten_hang_hoa, $gia_tien, $so_luong, $tong_gia,
    $ten_khach_hang, $email_khach_hang, $xa, $huyen,$tinh, $sdt, $trang_thai){
        $m_don_hang = new M_don_hang();
        $m_don_hang->them_don_hang($ten_hang_hoa, $gia_tien, $so_luong, $tong_gia,
        $ten_khach_hang, $email_khach_hang, $xa, $huyen,$tinh, $sdt, $trang_thai);
    }
    function hien_thi_don_hang(){
        $m_don_hang = new M_don_hang();
        return $m_don_hang->get_all_don_hang();
    }

    function cap_nhat_trang_thai($don_hang){
        $m_don_hang = new M_don_hang();
        return $m_don_hang->cap_nhat_trang_thai_don_hang($don_hang['trang_thai'], $don_hang['id_don_hang']);
    }
}