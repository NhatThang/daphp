
<?php 
session_start();
include "connect.php";
    if(isset($_POST['name']) && isset($_POST['email'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordcf = $_POST['passwordcf'];
        
        if($password == $passwordcf){
            $password = md5($password);
            $sql = "INSERT INTO user (name, email, password) VALUES('$name', '$email', '$password')";
            $conn->query($sql) or die($conn->error);
            $_SESSION['message'] = "Ban da dang nhap";
            $_SESSION['name'] = $name;
            header("Location: ../../index1.php");
        }else{
            // $_SESSION['message'] = "Mat khau khong trung khop";
            header("Location: register.php?regisErr=sai");
            $_SESSION['m'];
            
        }
    }else{
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                        <a class="nav-link" href="Login.php">Back</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Register</div>
                        <div class="card-body">
                            <form action="register.php" method="POST">

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">User</label>
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control" name="name" required autofocus placeholder="Enter Your Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email" required autofocus placeholder="Enter E-Mail Address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required placeholder="Enter Password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="passwordcf" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="passwordcf" class="form-control" name="passwordcf" required placeholder="Enter Confirm Password">
                                    </div>
                                </div>
                                
                                <!-- <div class="col-md-6 offset-md-4">
                                    <input type="sunmit" class="btn btn-primary" name="btn" value="Register">
                                </div> -->
                                <div class="col-md-6 offset-md-4">
                                    <input type="submit" class="btn btn-primary" name="btn" value="Register">
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
<?php } ?>
<?php error_reporting(0);
$sai = $_GET['regisErr'];
if(isset($sai)){
    echo "<script>
            alert('Mật khẩu không trùng khớp');
        </script>";
}
?>
