<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập barber poly</title>
  <link rel="stylesheet" href="/public/css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <link href="/dist/output.css" rel="stylesheet">
</head>

<body class="body-service">
    <header class="other-service-header">
      <div class="logo-box">
        <img class="logo" src="../public/img/logo.png" alt="" height="120px">

        <div class="menu-main">
          <ul class="menu">
            <li><a href="/">Trang chủ</a></li>
            <li><a href="">Phản Hồi</a></li>
          </ul>
          <div class="knot-main menu">
                        <button class="knot"><span><img src="../public/img/icon/30shine.38a2a504.svg" alt=""></span> <a href="/login">Đăng
                            nhập</a> </button>
                    </div>
        </div>
      </div>
    </header>
    <div class="container">
      <div class="login-box">
        <h2>Đặt lịch</h2>
        <form>
          <div class="user-box">
          <input
                          type="time" name = "time"
                        />
            <label>Chọn giờ</label>
          </div>
          <div class="user-box">
          <input
                          type="date"  name = "date"
                        
                        />
            <label>Chọn ngày </label>
          </div>

          <select name="">
        <option >dịch vụ 1</option>
        <option >dịch vụ 2</option>
        <option >dịch vụ 3</option>
        <option >dịch vụ 4</option>
        
    </select>
    <label class= "color-text">Chọn dịch vụ </label>
          <label class= "color-text" ><p>Địa chỉ: <br> Hà Nội: Tòa nhà FPT Polytechnic, P. Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội, Việt Nam</p></label>
          <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Đặt lịch
          </a>
        </form>
      </div>
      
    </div>
   
    
   
    <script src="../public/main.js"></script>
  </body>

</html>