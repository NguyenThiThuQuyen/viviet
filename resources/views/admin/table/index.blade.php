
@extends('admin.layout')

@section('content')
<title>Bàn ăn</title>


<div class="container-fluid p-0">
        <div class="row">
            <div class="col-2">         
                <div class="card-body">
                    <div class="card" style="height:680px">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col" class="bg-secondary text-white"><h5>Danh mục</h5></th>
                            </tr>
                        </thead>
                        <tbody class="bg-light">
                            <tr>
                                <td><i class="fas fa-atom mr-2"></i><a href="/admin/areas">Khu vực</a></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-atom mr-2"></i><a href="/admin/tables">Bàn ăn</a></td>
                            </tr>

                        </tbody>
                    </table>                                  
                </div>  
                </div>                               
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="form-group form-check float-right">
                            <a href="/admin/tables/create" class="mr-4 text-dark"><i class="fas fa-plus"></i> Thêm mới</a>
                            <a href="" class="mr-3 text-dark"><i class="fas fa-download"></i> Xuất excel</a>
                        </div>
                        <h2 class="text-center mt-5">Cập Nhật Bàn Ăn</h2>
                    </div>
                    <div class="col-12 mt-4">

                      <div class="container">
                      <button class=" btn btn_item mb-2 float-right"><a class="text-white" href="/admin/tables/show">Xem danh sách</a></button>
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
                                
                                <a href="{{ route('admin.tables.edit', $table ) }}"><i class="fas fa-pen mr-4"></i></a>

                                <form action="{{ route('admin.tables.destroy', $table) }}" method="post" class="d-inline">
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







