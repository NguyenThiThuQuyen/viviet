
@extends('admin.layout')

@section('content')
<title>Thêm mới loại món ăn</title>
    

 

 
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
                                <td><i class="fas fa-atom mr-2"></i><a href="/admin/dishes">Món ăn</a></td>
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
                        <h2>Thêm Mới Loại Món Ăn</h2>
                    </div>
                    <div class="col-8">
                    <div class="form-container ml-5 mt-5">
                    <h5>Nhập thông tin:</h5>
                    <form action="{{ route('admin.typeofdishes.store') }}" method="post">
                        @csrf
                        <!-- <div class="form-group row mt-5">
                            <label for="manv" class="col-sm-2 col-form-label form_label">Mã loại</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="manv" id="manv">
                            </div>
                        </div> -->
                        <div class="form-group row mt-4">
                            <label for="name" class="col-sm-2 col-form-label form_label">Tên loại</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name">
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

