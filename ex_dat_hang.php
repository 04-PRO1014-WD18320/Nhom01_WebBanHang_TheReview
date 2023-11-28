<?php
include_once 'model/database.php';
function submitDatHang($ten_hang_hoa,
$gia_tien,
$so_luong,
$tong_gia,
$ten_khach_hang,
$email_khach_hang,
$xa,
$huyen,
$tinh,
$sdt){

    $query = "INSERT INTO `don_hang`(`ten_hang_hoa`, `gia_tien`, `so_luong`, `tong_gia`, 
    `ten_khach_hang`, `email_khach_hang`, `xa`, `huyen`, `tinh`, `sdt`, `trang_thai`)
     VALUES (?,?,?,?,?,?,?,?,?,?,1);";
    (new database())->pdo_execute(
        $query,
        $ten_hang_hoa,
        $gia_tien,
        $so_luong,
        $tong_gia,
        $ten_khach_hang,
        $email_khach_hang,
        $xa,
        $huyen,
        $tinh,
        $sdt,
    );
}

