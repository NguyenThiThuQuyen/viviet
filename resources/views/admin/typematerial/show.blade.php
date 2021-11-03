@extends('admin.stocklayout')
@extends('admin.layout')
@section('content')
<title>Xem loại nguyên liệu</title>
@section('stock') 
            <div class="col-10">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="form-group form-check float-right">
                            <a href="" class="mr-3 text-dark"><i class="fas fa-download"></i> Xuất excel</a>
                        </div>
                        <h3 class="text-center mt-5">DANH SÁCH LOẠI NGUYÊN LIỆU</h3>
                    </div>
                    <div class="col-12 mt-4">
                      <div class="container">
                        <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                              <th scope="col">Mã loại</th>
                              <th scope="col">Tên loại</th>                            
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($typematerials))
                        @foreach($typematerials as $typematerial)
                            <tr>
                              <td>{{ $typematerial->id }}</td>
                              <td>{{ $typematerial->name }}</td>                             
                            </tr>
                            @endforeach
                          @endif
                          </tbody>
                        </table>
                      </div>              
                    </div>
                </div>
            </div>
        </div>
  </div>

@endsection