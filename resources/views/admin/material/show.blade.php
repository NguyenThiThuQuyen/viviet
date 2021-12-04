@extends('admin.stocklayout')
@extends('admin.layout')

@section('content')
<title>Xem danh sách nguyên liệu</title>
@section('stock') 
            <div class="col-10">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="form-group form-check float-right">
                            <!-- <a href="/admin/materials/create" class="mr-4 text-dark"><i class="fas fa-plus"></i> Thêm mới</a> -->
                            <a href="" class="mr-3 text-dark"><i class="fas fa-download"></i> Xuất excel</a>
                        </div>
                        <h3 class="text-center mt-5">XEM NGUYÊN LIỆU</h3>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="container">
                        <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                              <!-- <th scope="col">STT</th> -->
                              <th scope="col">Mã nguyên liệu</th>
                              <th scope="col">Tên nguyên liệu</th>
                              <th scope="col">Tên loại</th>
                
                            </tr>
                        </thead>
                        <tbody>
                      
                            <tr>
                              <!-- <th scope="row">1</th> -->
                              <td>{{ $material->id }}</td>
                              <td>{{ $material->name }}</td>
                              <!-- <td>{{ $material->typematerial['name']}}</td> -->
                              <td>{{ $material->typematerial->name??'error'}}</td>                         
                              
                            </tr>
                       
                        </tbody>
                        </table>
                        <button class=" btn btn_item mb-2"><a class="text-white" href="/admin/materials/">Trở về</a></button>
                      </div>

              
                    </div>
                </div>
            </div>
        </div>
  </div>

@endsection