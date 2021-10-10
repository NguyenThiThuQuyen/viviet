@extends('admin.layout')

@section('content')
<title>Món ăn</title>


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
                                <td><i class="fas fa-atom mr-2"></i>Món ăn</td>
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
                            <a href="/admin/dishes/create" class="mr-4 text-dark"><i class="fas fa-plus"></i> Thêm mới</a>
                            <a href="" class="mr-3 text-dark"><i class="fas fa-download"></i> Xuất excel</a>
                        </div>
                        <h2 class="text-center mt-5">DANH SÁCH MÓN ĂN</h2>
                    </div>
                    <div class="col-12 mt-4">

                        <div class="container">
                        <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                              <!-- <th scope="col">STT</th> -->
                              <th scope="col">Mã món ăn</th>
                              <th scope="col">Tên món ăn</th>
                              <th scope="col">Tên loại</th>
                              <th scope="col">Hình ảnh</th>
                              <th scope="col">Giá</th>
                              <th scope="col">Mô tả</th>
                              <th scope="col">Điều chỉnh</th>                            
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($dishes))
                        @foreach($dishes as $dish)
                            <tr>
                              <!-- <th scope="row">1</th> -->
                                <td>{{ $dish->id }}</td>
                                <td>{{ $dish->name }}</td>
                                <td>{{ $dish->typeofdish->name??'error'}}</td>
                                <td>                            
                                    <img src="{{ Storage::url($dish->image) }}" alt=""  height="100" weight="80">
                                    <!-- <img src="{{ asset('public/hinhanh/'.$dish->image) }}" height="100" weight="80"> -->
                                </td>
                                <td>{{ $dish->currentprice->price }}</td>
                                <!-- <td>{{"gia"}}</td> -->
                                <td>{{ $dish->description }}</td>
                                <td>
                                    <a href="{{ route('admin.dishes.show', $dish ) }}"><i class="fas fa-eye mr-5"></i></a>
                                    <a href="{{ route('admin.dishes.edit', $dish ) }}"><i class="fas fa-pen mr-4"></i></a>

                                    <form action="{{ route('admin.dishes.destroy', $dish) }}" method="post" class="d-inline">
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

