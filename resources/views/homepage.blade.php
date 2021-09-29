<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <link type="text/css" rel="stylesheet" href="./main.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>

        html, body {
            width: 100%;
            height: 100%;
            font-size: 18px;
            color: #222;
        }

        .color {
            background-color: rgb(214, 91, 47) !important;
        }

        .text-color {
            color: rgb(214, 91, 47);
        }
        .navbar {
            background-color: rgb(214, 91, 47) !important;

        }

        .navbar li a {
            color: #fff !important;
        }

        /* hover: di chuyển chuột đến thì màu đen */
        .navbar li a:hover{   
            color:black !important;
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
            text-transform: uppercase;
            text-shadow: 5px 5px 15px #000;
        }

        .carousel-caption h3 {
            font-size: 200%;
            text-shadow: 2px 2px 10px #000;
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

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="#">VIVIET</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Trang Chủ <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Giới Thiệu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/menu">Thực Đơn</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Khuyến Mãi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Đặt Bàn</a>
            </li>
        </div>
    </nav>
    
    <div id="slide" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slide" data-slide-to="0" class="active"></li>
            <li data-target="#slide" data-slide-to="1"></li>
            <li data-target="#slide" data-slide-to="2"></li>
            
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-wrap" src="image/bn3.png" alt="">
                <div class="carousel-caption">
                    <h1 class="display-2">Vị Việt</h1>
                    <h3>Yêu thương quay về - là bếp lửa lên</h3>
                    <br>
                    <button type="button" class="btn btn-outline-light btn-lg bg-white"> <a href="/register" class="text-dark"> ĐĂNG KÝ</a></button>
                    <button type="button" class="btn btn-light btn-lg"> <a href="/login" class="text-white"> ĐĂNG NHẬP</a></button>
                    
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-wrap" src="image/29.jpeg" alt="">
            </div>
            <div class="carousel-item">
                <img class="img-wrap" src="image/58.jpeg" alt="">
            </div>

        </div>
    </div>


<div class="bg-dark">
    <div class="container padding">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="text-center text-white">THỰC ĐƠN</h1> 
            </div>           
        </div>
        <div class="row padding">
            <div class="col-md-6 mt-5">
                <div class="card">
                    <img class="card-img-top" src="image/38.jpg" alt="">
                    <div class="card-body p-3">
                        <h4 class="card-text text-center">Best Seller</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="card">
                    <img class="card-img-top" src="image/36.jpg" alt="">
                    <div class="card-body p-3">
                        <h4 class="card-text text-center">Món Mới</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row padding">
            <div class="col-md-4 mt-5">
                <div class="card">
                    <img class="card-img-top" src="image/39.jpeg" alt="">
                    <div class="card-body p-3">
                        <h4 class="card-text text-center">Khai Vị</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card">
                    <img class="card-img-top" src="image/25.jpg" alt="">
                    <div class="card-body p-3">
                        <h4 class="card-text text-center">Món Chính</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card">
                    <img class="card-img-top" src="image/30.jpeg" alt="">
                    <div class="card-body p-3">
                        <h4 class="card-text text-center">Tráng Miệng</h4>
                    </div>
                </div>
            </div>
        </div>


        <div class="row padding">
            <div class="col-md-6 mt-5">
                <div class="card">
                    <img class="card-img-top" src="image/46.jpeg" alt="">
                    <div class="card-body p-3">
                        <h4 class="card-text text-center">Đồ Uống</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-5">
                <div class="card">
                    <img class="card-img-top" src="image/44.jpeg" alt="">
                    <div class="card-body p-3">
                        <h4 class="card-text text-center">Rượu</h4>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<div class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="text-center text-color">GIỚI THIỆU</h1> 
            </div>           
        </div>

        <div class="row border border-white">
            <div class="col-md-6 mt-5">
                <div class="card">
                    <img class="card-img-top" src="image/52.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <div>
                   <h4>VỊ VIỆT</h4>
                   <h4>Sự kết hợp tinh tế của phong cách ẩm thực </h4>
                   <h4 class="text-center">Châu Á và Việt Nam</h4>
                   <p>
                    Đến với nhà hàng chúng tôi, quý khách sẽ được trải nghiệm một phong cách ẩm thực hoàn toàn mới lạ,
                    với các món ăn từ thịt bò Wagyu thượng hạng,
                    cho đến có hương vị dân dã mà đậm đà của miền quê Việt Nam. </p>
                    
                    <p> Qua bàn tay điêu luyện của các đầu bếp bậc thầy, từng món ăn dậy lên hương vị làm hài lòng ngay
                    cả những thực khách khó tính nhất. </p>
                    
                    <p>Nhà hàng VỊ VIỆT mang lại những cảm nhận và những trải nghiệm khác nhau,
                     từ không khí ấm cúng gần gũi cho đến không gian sang trọng tinh tế.
                   </p>                   
                </div>
            </div>
        </div>


        <div class="row border border-white">
            <div class="col-md-6 mt-5">
                <div>
                   <h5>Phong cách "Meat Bar"</h5>
                   <p>
                    Trong những năm gần đây sự biến tấu từ phong cách “Meat Bar” châu Âu gần gũi,
                     ấm cúng trở nên vô cùng tinh tế qua bàn tay chế biến điêu luyện của các đầu bếp đã làm say lòng bao tín đồ ẩm thực.
                     Điểm nổi bật của phong cách ẩm thực này là bạn có thể thưởng thức thực đơn phong phú đa dạng từ nguyên liệu thịt bò thượng hạng,
                     cùng với các loại đồ uống thơm nồng đặc biệt được tinh chế thủ công một cách tỷ mỉ nhất.
                    </p>
                    <p>Hãy lên ngay kế hoạch buổi hẹn hò với những người bạn yêu thương nhất tại VỊ VIỆT nhé!</p>
                     <p>VỊ VIỆT - Yêu thương quay về là bếp lửa lên ! </p>
                   
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="card">
                    <img class="card-img-top" src="image/47.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
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