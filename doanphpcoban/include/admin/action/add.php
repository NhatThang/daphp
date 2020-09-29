<?php ob_start();
    include "../connect.php";
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <link rel="icon" href="Favicon.png">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <title>Login</title>
        <style>
            @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);


            body{
                margin: 0;
                font-size: .9rem;
                font-weight: 400;
                line-height: 1.6;
                color: #212529;
                text-align: left;
                background-color: #f5f8fa;
            }

            .navbar-laravel
            {
                box-shadow: 0 2px 4px rgba(0,0,0,.04);
            }

            .navbar-brand , .nav-link, .my-form, .login-form
            {
                font-family: Raleway, sans-serif;
            }

            .my-form
            {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }

            .my-form .row
            {
                margin-left: 0;
                margin-right: 0;
            }

            .login-form
            {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }

            .login-form .row
            {
                margin-left: 0;
                margin-right: 0;
            }
        </style>
    </head>
    <body>
        <main class="login-form">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Add Product</div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-group row">
                                            <label for="mame" class="col-md-4 col-form-label text-md-right">Tên sản phẩm</label>
                                            <div class="col-md-6">
                                                <input type="text" id="mame" class="form-control" name="name" required autofocus placeholder="Tên sản phẩm">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="price" class="col-md-4 col-form-label text-md-right">Giá sản phẩm</label>
                                            <div class="col-md-6">
                                                <input type="text" id="price" class="form-control" name="price" required placeholder="Giá sản phẩm">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="price" class="col-md-4 col-form-label text-md-right">Tên thể loại</label>
                                            <div class="col-md-6">
                                                <select name="category_id" id="" class="form-control">
                                                <?php 
                                                    $sql = "SELECT * FROM category";
                                                    $result = $conn->query($sql);
                                                    while($row =  $result->fetch_assoc()){
                                                ?>
                                                    <option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="desc" class="col-md-4 col-form-label text-md-right">Mô tả sản phẩm</label>
                                            <div class="col-md-6">
                                                <textarea type="text" id="desc" rows="5" cols="10" class="form-control" name="desc" required placeholder="Mô tả sản phẩm"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="color" class="col-md-4 col-form-label text-md-right">Màu sản phẩm</label>
                                            <div class="col-md-6">
                                                <input type="text" id="color" class="form-control" name="color" required placeholder="Màu sản phẩm">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="size" class="col-md-4 col-form-label text-md-right">Size sản phẩm</label>
                                            <div class="col-md-6">
                                                <input type="text" id="size" class="form-control" name="size" required placeholder="Size sản phẩm">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="image" class="col-md-4 col-form-label text-md-right">Ảnh sản phẩm</label>
                                            <div class="col-md-6">
                                                <input type="file" id="image" class="form-control" name="image" required placeholder="Giá sản phẩm">
                                            </div>
                                        </div>

                                        <div class="col-md-6 offset-md-4">
                                            <input type="submit" class="btn btn-primary" name="btn" value="Add Product">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
<?php 
    if(isset($_POST['btn'])){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $category_id = $_POST['category_id'];
        $image = $_POST['image'];
        $desc = $_POST['desc'];
        $color = $_POST['color'];
        $size = $_POST['size'];
        $sql = "INSERT INTO product (category_id, product_name, price, product_image, descript, color, size) VALUES ('$category_id', '$name', '$price', '$image', '$desc', '$color', '$size')";
        if($conn->query($sql) === TRUE){
            header("Location: ../product2.php");
        }else{
            echo "Da bi loi " . $conn->error;
        }
    }
    ob_flush();
?>