@extends('admin.stocklayout')
@extends('admin.layout')

@section('content')
<title>Nguyên liệu</title>
@section('stock') 
            <div class="col-10">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="form-group form-check float-right">
                            <a href="/admin/materials/create" class="mr-4 text-dark"><i class="fas fa-plus"></i> Thêm mới</a>
                            <a href="" class="mr-3 text-dark"><i class="fas fa-download"></i> Xuất excel</a>

                        </div>
                        <h3 class="text-center mt-5">CẬP NHẬT NGUYÊN LIỆU</h3>
                    </div>
                    <div class="col-12 mt-4">

                      <div class="container">
                        <button class=" btn btn_item mb-2 float-right"><a class="text-white" href="/admin/materials/show">Xem danh sách</a></button>
                        <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                              <!-- <th scope="col">STT</th> -->
                              <th scope="col">Mã nguyên liệu</th>
                              <th scope="col">Tên nguyên liệu</th>
                              <th scope="col">Tên loại</th>
                              <th scope="col">Điều chỉnh</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($materials))
                        @foreach($materials as $material)
                            <tr>
                              <!-- <th scope="row">1</th> -->
                              <td>{{ $material->id }}</td>
                              <td>{{ $material->name }}</td>
                              <!-- <td>{{ $material->typematerial['name']}}</td> -->
                              <td>{{ $material->typematerial->name??'error'}}</td>

                              <td>
                                <a href="{{ route('admin.materials.edit', $material ) }}"><i class="fas fa-pen mr-4"></i></a>
                                <form action="{{ route('admin.materials.destroy', $material) }}" method="post" class="d-inline">
                                  @csrf
                                  @method('DELETE')
                                  <button href="" type="submit" class="btn btn-white"><i class="fas fa-trash-alt"></i></button>
                                </form>
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