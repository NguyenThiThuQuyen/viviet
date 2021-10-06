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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Carattere&display=swap" rel="stylesheet">

<style>
      html, body {
          width: 100%;
          height: 100%;
          font-size: 20px;
          /* font-family: 'Arial'; */
          color: #222;
        }

        .logo-font {
          font-family: 'WindSong', cursive;
          margin: 6px 0px 0px 3px;
        }

        .font-text {
            font-family: 'Carattere', cursive;
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

        .carousel-inner img {
            width: 100%;
        }

        .carousel-caption {
            position: absolute;
            top: 30%;
        }

        .carousel-caption h1 {
            font-size: 400%;
            /* text-transform: uppercase; */
            text-shadow: 5px 5px 15px #000;
        }

        .carousel-caption h3 {
            font-size: 200%;
            text-shadow: 2px 2px 10px #000;
        }

        .btn {
            text-decoration: none;
            padding: 12px 26px;
            font-size: 18px;
        }

        .btn-light {
            background-color: rgb(214, 91, 47);
            border: 1px solid white;
        }

        .btn-light:hover {
            background-color: rgb(206, 80, 35);
            border: 1px solid white;
        }

        .img-wrap {
            height: 750px;
            overflow: hidden;
        }

        .img-wrap img {
            height: 100%;
            width: auto;
        }
        


</style>



<body>
      

<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand logo-font ml-5" href="#"><h2>ViViet</h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" style="margin-left:300px" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link mr-3" href="/"><i class="fas fa-home mr-1"></i>Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-3" href="#gioithieu">Giới thiệu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-3" href="#">Khuyến mãi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-3" href="/guest/menu">Thực đơn</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-3" href="/guest/booking">Đặt bàn</a>
            </li>
        </ul>

        </div>
    </nav>
</div>


@yield('content')

<div class="container-fluid p-0">
    <div class="nav bg-dark" style="justify-content: space-evenly;">
        <ul class="nav-list">
            <li class="nav-item text-center text-white mt-3" style="list-style: none;">Hotline: 079.268.268</li>
            <li class="nav-item text-center text-white" style="list-style: none;">Website: viviet.com</li>
            <li class="nav-item text-center text-white" style="list-style: none;">Địa chỉ: Số 12, Hai Bà Trưng, Quận 1, TP Hồ Chí Minh</li>
        </ul>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>