@extends('admin.tablelayout')
@extends('admin.layout')

  <title>Đặt bàn</title>

@section('content')
@section('sidebar')
            <div class="col-10">
                <div class="row mr-0">
                    <div class="col-12 mt-1">
                        <div class="form-group form-check float-right">
                            <a href="" class="mr-3 text-dark"><i class="fas fa-download"></i> Xuất excel</a>
                        </div>
                        <h2 class="text-center mt-5">CHI TIẾT PHIẾU ORDER</h2>
                    </div>
                    <div class="col-12 mt-4">

                      <div class="container">
                          <p>Mã hóa đơn: {{ $order->id }}</p>
                          <p>Tên khách hàng: {{ $order->customer->name }}</p>
                          <p>Tên nhân viên: {{ $order->staff->name ?? 'Chưa có' }}</p>
                          <p>Thời gian tạo: {{ $order->created_at }}</p>
                      </div>
              
                    </div>
    
               
                    <div class="col-12 mt-4">
                      <div class="container">
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
                                <td><img src="{{ Storage::url($item->dishprice->dish->image) }}" alt=""  height="100" weight="100"></td>
                                <td>{{ $item->dishprice->price }}</td>
                                <td>{{ $item->quatity }}</td>
                                <td>{{ $item->dishprice->price * $item->quatity }}</td>                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                      </div>
                      <div class="row mb-3">
        <div class="col-8">
       

        </div>
        <div class="col-4">
            <h4 class="">TỔNG CỘNG</h4>
            <p class="container mt-2" style="border-bottom: 2px solid #222; width:100%;"></p>
            <div class="mt-3">
                <h5> Tổng tiền: {{$order->subtotal}}</h5>
            </div>             
        </div>
        </div>
        <button class=" btn btn_item ml-5 mb-2"><a class="text-white" href="/admin/orders/">Trở về</a></button>
                    

              
                    </div>
                </div>
            </div>
        </div>
  </div>

@endsection
@endsection



