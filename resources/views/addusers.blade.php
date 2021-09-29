<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới nhân viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <link type="text/css" rel="stylesheet" href="./main.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>
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

        .color2 {
            background-color: rgb(167, 192, 230);
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

        .btn {
            text-decoration: none;
            padding: 6px 25px;
            /* margin: 15px 25px; */
            font-size: 18px;
            /* margin-top: 95%; */
        }

        .btn_item {
            background-color: rgb(214, 91, 47);
            color: #fff;
        }
    </style>

</head>
<body>

<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./homepage.html">Trang Chủ <span class="sr-only">(current)</span></a>
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


    <div class="">
      <h2 class="text-center pt-5 pb-2">THÊM MỚI NHÂN VIÊN</h2>
       
    </div>

  
      
      <div class="row color2">
          <!-- <div class="col-12 color"> -->
              <p class="ml-3 my-2" style="font-size: 25px;">Thông tin nhân viên</p>
          <!-- </div> -->
      </div>
      <div class="container mt-5">
        <div class="row">  
          <div class="col-10">
              <div class="form-container ml-5">
                  <form action="/addusers" method="POST">
                      <div class="form-group row">
                        <label for="manv" class="col-sm-2 col-form-label form_label">Mã nhân viên</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="manv" id="manv">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="hoten" class="col-sm-2 col-form-label form_label">Họ tên</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="hoten" id="hoten">
                        </div>
                      </div>
                      <div class="form-group row">
                          <label for="birth" class="col-sm-2 col-form-label form_label">Ngày sinh</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control" name="birth" id="birth">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="sdt" class="col-sm-2 col-form-label form_label">Số điện thoại</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="sdt" id="sdt">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="vtlv" class="col-sm-2 col-form-label form_label">Giới tính</label>
                          <div class="col-sm-9">
                            <select class=" form-control">
                              <option class="">Nam</option>
                              <option class="">Nữ</option>                                       
                              </select>                                        
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="vtlv" class="col-sm-2 col-form-label form_label">Chức vụ</label>
                          <div class="col-sm-9">
                            <select class=" form-control">
                              <option class="">Nhân viên quản lý</option>
                              <option class="">Nhân viên thủ kho</option>
                              <option class="">Nhân viên phục vụ</option>
                              <option class="">Nhân viên quầy</option>
                              <option class="">Nhân viên bếp</option>
                              <option class="">Nhân viên pha chế</option>
                              </select>
                              
                          </div>
                        </div>
                      <div class="form-group row float-right mr-5 mt-3">
                        <div class="form-group form-check">
                          <button type="submit" class="btn btn_item mr-2">Lưu</button>
                          <button type="submit" class="btn border border-dark text-dark bg-light mr-3"><a href="./list_emp.html"></a>Hủy</button>                    
      
                        </div> 
                      </div>
                    </form>   
      </div>
  </div>

  <div class="col-2">         
    <div class="">
        <span class="border border-dark fas fa-user-tie fa-10x "></span>                                                  
    </div>
    
    <div class="mt-2">
        <i class="fas fa-folder-plus fa-2x "></i> &nbsp;
    </div>
                                                  
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>