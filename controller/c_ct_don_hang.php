<?php
include("model/m_ct_don_hang.php");
class C_ct_don_hang {

    function getAllCT( $id ) {
        $ctDh = (new M_ct_don_hang())->get_all_by_id( $id );
        return $ctDh;
    }
}