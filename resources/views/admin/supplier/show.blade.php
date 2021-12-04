@extends('admin.stocklayout')
@extends('admin.layout')
@section('content')
<title>Xem thông tin nhà cung cấp</title>
@section('stock') 
            <div class="col-10">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="form-group form-check float-right">
                            <a href="" class="mr-3 text-dark"><i class="fas fa-download"></i> Xuất excel</a>
                        </div>
                        <h3 class="text-center mt-5">XEM THÔNG TIN NHÀ CUNG CẤP</h3>
                    </div>
                    <div class="col-12 mt-4">
                      <div class="container">
                      <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                              <!-- <th scope="col">STT</th> -->
                              <th scope="col">Mã nhà cung cấp</th>
                              <th scope="col">Tên nhà cung cấp</th>
                              <th scope="col">Địa chỉ</th>
                              <th scope="col">Số điện thoại</th>                          
                            </tr>
                          </thead>
                          <tbody>  
                            <tr>
                              <!-- <th scope="row">1</th> -->
                              <td>{{ $supplier->id }}</td>
                              <td>{{ $supplier->name }}</td>
                              <td>{{ $supplier->address }}</td>
                              <td>{{ $supplier->phonenumber }}</td>
                            </tr>
                           
                          </tbody>
                          </table>
                          <button class=" btn btn_item mb-2"><a class="text-white" href="/admin/suppliers/">Trở về</a></button>

                      </div>              
                    </div>
                </div>
            </div>
        </div>
  </div>

@endsection