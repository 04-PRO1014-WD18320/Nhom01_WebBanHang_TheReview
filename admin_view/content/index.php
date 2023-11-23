<?php
    switch($_GET['act']){
        case 'hang_hoa':
            require("admin_hang_hoa.php");
            break;
        case 'don_hang':
            require("admin_don_hang.php");
            break;
        case 'binh_luan':
            require("admin_binh_luan.php");
            break;
        case 'tin_nhan':
            require("admin_tin_nhan.php");
            break;
        case 'tin_tuc':
            require("admin_tin_tuc.php");
            break;
        default:
            require("admin_hang_hoa.php");
            break;
    }
