<?php

    $conn = new mysqli('localhost', 'root', '', 'banhang'); 
    include('include/admin/data.php');
    $db = new database();
    $product_id = $_GET['id_product'];
    $db->select("SELECT * FROM product WHERE product_id = '$product_id'");
    while($row = $db->fetch()){
        $product_name = $row['product_name'];
        $price = $row['price'];
    
?>
<html>
    <link rel="stylesheet" href="css/style.css">
</html>
<?php
$st = '
<div class="home1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="task">
                    <h3 class="color" style="text-align: center;font-size: 20px !important;">Detail</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="detail">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <img class="widimg" src="images/'.$row['product_image'].'"
            </div>
        </div>
        <div class="col-12 col-md-7">
            <h3 class="name-detail">Product: '.$row['product_name'].'</h3>
            <h3 class="price">Price: '.$row['price'].'</h3>
            <b>Introducing the product:</b><br> <li class="sans">'.$row['descript'].'</li>
            <p class="bth"><b>Color: </b>'.$row['color'].'.</p>
            <p class="bth"><b>Size: </b>'.$row['size'].'.</p>
            <div class="quantity">
                <form method="POST">
                    <input type="number" class="ipwid" name="quantity" value="1" min="1">
                    <input type="submit" name="submit" class="btn btn-info" value="Add to Cart">
                </form>
            </div>
        </div>
        <div class="col-md-1 borde"></div>
    </div>
</div>
';
}?>
<?php 

if(isset($_POST['submit'])){
    $quantity = $_POST['quantity'];
    $total = $price;
    $user_id = $_GET['id_user'];
    $img_order = $_GET['img'];
    $sql = "INSERT INTO order_detail (order_id, product_id, p_name, p_price, quantity, total, img) 
    VALUES ('$user_id', '$product_id', '$product_name', '$price', '$quantity', '$total', '$img_order')";
    $result = $conn->query($sql);
    if($result){
        header("Location: cart.php?id_user=$user_id&id_product=$product_id&price=$price");
    }
}

?>
<!-- <a href="cart.php?id='.$id.'"><input name="btn" class="btn btn-info" value="Add to Cart"></a> -->
