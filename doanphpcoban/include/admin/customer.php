<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Customer</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>STT</th>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
          </tr>
        </thead>

        <tbody>
        <?php 
          include "connect.php";
          $sql = "SELECT * FROM user";
          $result = $conn->query($sql);
          if($result->num_rows > 0){
            $stt=0;
            while($row = $result -> fetch_assoc()){
              $user_id = $row['user_id'];
              $stt++;
        ?>
          <tr>
            <td><?php echo $stt ?></td>
            <td><?php echo $row['user_id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email'] ?></td>
          </tr>
          <?php  }} ?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
