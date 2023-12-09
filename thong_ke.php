<?php
include "controller/c_thong_ke.php";
$c_thong_ke = new C_thong_ke();

if (isset($_POST['action'])) {
    $c_thong_ke->xem_thong_ke();
    return;
}else{
    $c_thong_ke->hienthimanhinh();
    return;
}

