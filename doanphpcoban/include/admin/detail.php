<script>
    function showAlert() {
        alert('Vui lòng đăng nhập để mua hàng');
    }
</script>
<?php 
    $conn = new mysqli('localhost', 'root', '', 'banhang'); 
    include('include/admin/data.php');
    $db = new database();
    $id = $_GET['id'];
    $db->select("SELECT * FROM product WHERE product_id = '$id'");
    while($row = $db->fetch()){

    
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
                <form action="">
                    <input class="ipwid" type="number" name="quantity" min="1" max value="1" size="4">
                </form>
            </div>
            
            <h3>
                <button onclick="showAlert()" type="submit" class="btn btn-info">ADD TO CART</button>
            </h3>
        </div>
        <div class="col-md-1 borde"></div>
    </div>
</div>
';
}?>

