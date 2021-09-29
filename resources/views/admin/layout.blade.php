<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Nhân Sự</title> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <link type="text/css" rel="stylesheet" href="./main.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=WindSong:wght@500&display=swap" rel="stylesheet">
<style>
      html, body {
          width: 100%;
          height: 100%;
          font-family: 'Arial';
          font-size: 19px;
          color: #222;
        }

        .logo-font {
          font-family: 'WindSong', cursive;
          margin: 6px 0px 0px 3px;
        }

        .color {
            background-color: rgb(214, 91, 47) !important;
        }

        .color2 {
            background-color: rgb(167, 192, 230);
        }
        .navbar {
            background-color: rgb(214, 91, 47) !important;
            padding:0;
        }

        .navbar li a {
            color: #fff !important;
        }

        /* hover: di chuyển chuột đến thì đổi màu */
        .navbar li a:hover{   
            color:black !important;
        }

        .btn {
            text-decoration: none;
            padding: 6px 25px;
            font-size: 18px;            
        }

        .btn_item {
            background-color: rgb(214, 91, 47);
            color: #fff;
        }

        .card {
   
            border: 1px solid rgba(0,0,0,.2);
        }
        .card-body {
            padding: 0;
        }
        a {
          color: #212529;
        }
        a:link {
          text-decoration:none;
        }
        


</style>



<body>
      

<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand logo-font" href="#"><h2>ViViet</h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" style="margin-left:300px" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/"><i class="fas fa-home mr-1"></i>Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Khách hàng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Nhân sự</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Thực đơn</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Khu vực</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Đặt Bàn</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Quản lý kho</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">Thống kê</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="#">Báo cáo</a>
            </li>
          </ul>
          <div class="float-right">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-togglet" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> Admin
                </a>
                <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Đăng xuất</a>
                </div>
            </li>
            </ul>
        </div>
        </div>
    </nav>
</div>


@yield('content')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>