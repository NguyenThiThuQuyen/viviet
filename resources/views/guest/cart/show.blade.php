@extends('guest.layout')
@section('content')

<title>Thực Đơn</title>


<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Mã món ăn</th>
            <th scope="col">Tên món ăn</th>
            <th scope="col">Giá</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Tạm tính</th>
          </tr>
        </thead>
        <tbody>
        @foreach(Cart::content() as $item)
          <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name->name }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->qty }}</td>
            <td>{{ $item->subtotal }}</td>

            <td><a href="{{ route('admin.dishes.show', $item->name) }}" class="btn btn-default"></a>s</td>
            <td><a href="{{ route('admin.dishes.show', $item->name) }}" class="btn btn-primary"></a></td>
          </tr>
       
        </tbody>
      </table>

    <button type="button" class="btn btn-outline btn-lg navbar-bg btn-light">
          <a href="#" class="text-dark" style="text-decoration: none;">Tiếp tục mua hàng</a>
    </button>

    <div class="row">
        <div class="col-8"></div>
        <div class="col-4">
            <h4>TỔNG CỘNG</h4>
            <p class="container mt-2" style="border-bottom: 2px solid #222; width:100%;"></p>
            <div>
                Tổng tiền:
            </div>                                
            <button type="button" class="btn btn-outline btn-lg navbar-bg btn-light mt-5">
                <a href="#" class="text-dark" style="text-decoration: none;"><i class="fas fa-check mr-2"></i>TIẾN HÀNH THANH TOÁN</a>
          </button>
        </div>
    </div>

   </div>






</div>
    </div>
@endsection
