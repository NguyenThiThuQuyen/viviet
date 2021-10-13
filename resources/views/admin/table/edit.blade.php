
@extends('admin.layout')

@section('content')
<title>Sửa thông tin bàn ăn</title>
    

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
                        <h2>Sửa Thông Tin Bàn Ăn</h2>
                    </div>
                    <div class="col-8">
                    <div class="form-container ml-5 mt-5">
                    <h5>Nhập thông tin:</h5>
                   
                    <!-- sửa đường dẫn, thêm tên biến -->
                    <!-- them method patch -->
                    <form action="{{ route('admin.tables.update', $table) }}" method="post">
                        @csrf
                        @method('PATCH')
                     
                        <div class="form-group row mt-4">
                            <label for="seat" class="col-sm-3 col-form-label form_label">Số chỗ</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="seat" id="seat" value="{{ $table->seat }}">
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

