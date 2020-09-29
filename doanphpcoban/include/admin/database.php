<?php $conn = new mysqli('localhost', 'root', '', 'banhang'); ?>
<script>
    function showAlert() {
        alert('Vui lòng đăng nhập để mua hàng');
    }
</script>
<html>
    <link rel="stylesheet" href="css/style.css">
</html>
<?php error_reporting(0);
$id = $_GET['id'];
if(isset($id)){
    include('include/admin/data.php');
    $sql = "SELECT * FROM category WHERE category_id='$id'";
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
            $st .= '
                <div class="col-sm-3" style="margin-top:50px">'
                .'<img src="images/'.$row1["product_image"]
                .'" width="300" height="350"><h3 style="font-weight: bold; margin-top: 15px;">
                '.$row1['product_name'].'</h3><h3 class="price">'.$row1['price'].'</h3>'.
                '<h3><a href="detail.php?id='.$row1['product_id'].'" class="cart">Detail</a>
                <button onclick="showAlert()" class="cart">ADD TO CART</button></h3></div>
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
            $st .= '
                <div class="col-sm-3" style="margin-top:50px">'
                .'<img src="images/'.$row1["product_image"]
                .'" width="300" height="350"><h3 style="font-weight: bold;margin-top: 15px;">
                '.$row1['product_name'].'</h3><h3 class="price">'.$row1['price'].'</h3>'
                .'<h3><a href="detail.php?id='.$row1['product_id'].'" class="cart">Detail</a>
                <button onclick="showAlert()" class="cart">ADD TO CART</button></h3></div>
            ';
        }
        $st .= '</div>';
    }
}
$st .= '<div id="cta-section">
    <div class="cta-content">
        <h2>Unique and Elegant Unique Rolex</h2><br>
        <h4>MILIANCELOS A LANOS DE ROLEX</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
            <a href="#">Read More</a>
    </div>
    <figure>
        <img src="https://8degreethemes.com/demo/wp-store//wp-content/uploads/2016/07/cta-watch.jpg" alt="Unique and Elegant Unique Rolex">
    </figure>

</div>';
?>
