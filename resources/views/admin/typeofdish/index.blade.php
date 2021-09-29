
@extends('admin.layout')

@section('content')
<title>Loại món ăn</title>

type
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
                                <td><i class="fas fa-atom mr-2"></i><a href="/admin/materials/">Nguyên liệu</a></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-atom mr-2"></i>Loại nguyên liệu</td>
                            </tr>
                            <tr>
                                <td><i class="far fa-calendar-minus mr-2"></i>Nhập hàng</td>
                            </tr>
                            <tr>
                                <td><i class="far fa-calendar-minus mr-2"></i>Xuất hàng</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-hourglass-end mr-2"></i>Hàng tồn kho</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-house-user mr-2"></i>Nhà cung cấp</td>
                            </tr>
                            <tr>
                                <td><i class="fab fa-elementor mr-2"></i>Thống kê kho hàng</td>
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
                        <h2 class="text-center mt-5">DANH SÁCH LOẠI MÓN ĂN</h2>
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
                        @if(isset($typeofdishes))
                        @foreach($typeofdishes as $typeofdish)
                            <tr>
                              <!-- <th scope="row">1</th> -->
                              <td>{{ $typeofdish->id }}</td>
                              <td>{{ $typeofdish->name }}</td>
                              <td>
                                <a href="{{ route('admin.typeofdishes.edit', $typeofdish ) }}"><i class="fas fa-pen mr-5"></i></a>

                                <form action="{{ route('admin.typeofdishes.destroy', $typeofdish) }}" method="post" class="d-inline">
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

