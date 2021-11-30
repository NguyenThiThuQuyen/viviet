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
                        <h2 class="text-center mt-5">Chi Tiết Phiếu Đặt</h2>
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
                                <td><img src="{{ Storage::url($item->dishprice->dish->image) }}" alt=""  height="90" weight="85"></td>
                                <td>{{ $item->dishprice->price }}</td>
                                <td>{{ $item->quatity }}</td>
                                <td>{{ $item->dishprice->price * $item->quatity }}</td>
                                
                            </tr>
                        @endforeach
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



