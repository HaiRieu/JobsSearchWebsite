<?php
     require dirname(__FILE__) .'../connect.php';
     if(isset($_POST['btn_registerbusiness'])){
          $Namebusiness = $_POST['name_loginbusiness'];
          $Email = $_POST['email_loginbusiness'];
          $Phone = $_POST['phone_loginbusiness'];
          $password = $_POST['password_loginbusiness'];

          if(!empty($Namebusiness)&&!empty($Email)&&!empty($Phone)&&!empty($password)){
            $sql = "INSERT INTO `tbl_userbusiness` (`Namebusiness`,`Email`,`Phone`,`password`) VALUES ('$Namebusiness','$Email','$Phone',md5('$password'))";               if($conn->query($sql)===TRUE){
                    require dirname(__FILE__) .'../Sign_Up_Success.html';
               }else{
                    echo "Lỗi {$sql}".$conn->error;
               }
          } else {
               require dirname(__FILE__) .'../Registration_failed.html';
          }
     }
?>