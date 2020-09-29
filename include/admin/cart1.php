<?php error_reporting(0);
    session_start();
    include("connect.php");
    include('include/admin/data.php');
    $id_prod = $_GET['id_product'];
    $id_user = $_GET['id_user'];
    $_SESSION['id_user'] = $id_user;
    $sql = "SELECT * FROM order_detail WHERE order_id='$id_user' ORDER BY id_orderdetail DESC";//
    $result = $conn->query($sql);
?>
<div id="cartt">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="cartt">CART</h4><br>
                <table class="table table-bordered">
                    <thead >
                        <tr>
                            <!-- <th>Image</th> -->
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($row=$result->fetch_assoc()){       
                        ?>
                        <tr>
                            <td><img class="anhorder" src="images/<?php echo $row['img']; ?>"><?php echo $row['p_name']; ?></td>
                            <td><?php echo $row['p_price']; ?></td>
                            <td><form method="POST">
                                <input type="number" name="editquant" value="<?php echo $row['quantity']; ?>">
                            </form></td>
                            <td><?php echo $row['total']; ?></td>
                            <td>
                                <a href="include/admin/action/edit_order.php?id_orderdetail=<?php echo $row['id_orderdetail'] ?>" class="btn btn-info">Edit</a>
                                <a href="include/admin/action/delete_order.php?id_orderdetail=<?php echo $row['id_orderdetail'] ?>" class="btn btn-warning">Delete</a>
                            </td>  
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
                <a href="index1.php" class="btn btn-info float-right">Tiếp tục mua hàng</a>
            </div>
        </div>
    </div>
</div>
<?php 
// if (isset($_POST['editquant'])) {
//     $edit_quant = $_POST['editquant'];
//     $_SESSION['editquant'] = $edit_quant;
// }else{
//     echo "Property undefined";
// print_r($_SESSION);
// }
?>