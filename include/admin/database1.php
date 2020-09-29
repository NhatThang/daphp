<?php
session_start();
    $conn = new mysqli('localhost', 'root', '', 'banhang');
    $sql2 = "SELECT * FROM user WHERE name='$_SESSION[name]'";
    $result2 = $conn->query($sql2);
    if($result2->num_rows>0){
        while($row2 = $result2->fetch_assoc()){
            $user_id = $row2['user_id'];
        }
    }
?>
<html>
    <link rel="stylesheet" href="css/style.css">
</html>
<?php error_reporting(0);
$id = $_GET['id'];
if(isset($id)){
    include('include/admin/data.php');
    $sql = "SELECT * FROM category  WHERE category_id='$id'";
    $result = $conn->query($sql);
    $st = '';
    while($row=$result->fetch_assoc()){
        $st .= '
        <div class="container-fluid text-white"
            style="margin-top:80px !important">
            <h2 class="widget-title"><span>'.$row['category_name'].'</span></h2>
        </div>
        ';
        $sql1 = "SELECT * FROM product WHERE category_id='".$row['category_id']."' ORDER BY product_id DESC";
        $st .= '<div class="row" style="text-align: center">';
        $result1 = $conn->query($sql1);
        while($row1 = $result1->fetch_assoc()){
            $img_order = $row1['product_image'];
            $st .= '
                <div class="col-sm-3" style="margin-top:50px">'
                .'<img src="images/'.$row1["product_image"]
                .'" width="300" height="350"><h3 style="font-weight: bold; margin-top: 15px;">
                '.$row1['product_name'].'</h3><h3 class="price">'.$row1['price'].'</h3>
                <h3><a href="detail1.php?id_user='.$user_id.'&id_product='.$row1['product_id'].'&img='.$img_order.'" class="cart">Detail</a>
                <a href="#" class="cart">ADD TO CART</a></h3></div>
            ';
        }
        $st .= '</div>';
    }
}else{
    include('include/admin/data.php');
    $sql = "SELECT * FROM category";
    $result = $conn->query($sql);
    $st = '';
    while($row=$result->fetch_assoc()){
        $st .= '
        <div class="container-fluid text-white"
            style="margin-top:80px !important">
            <h2 class="widget-title"><span>'.$row['category_name'].'</span></h2>
        </div>
        ';
        $sql1 = "SELECT * FROM product WHERE category_id='".$row['category_id']."' ORDER BY product_id DESC";
        $st .= '<div class="row" style="text-align: center">';
        $result1 = $conn->query($sql1);
        while($row1 = $result1->fetch_assoc()){
            $img_order = $row1['product_image'];
            $st .= '
                <div class="col-sm-3" style="margin-top:50px">'
                .'<img src="images/'.$row1["product_image"]
                .'" width="300" height="350"><h3 style="font-weight: bold; margin-top: 15px;">
                '.$row1['product_name'].'<h3 class="price">'.$row1['price'].'</h3>
                <h3><a href="detail1.php?id_user='.$user_id.'&id_product='.$row1['product_id'].'&img='.$img_order.'" class="cart">Detail</a>
                <a href="#" class="cart">ADD TO CART</a></h3></h3></div>
            ';
        }
        $st .= '</div>';
    }
}
$st .= '<div id="cta-section">
    <div class="cta-content">
        <h2>Unique and Elegant Unique Rolex</h2>
        <h4>MILIANCELOS A LANOS DE ROLEX</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
            <a href="#">Read More</a>
    </div>
    <figure>
        <img src="https://8degreethemes.com/demo/wp-store//wp-content/uploads/2016/07/cta-watch.jpg" alt="Unique and Elegant Unique Rolex">
    </figure>

</div>';
?>
