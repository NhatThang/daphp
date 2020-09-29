<?php 
    include "../connect.php";

    $cate_id = $_GET['id'];
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        
        $sql = "UPDATE category SET category_name='$name' WHERE category_id='$cate_id'";
        if($conn->query($sql) === TRUE){
            header("Location: ../category2.php");
        }else{
            echo "loi roi ban" . $conn->error;
        }
    }
    $sql = "SELECT * FROM category WHERE category_id='$cate_id'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        $name = $row['category_name'];
    }
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
                            <div class="card-header">Add Category</div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-group row">
                                            <label for="mame" class="col-md-4 col-form-label text-md-right">Tên thể loại</label>
                                            <div class="col-md-6">
                                                <input type="text" id="mame" class="form-control" name="name" value="<?php echo $name ?>" required autofocus placeholder="Tên thể loại">
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