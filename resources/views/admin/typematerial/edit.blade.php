
@extends('admin.layout')

@section('content')
<title>Sửa loại nguyên liệu</title>
    

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
                                <td><i class="fas fa-atom mr-2"></i><a href="/admin/materials/">Nguyên liệu</a></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-atom mr-2"></i><a href="/admin/typematerials">Loại nguyên liệu</a></td>
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
                        <h2>Sửa Loại Nguyên Liệu</h2>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-8">
                    <div class="form-container ml-5 mt-5">
                    <h5>Nhập thông tin:</h5>
                   
                    <!-- sửa đường dẫn, thêm tên biến -->
                    <!-- them method patch -->
                    <form action="{{ route('admin.typematerials.update', $typematerial) }}" method="post">
                        @csrf
                        @method('PATCH')
                     
                        <div class="form-group row mt-4">
                            <label for="name" class="col-sm-2 col-form-label form_label">Tên loại</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name" value="{{ $typematerial->name }}">
                            </div>
                        </div>
                        <div class="form-group row float-right mr-5 mt-3">
                            <div class="form-group form-check">
                            <button type="submit" class="btn btn_item mr-2">Lưu</button>
                            <button type="submit" class="btn border border-dark text-dark bg-light mr-3"><a href="#"></a>Hủy</button>                    
        
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

