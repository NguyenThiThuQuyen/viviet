@extends('admin.stocklayout')
@extends('admin.layout')

@section('content')
<title>Đơn vị tính</title>
@section('stock') 
            <div class="col-10">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="form-group form-check float-right">
                            <a href="{{ route('admin.units.create') }}" class="mr-4 text-dark"><i class="fas fa-plus"></i> Thêm mới</a>
                            <a href="" class="mr-3 text-dark"><i class="fas fa-download"></i> Xuất excel</a>
                        </div>
                        <h3 class="text-center mt-5">XEM ĐƠN VỊ TÍNH</h3>
                    </div>
                    <div class="col-12 mt-4">

                      <div class="container">
                        <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                              <!-- <th scope="col">STT</th> -->
                              <th scope="col">Mã đơn vị</th>
                              <th scope="col">Tên đơn vị</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                      
                            <tr>
                              <!-- <th scope="row">1</th> -->
                              <td>{{ $unit->id }}</td>
                              <td>{{ $unit->unit }}</td>
                              
                            </tr>
                          
                        </tbody>
                        </table>
                        <button class=" btn btn_item mb-2"><a class="text-white" href="/admin/units/">Trở về</a></button>

                      </div>

              
                    </div>
                </div>
            </div>
        </div>
  </div>

  @endsection