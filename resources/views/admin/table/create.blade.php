
@extends('admin.layout')

@section('content')
<title>Thêm mới bàn ăn</title>
    

 
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
                    <div class="col-12 text-center mt-5">
                        <h2>THÊM MỚI BÀN ĂN</h2>
                    </div>
                    <div class="col-8">
                    <div class="form-container ml-5 mt-5">
                    <h5>Nhập thông tin:</h5>
                    <form action="{{ route('admin.tables.store') }}" method="post">
                        @csrf
                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                        <div class="form-group row mt-4">
                            <label for="number" class="col-sm-3 col-form-label form_label">STT bàn ăn</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="number" id="number">
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <label for="seat" class="col-sm-3 col-form-label form_label">Số chỗ</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="seat" id="seat">
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