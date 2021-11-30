@extends('admin.tablelayout')
@extends('admin.layout')

  <title>Đặt bàn</title>

@section('content')
@section('sidebar')
            <div class="col-10">
                <div class="row mr-0">
                    <div class="col-12 mt-3">
                        <div class="form-group form-check float-right">
                            <a href="" class="mr-3 text-dark"><i class="fas fa-download"></i> Xuất excel</a>
                        </div>
                        <h2 class="text-center mt-5">Cập Nhật Bàn Ăn</h2>
                    </div>
                    <div class="col-12 mt-4">

                      <div class="container">
                      <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                              <th scope="col">Mã hóa đơn</th>
                              <th scope="col">Tên khách hàng</th>
                              <th scope="col">Tên nhân viên</th>
                              <th scope="col">Tổng giá</th>
                              <th scope="col">Điều chỉnh</th>                            
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($orders))
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->customer->name }}</td>
                                <td>{{ $order->staff->name ?? 'Chưa có' }}</td>
                                <td>{{ $order->subtotal}}</td>
                                <td>
                                    
                             
                                    <button class=" btn btn-secondary mx-3 px-2 float-left">
                                        <a class="text-white" href="{{ route('admin.orders.show', $order ) }}">Xem</a>
                                    </button>
                                    @if($order->staff == null)
                                    <button class=" btn btn-success  px-2 float-left">
                                        <a class="text-white" href="{{ route('admin.orders.confirm', $order ) }}">Xác nhận</a>
                                    </button>
                                    @endif
                                   
                                </td>
                            </tr>
                        @endforeach
                        @endif
                        </tbody>
                        </table>
                      </div>

              
                    </div>
                </div>
            </div>
        </div>
  </div>

@endsection
@endsection



