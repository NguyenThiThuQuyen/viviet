@extends('admin.table.layout')
@extends('admin.layout')
    <title>Xem thông tin bàn ăn</title>
@section('content')
@section('sidebar')
            <div class="col-10">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="form-group form-check float-right">
                            <a href="" class="mr-3 text-dark"><i class="fas fa-download"></i> Xuất excel</a>
                        </div>
                        <h2 class="text-center mt-5">Danh Sách Bàn Ăn</h2>
                    </div>
                    <div class="col-12 mt-4">

                      <div class="container">
                        <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                              <th scope="col">Mã bàn</th>
                              <th scope="col">STT bàn</th>
                              <th scope="col">Số chỗ</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($tables))
                        @foreach($tables as $table)
                            <tr>
                                <td>{{ $table->id }}</td>
                                <td>{{ $table->number }}</td>
                                <td>{{ $table->seat }}</td>
                             
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







