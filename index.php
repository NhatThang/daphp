<?php
   if(isset($_GET['message'])){
      echo "<script>
         alert('Mật khẩu hoặc tài khoản không chính xác');
      </script>";
   }
   include('include/admin/database.php');
   // include('data.php');
   include('include/admin/masterpage.php');
   mySlider();
   myheader();
   echo $st;
   myfooter();
   // include('mysql.php');

   // $db = MySQL::getInstance();
   // var_dump($db);
   
   // $db2 = MySQL::getInstance();
   // var_dump($db2);
?>