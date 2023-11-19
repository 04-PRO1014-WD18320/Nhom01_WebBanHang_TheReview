<?php
include_once "../../model/pdo.php";

if (isset($_GET['delete'])) {
    $delete_query = "DELETE FROM category WHERE cate_id = ".$_GET['delete']; 
    if(pdo_excute($delete_query)){
        
    }
    header("Location:../index.php?act=cate");
}