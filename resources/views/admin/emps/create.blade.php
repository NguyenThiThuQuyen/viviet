@extends('admin.layout')

@section('content')
    <title>Thêm mới nhân viên</title>

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


@endsection