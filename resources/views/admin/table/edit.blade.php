@extends('admin.table.layout')
@extends('admin.layout')

  <title>Sửa thông tin bàn ăn</title>

@section('content')
@section('sidebar')
            <div class="col-1"></div>
            <div class="col-9">
                <div class="row">
                    <div class="col-12 text-center mt-5">
                        <h3>SỬA THÔNG TIN BÀN ĂN</h3>
                    </div>
                    <div class="col-10">
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

