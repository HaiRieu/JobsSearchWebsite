<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/Jobs.png">
</head>
<body>
    <header>
        <!-- Header Start -->
          <div class="Header-area">
            <div class="Header-img">
                <a href="index.html">
                    <img src="https://themewagon.github.io/jobfinderportal/assets/img/logo/logo.png" alt="logo" class="img1">
                </a>
            </div>
            <div class="Header-list">
                <div class="Header-list_list,grid">
                    <ul class="navigation">
                        <li class="list1"><a href="index.html">Trang chủ</a></li>
                        <li class="list1"><a href="searchjob.html">Tìm việc làm</a></li>
                        <li class="list1"><a href="about.html">Về</a></li>
                        <li class="list4"><a href="#">Trang</a>
                            <ul  class="submenu">
                                <li><a href="Blog.html">Blog</a></li>
                                <li><a href="Blog detail.html">Chi tiết Blog</a></li>
                                <li><a href="#">Yếu tố</a></li>
                                <li><a href="job details.html">Chi tiết công việc</a></li>
                            </ul>
                        </li>
                        <li class="list1"><a href="index.html#footer">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="Header-list_button">
                    <a href="" class="button1">Đăng ký</a>
                    <a href="login.html" class="button2">Đăng nhập</a>

                </div>
            </div>
          </div>
        <!-- Header End -->
 </header>
 <main>
    <div class="register">
        <h1 class="register_h1">
            Đăng kí
        </h1>
    </div>
    <div class="register-form">
        <form action="reg.php" method="post">
            <label for="form" class="register_label">
                Tên đăng nhập
            </label>
            <br>
            <input type="text" name="form" id="form" placeholder="&nbsp;Tên đăng nhập">
            <br><br>
            <label for="password1" class="register_label">
                Mật khẩu
            </label>
            <br>
            <input type="password" name="password1" id="password1" placeholder="&nbsp;Nhập mật khẩu">
            <br><br>
            <label for="password1" class="register_label">
                Xác nhận lại mật khẩu
            </label>
            <br>
            <input type="password1" name="password2" id="password1" placeholder="&nbsp;Xác nhận lại mật khẩu">
            <br><br>
            <label for="email" class="register_label">
                Email
            </label>
            <br>
            <input type="email" name="email" id="email" placeholder="&nbsp;Nhập Email">
            <br><br><br><br>
            <input type="submit" name="btn_register" id="btn_register" class="btn_register" value="Đăng kí">
        </form>
    </div>
    <p style="font-size: 20px;color: #333;margin-left: 20px;text-align: center;">Đối với Doanh nghiệp/Công ty Đăng kí <a href="loginbusiness.php" style="color: blue;">tại đây!</a></p>
 </main>
 <footer style="background-color: #959595;height: 50px;margin-top: 75px;">
    <p style="color: black;text-align: center;font-size: 20px;padding-top: 15px;">@JobFlnder.vn.com</p>
 </footer>
</body>
</html>