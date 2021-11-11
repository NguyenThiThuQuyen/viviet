@extends('admin.stocklayout')
@extends('admin.layout')

@section('content')
<title>Thêm mới đơn vị</title>
@section('stock')    
            <div class="col-1"></div>
            <div class="col-9">
                <div class="row">
                    <div class="col-12 text-center mt-5">
                        <h3>THÊM ĐƠN VỊ TÍNH</h3>
                    </div>
                    <div class="col-10">
                    <div class="form-container ml-5 mt-5">
                    <h5>Nhập thông tin:</h5>
                    <form action="{{ route('admin.units.store') }}" method="post">
                        @csrf
                        <div class="form-group row mt-4">
                            <label for="unit" class="col-sm-3 col-form-label form_label">Tên đơn vị</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="unit" id="unit">
                            </div>
                        </div>
                        <div class="form-group row float-right mr-5 mt-3">
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
@endsection

