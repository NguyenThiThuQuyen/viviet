@extends('admin.tablelayout')
@extends('admin.layout')

  <title>Bàn ăn</title>

@section('content')
@section('sidebar')
            <div class="col-10">
                <div class="row mr-0">
                    <div class="col-12 mt-3">
                        <div class="form-group form-check float-right">
                            <a href="/admin/tables/create" class="mr-4 text-dark"><i class="fas fa-plus"></i> Thêm mới</a>
                            <a href="" class="mr-3 text-dark"><i class="fas fa-download"></i> Xuất excel</a>
                        </div>
                        <h2 class="text-center mt-5">CẬP NHẬT BÀN ĂN</h2>
                    </div>
                    <div class="col-12 mt-4">
                      <div class="container">
                     
                        <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                              <!-- <th scope="col">STT</th> -->
                              <th scope="col">Mã bàn</th>
                              <th scope="col">STT bàn</th>
                              <th scope="col">Số chỗ</th>
                              <th scope="col">Điều chỉnh</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($tables))
                        @foreach($tables as $table)
                            <tr>
                              <!-- <th scope="row">1</th> -->
                                <td>{{ $table->id }}</td>
                                <td>{{ $table->number }}</td>
                                <td>{{ $table->seat }}</td>
                             
                              <td>
                               
                                    <a href="{{ route('admin.tables.show', $table ) }}" title="xem"><i class="far fa-eye mr-3"></i></a>
                                    <a href="{{ route('admin.tables.edit', $table ) }}" title="sửa"><i class="fas fa-pen mx-3 ml-3"></i></a>
                                    <form action="{{ route('admin.tables.destroy', $table) }}" method="post" class="d-inline">
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
                        <div>
                            {{$tables->appends(request()->all())->links()}}
                        </div>
                      </div>

              
                    </div>
                </div>
            </div>
        </div>
  </div>

@endsection
@endsection






