<?php error_reporting(0); 
session_start();
include "../connect.php";
    // $edit_quant = $_SESSION['editquant'];
    $id_orderdetail = $_GET['id_orderdetail'];
    $sql = "UPDATE order_detail SET quantity='$_SESSION[editquant]' WHERE id_orderdetail='$id_orderdetail'";
    if($conn->query($sql) === TRUE){
        // header("Location: $_SERVER[HTTP_REFERER]");
        echo "edit thanh cong";
    }
    // else{
    //     echo trigger_error("Loi roi $conn->error");
    // }
    // print_r($_SESSION);
?>