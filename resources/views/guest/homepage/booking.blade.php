
<!DOCTYPE html>
<html>
    <head> 
        <title>Booking</title>
        <meta charset="uft-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="./main.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
   <style>
       html, body {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
       }
       .btn {
           width: 130px;
       }
       a:link {
        text-decoration: none;
       }
       .font {
            font-family: 'Playball', cursive;
            font-size: 80px
       }
        .carousel-inner img {
            width: 100%;
        }
        .carousel-caption {
            position: absolute;
            top: 5%;
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
        
        .form-container {
            padding: 32px;
            margin: 0px auto 0 auto;
            background-color: #ffff;
            font-weight: 545;
            margin-left:10% ;
        }
        .form-control {
            width: 95%;
        }
        .color {
            color: rgb(214, 91, 47);
        }       
        .btn-light {
            background-color: rgb(214, 91, 47);
            border: 1px solid white;
          
        }
        .btn-light:hover {
            background-color: rgb(206, 80, 35);
            border: 1px solid white;
        }
        .nav-link {
            display: block;
            padding: 6px 12px;  
        }
    </style>
    <!-- </head>
    <body > -->
        <div class="container-fluid">
            <div class="row m-3">
                  <div class="col-4">
                    <img src="image/3.jpg" alt="hinh-nen">
                    <div class="carousel-caption">
                        <h1 class="display-2">Đặt Bàn</h1>
                        <h3>Thời Gian Phục Vụ</h3>
                        <h3>10:00 AM - 11:30 PM</h3>
                    </div>
                  </div>
                  <div class="col-8">
                      <h1 class="card-title text-center font-color font mt-5">Vị Việt</h1>
                    <form action="/booking" method="POST">
                    <div class="form-container">
                        <div class="row">
                            <div class="col-6">
                                     <label for="name">Họ Tên</label>
                                     <input type="text" class="form-control" name="name" id="name">
                                         <br />                           
                                     <label for="phonenumber">Số điện thoại</label>
                                     <input type="text" class="form-control" name="phonenumber" id="phonenumber">
                                         <br />                           
                                     <label for="time">Thời gian</label>
                                     <input type="date" class="form-control" name="time" id="time">

                            </div>
                            <div class="col-6">
                                  <label for="gender" class="">Giới tính</label>
                                      <select class=" form-control">
                                          <option class="">Nam</option>
                                          <option class="">Nữ</option>                                       
                                      </select>                                        
                                      <br />                           
                                  <label for="quantity">Số khách</label>
                                  <input type="number" class="form-control" name="quantity" id="quantity"> 
                                      <br />                           
                                  <label for="detail">Thông tin thêm</label>
                                  <input type="text" class="form-control" name="detail" id="detail">                                                           
                            </div>
                            </div>
                            <div col-12>
                                <!-- Button trigger modal -->
                                
                                <button type="button" class="btn btn-white btn-md border border-secondary mt-4" style="width:180px" data-toggle="modal" data-target=".bd-example-modal-lg">
                                Chọn món trước</button>

                                <!-- Modal -->
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Thực đơn</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link text-dark active" href="#">Best seller</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-dark" href="#">Món mới</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-dark" href="#">Món chính</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-dark" href="#">Món chính</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-dark" href="#">Khai vị</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-dark" href="#">Tráng miệng</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-dark" href="#">Đồ uống</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-dark" href="#">Rượu</a>
                                            </li>
                                        </ul>
                                        <table class="table">
                                            
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Tên món</th>
                                                    <th scope="col">Giá</th>
                                                    <th scope="col">Hình ảnh</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                <label class="form-check-label" for="defaultCheck1">
                                                                <!-- Default checkbox -->
                                                            </label>
                                                        </div>
                                                    </th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                        <td>Larry</td>
                                                        <td>the Bird</td>
                                                        <td>@twitter</td>
                                                </tr>
                                                
                                            </tbody>
                                    </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Trở về</button>
                                        <button type="button" class="btn btn-primary">Lưu</button>
                                    </div>
                                    </div>
                                </div>
                                </div>

                                <div class= "mt-5  mr-4 float-right">
                                    <button type="button" class="btn btn-light btn-lg mt-5">
                                        <a href="" class="text-white">Xác Nhận</a>
                                    </button>
                                    <button type="button" class="btn btn-outline-light btn-lg bg-white border border-secondary mt-5">
                                        <a href="" class="text-dark">Hủy</a>
                                    </button>
                                        
                                </div>
                              
                                </div>
                        </div>
                          
                      
                    </form>
                </div>
            </div>
        </div>


        <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>