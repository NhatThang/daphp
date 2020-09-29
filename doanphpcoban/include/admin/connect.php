<?php 
    $conn = new mysqli("localhost", "root", "", "banhang") or die("ket noi khong thanh cong");
    if ($conn->connect_error) {
        die("Connection failed:" . $conn->connect_error);
    }
?>