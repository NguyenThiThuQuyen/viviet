@extends('guest.layout')
@section('content')

<title>Thực Đơn</title>


<div class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <!-- <th scope="col">Mã món ăn</th> -->
                <th scope="col">Tên món ăn</th>
                <!-- <th scope="col">Hình ảnh</th> -->
                <th scope="col">Giá</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Tạm tính</th>
                <th scope="col">Điều chỉnh</th>
            </tr>
        </thead>
        <tbody>
        @foreach(Cart::content() as $item)
            <tr>
                <!-- <td>{{ $item->id }}</td> -->
                <td>{{ $item->name->name }}</td>
                <!-- <td>{{ $item->name->image }}</td> -->
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
        <a href="/menu" class="text-white" style="text-decoration: none;">Tiếp tục đặc món</a>
    </button>

    <div class="row mb-5">
        <div class="col-8"></div>
        <div class="col-4">
            <h4>TỔNG CỘNG</h4>
            <p class="container mt-2" style="border-bottom: 2px solid #222; width:100%;"></p>
            <div>
                <h5> Tổng tiền: {{Cart::subtotal()}}</h5>
            </div>                                
            <button type="button" class="btn btn-outline btn-lg navbar-bg btn-light mt-4">
                <a href="#" class="text-white" style="text-decoration: none;"><i class="fas fa-check mr-2"></i>TIẾN HÀNH ĐẶC BÀN</a>
          </button>
        </div>
    </div>

</div>







</div>
    </div>
@endsection