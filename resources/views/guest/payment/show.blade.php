@extends('guest.layout')
@section('content')

<div class="container-fluid">
    <div class="row mt-4 ml-1">
        <div class="col-5 mb-5" style="border: 1px solid">
        <form action="{{ route('guest.payment.store') }}" method="POST" class="mt-3" >
           @csrf
        <h4 class="text-center mt-1"><i>Thông tin khách hàng</i></h4>

            <div class="form-group row mt-4 ml-3">
            <label for="name" class="col-sm-3 col-form-label form_label">Họ Tên</label>
                <div class="col-sm-11">                          
                    <input type="text" class="form-control" name="name" id="name">                               
                </div>
            </div>
            <div class="form-group row mt-3 ml-3 mb-5">
            <label for="email" class="col-sm-3 col-form-label form_label">Email</label>
                <div class="col-sm-11">
                    <input type="email" class="form-control" name="email" id="email">                              
                </div>
            </div>
            <button type="submit" class="btn btn-outline btn-lg navbar-bg btn-light text-white mr-5 float-right">
            ĐẶT MÓN

            </button>
        </form>
        </div>

        <div class="col-7">
        <h4 class="text-center">Đơn hàng</h4>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">Tên món ăn</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Tạm tính</th>
                </tr>
            </thead>
            <tbody>
            @foreach(Cart::content() as $item)       
                <tr>
                    <td>{{ $item->name->name }}</td>
                    <td><img src="{{ Storage::url($item->name->image) }}" alt=""  height="90" weight="85"></td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->qty }}</td>
                    <td>{{ $item->subtotal }}</td>
                </tr>

            @endforeach
            </tbody>
        </table>
            <div class="row mb-5">
                <div class="col-8"></div>
                <div class="col-4">
                    <h4>TỔNG CỘNG</h4>
                    <p class="container mt-2" style="border-bottom: 2px solid #222; width:100%;"></p>
                    <div>
                        <h5> Tổng tiền: {{Cart::subtotal()}}</h5>
                    </div>  
                    <!-- <button type="button" class="btn btn-outline btn-lg navbar-bg btn-light mt-4">
                        <a href="{{ route('guest.payment.show') }}" class="text-white" style="text-decoration: none;"><i class="fas fa-check mr-2"></i>TIẾN HÀNH ĐẶC BÀN</a>
                </button> -->
                </div>
            </div>
        </div>

    </div>
</div>

                    
                

            </div>
        </div>
@endsection