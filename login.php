<?php
     require dirname(__FILE__) . '../connect.php';
     if(isset($_POST['btn_login'])){
          $fullname = $_POST['username'];
          $password = $_POST['password'];
          if(!empty($fullname) && !empty($password)){
               $sql = "SELECT * FROM `tbl_user` WHERE fullname = '$fullname'";
               $result = $conn->query($sql)->fetch_assoc();

               if($result['password'] == $password){
                    require dirname(__FILE__) . '../success.html';
               } else{
                require dirname(__FILE__) . '../Login_success.html';
               }
          } else{
               require dirname(__FILE__) . '../Login_success.html';
          }
     }
?>