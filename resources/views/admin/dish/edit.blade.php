
@extends('admin.layout')

@section('content')
<title>Sửa món ăn</title>
    

 
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
                    <div class="col-12 text-center mt-5">
                        <h2>SỬA MÓN ĂN</h2>
                    </div>
                    <div class="col-8">
                    <div class="form-container ml-5 mt-5">
                    <h5>Nhập thông tin:</h5>                    
                    <form action="{{ route('admin.dishes.update',['dish' => $dish]) }}" method="post" enctype="multipart/form-data">
                    <!-- <form action="{{ route('admin.dishes.update', $dish) }}" method="post"> -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        @csrf
                        @method('PATCH')                       
                        <div class="form-group row mt-4">
                            <label for="name" class="col-sm-3 col-form-label form_label">Tên món ăn</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" id="name" value="{{ $dish->name }}">
                            </div>
                        </div>
                        <!-- <div class="form-group row mt-4">
                            <label for="image" class="col-sm-3 col-form-label form_label">Hình ảnh</label>
                            <div class="form-group ml-3 mt-2">  
                                <input type="file" class="form-control-file" name="image" id="image" value="{{ $dish->image }}">
                            </div>
                        </div> -->

                        <div class="form-group row mt-4">
                            <label for="price" class="col-sm-3 col-form-label form_label">Giá</label>
                            <div class="col-sm-8">
                            <input type="number" min="0" class="form-control" name="price" id="price" value="{{ $dish->currentPrice->price }}">
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <label for="description" class="col-sm-3 col-form-label form_label">Mô tả</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="description" id="description" value="{{ $dish->description }}">
                            </div>
                        </div>
                        <div class="form-group row float-right mr-5 mt-3" >
                            <div class="form-group form-check">
                            <button type="submit" class="btn btn_item">Lưu</button>
                            <button type="submit" class="btn border border-dark text-dark bg-light"><a href="#"></a>Hủy</button>                    
        
                            </div> 
                        </div>
                    </form>   
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection