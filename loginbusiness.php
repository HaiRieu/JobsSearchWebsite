<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí tài khoản đăng tuyển</title>
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
                    <a href="register.html" class="button1">Đăng ký</a>
                    <a href="login.html" class="button2">Đăng nhập</a>

                </div>
            </div>
          </div>
        <!-- Header End -->
 </header>
 <main>
    <div class="loginbusiness">
        <h1>Đăng kí</h1>
        <form action="regbusiness.php" method="post">
            <label for="name_loginbusiness">Tên Công ty/Doanh nghiệp</label>
            <br>
            <input type="text" name="name_loginbusiness" id="name_loginbusiness" placeholder="&nbsp;Tên Công ty/Doanh nghiệp">
            <br>
            <label for="email_loginbusiness">Email Công ty/Doanh nghiệp</label>
            <br>
            <input type="email" name="email_loginbusiness" id="email_loginbusiness" placeholder="&nbsp;Email Công ty/Doanh nghiệp">
            <br>
            <label for="phone_loginbusiness">Số điện thoại</label>
            <br>
            <input type="number" name="phone_loginbusiness" id="phone_loginbusiness" placeholder="&nbsp;Số điện thoại">
            <br>
            <label for="password_loginbusiness">Mật khẩu đăng nhập</label>
            <br>
            <input type="password" name="password_loginbusiness" id="password_loginbusiness" placeholder="&nbsp;Nhập mật khẩu">
            <br>
            <input type="submit" value="Đăng kí" name="btn_registerbusiness"  style="width: 200px; margin-top: 30px; border-radius: 5px;background-color: #ff006f;border: 1px solid #ff006f;color: white;font-size: 20px;font-family: 'Times New Roman', Times, serif;font-weight: bold;">
        </form>
    </div>
 </main>
 <footer style="background-color: #959595;height: 50px;margin-top: 117px;position: fixed;width: 1535px;">
    <p style="color: black;text-align: center;font-size: 20px;padding-top: 10px;margin-top: 10px;">@JobFlnder.vn.com</p>
 </footer>
</body>
</html>