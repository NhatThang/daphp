<?php 
    include_once "../connect.php";
    $id_orderdetail = $_GET['id_orderdetail'];
    $sql = "DELETE FROM order_detail WHERE id_orderdetail = '$id_orderdetail'";
    if($conn->query($sql) === TRUE){
        header("Location: $_SERVER[HTTP_REFERER]");
    }
?>