@extends('guest.layout')
@section('content')
<title>Giỏ hàng</title>
<div class="container mt-3">
    <div class="text-center"><h3><i>Giỏ hàng</i></h3></div>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Tên món ăn</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Giá</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Tạm tính</th>
                <th scope="col">Điều chỉnh</th>
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
                <td>
                    <a href="{{ route('guest.cart.decrease', ['row_id' => $item->rowId]) }}" class=""><i class="fas fa-minus mr-3"></i></a>
                    <a href="{{ route('guest.cart.increase', ['row_id' => $item->rowId]) }}" class=""><i class="fas fa-plus"></i></a>
                    <a href="{{ route('guest.delete-from-cart', ['row_id' => $item->rowId]) }}" class="btn btn-white"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>
    <button type="button" class="btn btn-outline btn-lg navbar-bg btn-light">
        <a href="/menu" class="text-white" style="text-decoration: none;">Tiếp tục đặt món</a>
    </button>
    <div class="row mb-5">
        <div class="col-8"></div>
        <div class="col-4">
            <h4>TỔNG CỘNG</h4>
            <p class="container mt-2" style="border-bottom: 2px solid #222; width:100%;"></p>
            <div>
                <h5> Tổng tiền: {{Cart::subtotal()}}</h5>
            </div>
            @if(Cart::count() != 0)
            <button type="button" class="btn btn-outline btn-lg navbar-bg btn-light mt-4">
                <a href="{{ route('guest.payment.show') }}" class="text-white" style="text-decoration: none;"><i class="fas fa-check mr-2"></i>TIẾN HÀNH ĐẶT BÀN</a>
          </button>
          @endif
        </div>
    </div>
</div>
</div>
    </div>
@endsection