<script>
    function showDele(){
        alert('Xóa thành công');
    }
</script>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Product</h6>
    <?php echo "<a href='action/add.php'><button class='btn btn-info right'>Add Product</button></a>" ?>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>STT</th>
            <th>Mã sản phẩm</th>
            <th>Mã khách hàng</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Ảnh sản phẩm</th>
            <th>Thao tác</th>
          </tr>
        </thead>

        <tbody>
        <?php 
          include "connect.php";
          $sql = "SELECT * FROM product  ORDER BY product_id DESC";
          $result = $conn->query($sql);
          if($result->num_rows > 0){
            $stt=0;
            while($row = $result -> fetch_assoc()){
              $prod_id = $row['product_id'];
              $stt++;
        ?>
          <tr>
            <td><?php echo $stt ?></td>
            <td><?php echo $row['product_id'] ?></td>
            <td><?php echo $row['category_id'] ?></td>
            <td><?php echo $row['product_name'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td><?php echo $row['product_image'] ?></td>
            <td>
                <?php echo "<a href='action/update.php?id=$prod_id'><button class='btn btn-info'>Edit</button></a>" ?>
                <?php echo "<a href='action/delete.php?id=$prod_id'><button onclick='location.href=showDele()' class='btn btn-warning'>Delete</button></a>" ?>
            </td>
          </tr>
          <?php  }} ?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
