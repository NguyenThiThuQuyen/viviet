
@extends('admin.layout')

@section('content')
<title>Loại món ăn</title>

<div class="container-fluid p-0">
        <div class="row mr-0">
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
                                <td><i class="fas fa-atom mr-2"></i><a href="/admin/dishes/">Món ăn</a></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-atom mr-2"></i><a href="/admin/typeofdishes">Loại món ăn</a></td>
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
                          
                            <a href="/admin/typeofdishes/create" class="mr-4 text-dark"><i class="fas fa-plus"></i> Thêm mới</a>
                            <a href="" class="mr-3 text-dark"><i class="fas fa-download"></i> Xuất excel</a>
                        </div>
                        <h2 class="text-center mt-5">CẬP NHẬT LOẠI MÓN ĂN</h2>
                    </div>
                    <div class="col-12 mt-4">

                      <div class="container">
                      <form action="" method="get" class="form-inline my-3">
                            <div class="form-group">
                                <input class="form-control-sm" name="key" placeholder="Tìm kiếm món ăn">
                            </div>
                            <button class="btn-sm btn-outline-dark mx-2" type="submit">Tìm kiếm</button>
                        </form>
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
                        @if(isset($typeofdishes))
                        @foreach($typeofdishes as $typeofdish)
                            <tr>
                              <!-- <th scope="row">1</th> -->
                              <td>{{ $typeofdish->id }}</td>
                              <td>{{ $typeofdish->name }}</td>
                              <td>

                                <a href="{{ route('admin.typeofdishes.show',$typeofdish ) }}" title="xem"><i class="far fa-eye"></i></a>
                                <a href="{{ route('admin.typeofdishes.edit', $typeofdish ) }}" title="sửa"><i class="fas fa-pen ml-3"></i></a>
                                  <form action="{{ route('admin.typeofdishes.destroy', $typeofdish) }}" method="post" class="d-inline">
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
                            {{$typeofdishes->appends(request()->all())->links()}}
                        </div>
                      </div>           
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

