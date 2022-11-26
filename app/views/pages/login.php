<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập barber poly</title>
  <link rel="stylesheet" href="/public/css/login.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body class="body-service">
    <header class="other-service-header">
      <div class="logo-box">
        <img class="logo" src="/upload/img/logo.png" alt="" height="120px">

        <div class="menu-main">
          <ul class="menu">
            <li><a href="/">Trang chủ</a></li>
            <li><a href="">Phản Hồi</a></li>
          </ul>
          <div class="knot-main menu">
                        <button class="knot"><span><img src="/upload/icon/30shine.38a2a504.svg" alt=""></span> <a href="/login">Đăng
                            nhập</a> </button>
                    </div>
        </div>
      </div>
    </header>

    <section>
        <!--Bắt Đầu Phần Hình Ảnh-->
        <div class="img-bg">
            <img src="/upload/img/banner-login.png"
                alt="">
        </div>
        <!--Kết Thúc Phần Hình Ảnh-->
        <!--Bắt Đầu Phần Nội Dung-->
        <div class="noi-dung">
            <div class="form">
                <h2>Trang Đăng Nhập</h2>
                <form action="">
                    <div class="input-form">
                        <span>Tên Người Dùng</span>
                        <input type="text" name="">
                    </div>
                    <div class="input-form">
                        <span>Số Điên Thoại</span>
                        <input type="text" name="">
                    </div>
                    <div class="input-form">
                        <span>Email</span>
                        <input type="email" name="">
                    </div>
                    <div class="input-form">
                        <span>Mật Khẩu</span>
                        <input type="password" name="">
                    </div>
                    <div class="nho-dang-nhap">
                        <label><input type="checkbox" name=""> Nhớ Đăng Nhập</label>
                    </div>
                    <div class="input-form">
                        <input type="submit" value="Đăng Nhập">
                    </div>
                    <div class="input-form">
                        <p>Bạn Chưa Có Tài Khoản? <a href="login.php">Đăng Ký</a></p>
                    </div>
                </form>
                <h3>Đăng Nhập Bằng Mạng Xã Hội</h3>
                <ul class="icon-dang-nhap">
                    <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                    <li><i class="fa fa-google" aria-hidden="true"></i></li>
                    <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                </ul>
            </div>
        </div>
        <!--Kết Thúc Phần Nội Dung-->
    </section>
    <script src="/upload/main.js"></script>
  </body>

</html>