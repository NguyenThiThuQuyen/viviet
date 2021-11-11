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
                        <h3 class="text-center mt-5">CẬP NHẬT ĐƠN VỊ</h3>
                    </div>
                    <div class="col-12 mt-4">

                      <div class="container">
                        <button class=" btn btn_item mb-2 float-right"><a class="text-white" href="/admin/units/show">Xem danh sách</a></button>
                        <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                              <!-- <th scope="col">STT</th> -->
                              <th scope="col">Mã đơn vị</th>
                              <th scope="col">Tên đơn vị</th>
                              <th scope="col">Điều chỉnh</th>
                            
                            </tr>
                          </thead>
                          <tbody>
                        @if(isset($units))
                        @foreach($units as $unit)
                            <tr>
                              <!-- <th scope="row">1</th> -->
                              <td>{{ $unit->id }}</td>
                              <td>{{ $unit->unit }}</td>
                              <td>
                                <a href="{{ route('admin.units.edit', $unit ) }}" title="Sửa"><i class="fas fa-pen mr-4"></i></a>

                                <form action="{{ route('admin.units.destroy', $unit) }}" title="Xóa" method="post" class="d-inline">
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