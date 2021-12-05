@extends('admin.stocklayout')
@extends('admin.layout')

@section('content')
<title>Thêm nhà cung cấp</title>
@section('stock') 
            <div class="col-1"></div>
            <div class="col-9">
                <div class="row">
                    <div class="col-12 text-center mt-5">
                        <h3>THÊM MỚI NHÀ CUNG CẤP</h3>
                    </div>
                    <div class="col-10">
                    <div class="form-container ml-5 mt-5">
                    <h5>Nhập thông tin:</h5>
                    <form action="{{ route('admin.suppliers.store') }}" method="post">
                        @csrf
                        <div class="form-group row mt-4">
                            <label for="name" class="col-sm-3 col-form-label form_label">Tên nhà cung cấp</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>
                        <div class="form-group row mt-5">
                            <label for="address" class="col-sm-3 col-form-label form_label">Địa chỉ</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="address" id="address" placeholder="Số nhà, tên đường, xã/phường, quận/huyên, tỉnh/TP">
                            </div>
                        </div>
                        <div class="form-group row mt-5">
                            <label for="phonenumber" class="col-sm-3 col-form-label form_label">Số điện thoại</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="phonenumber" id="phonenumber">
                            </div>
                        </div>
                        <div class="form-group row float-right mr-5 mt-3">
                            <div class="form-group form-check">
                            <button type="submit" class="btn btn_item mr-2">Lưu</button>
                            <button type="submit" class="btn btn-secondary mr-4"><a href="#"></a>Hủy</button>                    
        
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

