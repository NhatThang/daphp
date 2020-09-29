<?php 
    include "../connect.php";
    $cate_id = $_GET['id'];
    $sql = "DELETE FROM category WHERE category_id='$cate_id'";
    $result = $conn->query($sql);
    if($result === TRUE){
        header("Location: ../category2.php");
    }else{
        echo "Loi gi day: " . $conn->error;
    }
?>