
@extends('admin.layout')

@section('content')
<title>Sửa món ăn</title>
    

 
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
                    <div class="col-12 text-center mt-5">
                        <h2>THÊM MỚI món ăn</h2>
                    </div>
                    <div class="col-8">
                    <div class="form-container ml-5 mt-5">
                    <h5>Nhập thông tin:</h5>                    
                    <form action="{{ route('admin.dishes.update', $dish) }}" method="post">
                        @csrf
                        @method('PATCH')                       
                        <div class="form-group row mt-4">
                            <label for="name" class="col-sm-3 col-form-label form_label">Tên món ăn</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" id="name" value="{{ $dish->name }}">
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <label for="image" class="col-sm-3 col-form-label form_label">Hình ảnh</label>                            
                                <div class="form-group">
                                    <input type="file" class="form-control-file" name="image" id="image">
                                </div>                            
                        </div>

                        <div class="form-group row mt-4">
                            <label for="description" class="col-sm-3 col-form-label form_label">Mô tả</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="description" id="description">
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