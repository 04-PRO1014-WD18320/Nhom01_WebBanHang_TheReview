<?php

include_once "database.php";

class M_don_hang extends database{

    function get_all_don_hang(){
        $query = "SELECT * FROM `don_hang`";
        return $this->pdo_query( $query );
    }

    function get_all_don_by_name($name){
        $query = "SELECT * FROM `don_hang` where `ten_khach_hang` LIKE '%$name%'";
        return $this->pdo_query( $query );
    }

    function them_don_hang(
    $ten_hang_hoa, $gia_tien, $so_luong, $tong_gia,
    $ten_khach_hang, $email_khach_hang, $xa, $huyen,$tinh, $sdt, $trang_thai){
        $query = "INSERT INTO `don_hang`(`ten_hang_hoa`, `gia_tien`, `so_luong`, `tong_gia`, 
        `ten_khach_hang`, `email_khach_hang`, `xa`, `huyen`, `tinh`, `sdt`, `trang_thai`)
         VALUES (?,?,?,?,?,?,?,?,?,?,?);";
       
        return $this->pdo_execute( $query, $ten_hang_hoa, $gia_tien, $so_luong, $tong_gia,
        $ten_khach_hang, $email_khach_hang, $xa, $huyen,$tinh, $sdt, $trang_thai);
    }

    function cap_nhat_trang_thai_don_hang($trang_thai, $id_don_hang){
        $query = 'UPDATE `don_hang` SET `trang_thai`= '.$trang_thai.' WHERE `id_don_hang` = '.$id_don_hang;

        return $this->pdo_execute( $query );
    }

    function xoa_don_hang($id_don_hang){
        $query = "DELETE FROM don_hang WHERE 'id_don_hang' = ".$id_don_hang;
        return $this->pdo_execute( $query );
    }
}