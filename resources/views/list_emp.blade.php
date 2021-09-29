<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhân Sự</title>
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


<div class="form-group form-check float-right mt-3">
        <a href="./addusers.html" class="mr-4 text-dark"><i class="fas fa-plus"></i> Thêm mới</a>
        <a href="" class="mr-3 text-dark"><i class="fas fa-download"></i> Xuất excel</a>
     </div>


    </div> 
        <h2 class="text-center mb-5" style="margin-top: 6%;">DANH SÁCH NHÂN VIÊN</h2>   
    </div>
<div class="container-fluid">
  <table class="table table-bordered table-striped text-center">
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">Tên</th>
        <th scope="col">Mã nhân viên</th>
        <th scope="col">Vị trí</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Điều chỉnh</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td> Nguyễn Văn A </td>
        <td> A123 </td>
        <td> Quản lý </td>
        <td> 0123456789 </td>
        <td><i class="fas fa-pen mr-5"></i><i class="fas fa-trash-alt"></i></td>
      </tr>

      <tr>
        <th scope="row">2</th>
        <td> Nguyễn Văn B </td>
        <td> A124 </td>
        <td> Nhân viên quầy </td>
        <td> 0123456789 </td>
        <td><i class="fas fa-pen mr-5"></i><i class="fas fa-trash-alt"></i></td>
      </tr>
    </tbody>
  </table>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>