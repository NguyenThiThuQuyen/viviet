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
                      <table class="table table-breceipted table-striped text-center">
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
                        @if(isset($receipts))
                        @foreach($receipts as $receipt)
                            <tr>
                                <td>{{ $receipt->id }}</td>
                                <td>{{ $receipt->staff->name ?? 'Chưa có' }}</td>
                                <td>{{ $receipt->supplier->name ?? 'Chưa có' }}</td>
                                <td>{{ $receipt->subtotal}}</td>
                                <td>
                                    
                                    <button class=" btn btn-secondary mx-3 px-2 float-left">
                                        <a class="text-white" href="{{ route('admin.receipts.show', $receipt ) }}">Xem</a>
                                    </button>
                                    @if($receipt->staff == null)
                                    <button class=" btn btn-success  px-2 float-left">
                                        <a class="text-white" href="{{ route('admin.receipts.confirm', $receipt ) }}">Xác nhận</a>
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