
@extends('admin.layout')

@section('content')
<title>Thêm mới nguyên liệu</title>
    

 
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
                                <td><i class="fas fa-atom mr-2"></i>Nguyên liệu</td>
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
                        <h2>THÊM MỚI NGUYÊN LIỆU</h2>
                    </div>
                    <div class="col-8">
                    <div class="form-container ml-5 mt-5">
                    <h5>Nhập thông tin:</h5>
                    <form action="{{ route('admin.materials.store') }}" method="post">
                        @csrf
                        <!-- <div class="form-group row mt-5">
                            <label for="manv" class="col-sm-2 col-form-label form_label">Mã loại</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="manv" id="manv">
                            </div>
                        </div> -->
                        <div class="form-group row mt-4">
                            <label for="name" class="col-sm-3 col-form-label form_label">Tên nguyên liệu</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>
                        <div class="form-group row mt-5">
                            <label for="typematerial_id" class="col-sm-3 col-form-label form_label">Loại nguyên liệu</label>
                            
                            <div class="col-sm-8">
                            <select class="custom-select" name="typematerial_id">
                                <option selected>Chọn</option>
                                @if(isset($typematerials))
                                @foreach($typematerials as $typematerial)
                                    <option value="{{ $typematerial->id }}">{{ $typematerial->name}}</option>
                                @endforeach
                                @endif
                            </select>
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