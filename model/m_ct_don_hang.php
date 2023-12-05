<?php
include_once("database.php");

class M_ct_don_hang extends database{
    function get_all_by_id($id){
        $sql = "SELECT * FROM `ct_don_hang` WHERE id_don_hang = ".$id;
        return $this->pdo_query($sql,[]);
    }

    function getSum($id){
        $sql = "SELECT sum(gia_tien*so_luong) as 'sum' FROM `ct_don_hang` WHERE id_don_hang = ".$id;
        return $this->pdo_query($sql,[]);
    }
}