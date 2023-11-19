<?php 
function pdo_get_connection(){
    $servername = "localhost";
    $username = "root";
    $pass = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=DAM;charset=utf8", $username, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (\PDOException $e) {
        echo "Error connect".$e->getMessage();
    }
}
function pdo_excute($sql){
    $sql_args = array_slice(func_get_args(),1);
    try {
        $conn= pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    } catch (\Throwable $e) {
        throw $e;
    }finally{
        unset($conn);
    }
}
function pdo_query($sql){
    $sql_args = array_slice(func_get_args(),1);
    try {
        $conn= pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows= $stmt->fetchAll();
        return $rows;
    } catch (PDOException $e) {
        throw $e;
    }finally{
        unset($conn);
    }
}

function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(),1);
    try {
        $conn= pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row= $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    } catch (PDOException $e) {
        throw $e;
    }finally{
        unset($conn);
    }
}

// $servername = "localhost";
// $username = "root";
// $pass = "";
// try {
//     $conn = new PDO("mysql:host=$servername;dbname=DAM;charset=utf8", $username, $pass);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// } catch (\PDOException $e) {
//     echo "Error connect".$e->getMessage();
// }
?>