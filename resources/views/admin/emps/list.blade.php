@extends('admin.layout')
@section('content')
    <title>Nhân Sự</title>

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
@endsection