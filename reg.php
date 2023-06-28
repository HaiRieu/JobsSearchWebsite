<?php
     require dirname(__FILE__) .'../connect.php';
     if(isset($_POST['btn_register'])){
          $fullname = $_POST['form'];
          $password = $_POST['password1'];
          $password_1 = $_POST['password2'];
          $email = $_POST['email'];

          if(!empty($fullname)&&!empty($password)&&!empty($password_1)&&!empty($email)){
               $sql = "INSERT INTO `tbl_user` (`fullname`,`password`,`password_1`,`email`) VALUES ('$fullname','$password','$password_1','$email')";
               if($conn->query($sql)===TRUE){
                    require dirname(__FILE__) .'../Sign_Up_Success.html';
               }else{
                    echo "Lỗi {$sql}".$conn->error;
               }
          } else {
               require dirname(__FILE__) .'../Registration_failed.html';
          }
     }
?>