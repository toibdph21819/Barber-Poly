<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <link rel="stylesheet" href="/public/css/output.css">

</head>

<body class="">
  <div class="mx-auto  bg-[#f1f1f1] min-h-[100vh] text-sm capitalize">
    <div class="flex text-white bg-primary w-full  gap-2  justify-between ">
      <div class="w-1/4 text-center flex items-center justify-center">
        <a href="" class="">Logo</a>
      </div>
      <div class=" w-3/4 flex items-center justify-end gap-x-2 p-2">
        Chào mừng bạn tới trang quản trị
        <div class="flex items-center space-x-2">

          <p class="font-bold"></p>
          <a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="">Đăng xuất</a>
          <a class="text-white px-2 py-1 hover:text-primary hover:bg-white" href="">Tài khoản</a>
        </div>
      </div>
    </div>
    <div class="flex">
      <div class=" bg-white w-72 p-5 space-y-2 a">
        <a class="block border px-4 py-2 rounded-md hover:bg-primary hover:text-white" href="/app/views/admin/vouchers/index.php">Quan ly giam gia</a>
        <a class="block border px-4 py-2 rounded-md hover:bg-primary hover:text-white" href="/app/views/admin/users/index.php">Quản lý khach hang</a>
        <a class="block border px-4 py-2 rounded-md hover:bg-primary hover:text-white" href="/app/views/admin/orders/index.php">Quan ly don dat lich</a>
        <a class="block border px-4 py-2 rounded-md hover:bg-primary hover:text-white" href="/app/views/admin/evaluate/index.php">Quan ly danh gia</a>
        <a class="block border px-4 py-2 rounded-md hover:bg-primary hover:text-white" href="/app/views/admin/service/index.php">Quan ly dich vu</a>
       
      </div>
      <main class="flex-1 h-[100vh] overflow-y-scroll scroll-smooth">
        

      </main>
    </div>
    <footer class=" w-full h-10 flex justify-center items-center bg-primary text-white ">
      Copyright &copy; được thiết kế và phát triển bởi BDT
    </footer>
  </div>

</body>

</html>