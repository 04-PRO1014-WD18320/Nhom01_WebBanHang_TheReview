<?php

include_once "controller/c_trang_chu.php";
include_once "controller/c_nav.php";
$c_trang_chu = new C_trang_chu();
$c_nav = new C_nav();
if (isset($_GET['ma_hang_hoa'])) {
    $ma_hang_hoa = $_GET['ma_hang_hoa'];
    $ma_loai = $_GET['ma_loai'];
    $c_trang_chu->chi_tiet_san_pham($ma_hang_hoa, $ma_loai);
    return;
}
if (isset($_GET['ma_loai'])) {
    $ma_loai = $_GET['ma_loai'];
    $c_trang_chu->hienthiloai($ma_loai);
    return;
}

// if(isset($_SESSION['id'])){
//     $c_nav->hienThiSoLuong($_SESSION['id']);
//     return;
// }

$c_trang_chu->hienthimanhinh();
