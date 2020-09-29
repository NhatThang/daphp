<?php 
    include "../connect.php";
    $prod_id = $_GET['id'];
    $sql = "DELETE FROM product WHERE product_id='$prod_id'";
    $result = $conn->query($sql);
    if($result === TRUE){
        header("Location: ../product2.php");
    }else{
        echo "Loi gi day: " . $conn->$error;
    }
?>