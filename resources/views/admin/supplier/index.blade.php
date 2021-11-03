@extends('admin.stocklayout')
@extends('admin.layout')
@section('content')
<title>Nhà cung cấp</title>
@section('stock') 
            <div class="col-10">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="form-group form-check float-right">
                            <a href="/admin/suppliers/create" class="mr-4 text-dark"><i class="fas fa-plus"></i> Thêm mới</a>
                            <a href="" class="mr-3 text-dark"><i class="fas fa-download"></i> Xuất excel</a>
                        </div>
                        <h3 class="text-center mt-5">CẬP NHẬT NHÀ CUNG CẤP</h3>
                    </div>
                    <div class="col-12 mt-4">

                      <div class="container">
                        <button class=" btn btn_item mb-2 float-right"><a class="text-white" href="/admin/suppliers/show">Xem danh sách</a></button>
                        <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                              <!-- <th scope="col">STT</th> -->
                              <th scope="col">Mã nhà cung cấp</th>
                              <th scope="col">Tên nhà cung cấp</th>
                              <th scope="col">Địa chỉ</th>
                              <th scope="col">Số điện thoại</th>
                              <th scope="col">Điều chỉnh</th>                            
                            </tr>
                          </thead>
                          <tbody>
                        @if(isset($suppliers))
                        @foreach($suppliers as $supplier)
                            <tr>
                              <!-- <th scope="row">1</th> -->
                              <td>{{ $supplier->id }}</td>
                              <td>{{ $supplier->name }}</td>
                              <td>{{ $supplier->address }}</td>
                              <td>{{ $supplier->phonenumber }}</td>

                              <td>

                                <a href="{{ route('admin.suppliers.show', $supplier ) }}" title="Xóa"><i class="far fa-eye mr-3"></i></a>
                                <a href="{{ route('admin.suppliers.edit', $supplier ) }}" title="Sửa"><i class="fas fa-pen mx-1"></i></a>
                                <form action="{{ route('admin.suppliers.destroy', $supplier) }}" title="Xóa" method="post" class="d-inline">
                                  @csrf
                                  @method('DELETE')
                                  <button href="" type="submit" class="btn btn-white"><i class="fas fa-trash-alt"></i></button>
                                </form>
                              </td>
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


























   