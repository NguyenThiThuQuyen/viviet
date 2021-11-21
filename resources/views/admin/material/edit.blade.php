@extends('admin.stocklayout')
@extends('admin.layout')

@section('content')
<title>Sửa nguyên liệu</title>
@section('stock') 
            <div class="col-1"></div>
            <div class="col-9">
                <div class="row">
                    <div class="col-12 text-center mt-5">
                        <h3>SỬA NGUYÊN LIỆU</h3>
                    </div>
                    <div class="col-10">
                    <div class="form-container ml-5 mt-5">
                    <h5>Nhập thông tin:</h5>                    
                    <form action="{{ route('admin.materials.update', $material) }}" method="post">
                        @csrf
                        @method('PATCH')                       
                        <div class="form-group row mt-4">
                            <label for="name" class="col-sm-3 col-form-label form_label">Tên nguyên liệu</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" id="name" value="{{ $material->name }}">
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <label for="price" class="col-sm-3 col-form-label form_label">Giá</label>
                            <div class="col-sm-8">
                            <input type="number" min="0" class="form-control" name="price" id="price" value="{{ $material->currentPrice->price }}">
                            </div>
                        </div>               
                        <div class="form-group row float-right mr-5 mt-3" >
                            <div class="form-group form-check">
                            <button type="submit" class="btn btn_item mr-2">Lưu</button>
                            <button type="submit" class="btn border border-dark text-dark bg-light mr-4"><a href="#"></a>Hủy</button>                    
        
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