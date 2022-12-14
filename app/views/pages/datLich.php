<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập barber poly</title>
  <link rel="stylesheet" href="/public/css/datLich.css">


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
          <li><a href="/feedback">Phản Hồi</a></li>
        </ul>

        <div class="knot-main menu">
          <button class="knot"><span><img src="/upload/icon/30shine.38a2a504.svg" alt=""></span> <a
              href="login.php">Đăng
              nhập</a> </button>
        </div>
      </div>
    </div>
  </header>

  <section>
    <!--Bắt Đầu Phần Hình Ảnh-->
    <div class="img-bg">
      <img src="/upload/img/banner-login.png" alt="">
    </div>
    <!--Kết Thúc Phần Hình Ảnh-->
    <!--Bắt Đầu Phần Nội Dung-->
    <div class="noi-dung">
      <div class="form">
        <h2>Đặt lịch</h2>
        <form action="datLich">
          <div class="input-form">
            <span>Chọn giờ bắt đầu</span>

            <div class="grid ">
              <div class="knot-time"><a href="" class="time">8-9hAM</a></div>
              
              <div class="knot-time"><a href="" class="time">10hAM</a></div>
              <div class="knot-time"><a href="" class="time">11hAM</a></div>
              <div class="knot-time"><a href="" class="time">12hAM</a></div>
             
              <div class="knot-time"><a href="" class="time">1-2hPM</a></div>
             
              <div class="knot-time"><a href="" class="time">3-4hPM</a></div>
           
              <div class="knot-time"><a href="" class="time">5-6hPM</a></div>
             
              <div class="knot-time"><a href="" class="time">7-8hPM</a></div>
            </div>
          </div>
          <div class="input-form">
            <span>Chọn dịch vụ</span>
            <div class="dropdown">
              <select name="service " class="dropdown-select">
                <option value="" class="choose"> Mời chọn dịch vụ</option>
                <option value="1" class="choose">Cắt tóc</option>
                <option value="2" class="choose">Uốn</option>
                <option value="3" class="choose">Nhuộm</option>
              </select>
            </div>
          </div>

          <div class="input-form">
            <input type="submit" value="Đặt lịch">
          </div>

        </form>
        <h3>Theo dõi chúng tôi trên Mạng Xã Hội</h3>
        <ul class="icon-dang-nhap">
          <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
          <li><i class="fa fa-google" aria-hidden="true"></i></li>
          <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
        </ul>
      </div>
    </div>
    <!--Kết Thúc Phần Nội Dung-->
  </section>
  <script src="/public/js/datLich.js"></script>
</body>



</html>