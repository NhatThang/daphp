<script>
    function alertCart() {
        alert('Vui lòng đăng nhập để xem giỏ hàng');
    }
</script>
<?php 

    function myheader(){
        $xau = '
        <!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="css/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/banner.css">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <title>Hello, world!</title>
   </head>
   <body>
      <div class="menu">
         <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#"><img src="images/no.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto size">
                  <li class="nav-item active">
                     <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Category
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">';

                        $db = new database;
                        $db -> select("SELECT * FROM category");
                        
                        while($row = $db -> fetch()){
                           $xau .= '<a class="dropdown-item" href="index.php?id='.$row['category_id'].'">'.$row["category_name"].'</a>';
                        }

                    $xau .= '</div>
                  </li>
                  
                  <li class="nav-item">
                     <a class="nav-link" href="index.php">Contact</a>
                  </li>
                  
                  <li class="nav-item">
                     <a class="nav-link" href="include/admin/login.php">Login&thinsp;
                     <i class="fas fa-sign-in-alt"></i></a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" href="include/admin/register.php">Register&ensp;<i class="fas fa-user-circle"></i></a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" href="" onclick="alertCart()">Cart&thinsp;&thinsp;<i class="fas fa-shopping-cart"></i></a>
                  </li>

               </ul>
               <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
               </form>
            </div>
         </nav>
         
        ';
        echo $xau;
    }

    function mySlider(){
        $xau = '
        <div class="slider">
        <div class="slideshow-container">
           <div class="mySlides fade ">
              <div class="single-welcome-slide bg-img" style="background-image: url(images/e1.jpg);">
					   <div class="welcome-content height">
                     <div class="container h-100">
                        <div class="row h-100 align-items-center">
                           <div class="col-12 col-md-9 col-lg-6">
                              <div class="welcome-text">
                                 <h2 data-animation="fadeInUp">We Care About <br> Your Style</h2>
                                 <p data-animation="fadeInUp">“Discover your own style. Dont try to repeat what has already been written - have the courage to do your own thing and dont be afraid to do something different.”</p>
                                 <button href="#" class="btn bx-shd nam-btn">about us</button>
                              </div>
                           </div>
                        </div>
                     </div>
					   </div>
				   </div>
           </div>
           <div class="mySlides fade ">
              <div class="single-welcome-slide bg-img" style="background-image: url(images/e2.jpg);">
					   <div class="welcome-content height">
                     <div class="container h-100">
                        <div class="row h-100 align-items-center">
                           <div class="col-12 col-md-9 col-lg-6">
                              <div class="welcome-text">
                                 <h2 data-animation="fadeInUp">We Care About <br> Your Style</h2>
                                 <p data-animation="fadeInUp">“Discover your own style. Dont try to repeat what has already been written - have the courage to do your own thing and dont be afraid to do something different.”</p>
                                 <button href="#" class="btn bx-shd nam-btn">about us</button>
                              </div>
                           </div>
                        </div>
                     </div>
					   </div>
				   </div>
           </div>
           <div class="mySlides fade ">
              <div class="single-welcome-slide bg-img" style="background-image: url(images/hero.jpg);">
					   <div class="welcome-content height">
                     <div class="container h-100">
                        <div class="row h-100 align-items-center">
                           <div class="col-12 col-md-9 col-lg-6">
                              <div class="welcome-text">
                                 <h2 data-animation="fadeInUp">We Care About <br> Your Style</h2>
                                 <p data-animation="fadeInUp">“Discover your own style. Dont try to repeat what has already been written - have the courage to do your own thing and dont be afraid to do something different.”</p>
                                 <button href="#" class="btn bx-shd nam-btn">about us</button>
                              </div>
                           </div>
                        </div>
                     </div>
					   </div>
				   </div>
           </div>
        </div>
        <br>
        <div style="text-align:center">
           <span class="dot"></span> 
           <span class="dot"></span> 
           <span class="dot"></span> 
        </div>
     </div>
     </div>
  <script>
     var slideIndex = 0;
     showSlides();
     
     function showSlides() {
       var i;
       var slides = document.getElementsByClassName("mySlides");
       var dots = document.getElementsByClassName("dot");
       for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";  
       }
       slideIndex++;
       if (slideIndex > slides.length) {slideIndex = 1}    
       for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" active1", "");
       }
       slides[slideIndex-1].style.display = "block";  
       dots[slideIndex-1].className += " active1";
       setTimeout(showSlides, 2000); // Change image every 2 seconds
     }
  </script>
        ';
        echo $xau;
    }

    function myfooter(){
      $xau = '
      <div class="container-fluid">
			<div class="border-top mt"></div>
		</div>
      <footer class="footer-area padding-80-0">
         <div class="container">
            <div class="row justify-content-between">
               <div class="col-12 col-sm-6 col-md-4">
                  <div class="single-footer-widget mbb-80">
                     <a href="hair.html" class="footer-logo">
                        <img src="images/oe.png">	
                     </a>
                     <p class="mb-30">We would love to serve you and let you enjoy your culinary experience. Excepteur sint occaecat cupidatat non proident.
                     </p>
                     <div class="copywrite-text">
                        <p>Copyright © All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://translate.google.com/#view=home&op=translate&sl=en&tl=vi&text=Hi" target="_blank">Hop</a></p>
                     </div>
                  </div>
               </div><!-- edn1 -->
               <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                  <div class="single-footer-widget mbb-80">
                     <h4 class="widget-titlee">Opening times</h4>
                     <div class="open-time">
                        <p>Monday <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Friday: 10.00 - 23.00<br>Saturday: 10.00 - 19.00</p>
                     </div>
                     <div class="social-info">
                        
                           <a class="facebook" href="https://www.facebook.com/" target="_blank">
                              <i class="fab fa-facebook-f a"></i>
                           </a>
                           <a class="twitter" href="https://twitter.com/login" target="_blank">
                              <i class="fab fa-twitter a"></i>
                           </a>
                           <a class="google-plus" href="https://accounts.google.com/" target="_blank">
                              <i class="fab fa-google-plus-g a"></i>
                           </a>
                           <a class="instagram" href="https://www.instagram.com/" target="_blank">
                              <i class="fab fa-instagram a"></i>
                           </a>
                     </div>
                  </div>
               </div> <!-- -end2 -->
               <div class="col-12 col-md-4 col-xl-3">
                  <div class="single-footer-widget mbb-80">
                     <h4 class="widget-titlee">Contact Us</h4>
                     <div class="contact-address">
                        <p>Tel: (+12) 345 678 910</p>
                        <p>E-mail: Hop1702@gmail.com</p>
                        <p>Address: Hue Dev Dev CC-OO</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
         
      </body>
      </html>
      ';
      echo $xau;
    }
?>