@extends('admin.stocklayout')
@extends('admin.layout')

@section('content')
<title>Loại nguyên liệu</title>
@section('stock') 
            <div class="col-10">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="form-group form-check float-right">
                            <a href="/admin/typematerials/create" class="mr-4 text-dark"><i class="fas fa-plus"></i> Thêm mới</a>
                            <a href="" class="mr-3 text-dark"><i class="fas fa-download"></i> Xuất excel</a>
                        </div>
                        <h3 class="text-center mt-5">CẬP NHẬT LOẠI NGUYÊN LIỆU</h3>
                    </div>
                    <div class="col-12 mt-4">

                      <div class="container">
                        <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                              <!-- <th scope="col">STT</th> -->
                              <th scope="col">Mã loại</th>
                              <th scope="col">Tên loại</th>
                              <th scope="col">Điều chỉnh</th>
                            
                            </tr>
                          </thead>
                          <tbody>
                        @if(isset($typematerials))
                        @foreach($typematerials as $typematerial)
                            <tr>
                              <!-- <th scope="row">1</th> -->
                              <td>{{ $typematerial->id }}</td>
                              <td>{{ $typematerial->name }}</td>
              
                              <td>

                                <a href="{{ route('admin.typematerials.show', $typematerial ) }}" title="xem"><i class="far fa-eye mr-3"></i></a>
                                <a href="{{ route('admin.typematerials.edit', $typematerial ) }}" title="sửa"><i class="fas fa-pen mx-3 ml-3"></i></a>
                                  <form action="{{ route('admin.typematerials.destroy', $typematerial) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button href="" type="submit" class="btn btn-white" title="xóa"><i class="fas fa-trash-alt"></i></button>
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


























   