@extends('guest.layout')
@section('content')
<title>Hóa đơn</title>
<div class="container mt-3">
    <h3 class="text-center mb-4">Phiếu Thanh Toán</h3>
    <table class="table">
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
        @foreach($order->orderitems as $item)       
            <tr>
                <td>{{ $item->dishprice->dish->name }}</td>
                <td><img src="{{ Storage::url($item->dishprice->dish->image) }}" alt=""  height="90" weight="85"></td>
                <td>{{ $item->dishprice->price }}</td>
                <td>{{ $item->quatity }}</td>
                <td>{{ $item->dishprice->price * $item->quatity }}</td>
                
            </tr>
        @endforeach
        </tbody>
    </table>
    
    <div class="row mb-3">
        <div class="col-8"></div>
        <div class="col-4">
            <h4 class="">TỔNG CỘNG</h4>
            <p class="container mt-2" style="border-bottom: 2px solid #222; width:100%;"></p>
            <div class="mt-3">
                <h5> Tổng tiền: {{$order->subtotal}}</h5>
            </div>             
        </div>
    </div>
    <div class="text-center"><i>ViViet xin chân thành cảm ơn quý khách <i class="fas fa-heart"></i></i></div>
</div>
</div>
    </div>
@endsection