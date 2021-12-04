
@extends('admin.layout')

@section('content')
<title>Loại món ăn</title>

<div class="container-fluid p-0">
        <div class="row mr-0">
            <div class="col-2">         
                <div class="card-body">
                    <div class="card" style="height:680px">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col" class="bg-secondary text-white"><h5>Danh mục</h5></th>
                            </tr>
                        </thead>
                        <tbody class="bg-light">
                            <tr>
                                <td><i class="fas fa-atom mr-2"></i><a href="/admin/dishes/">Món ăn</a></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-atom mr-2"></i><a href="/admin/typeofdishes">Loại món ăn</a></td>
                            </tr>
                        </tbody>
                    </table>                                  
                </div>  
                </div>                               
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="form-group form-check float-right">
                            <a href="" class="mr-3 text-dark"><i class="fas fa-download"></i> Xuất excel</a>
                        </div>
                        <h2 class="text-center mt-5">XEM LOẠI MÓN ĂN</h2>
                    </div>
                    <div class="col-12 mt-4">

                      <div class="container">
                        <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                              <!-- <th scope="col">STT</th> -->
                              <th scope="col">Mã loại</th>
                              <th scope="col">Tên loại</th>                            
                            </tr>
                          </thead>
                          <tbody>
                      
                            <tr>
                              <!-- <th scope="row">1</th> -->
                              <td>{{ $typeofdish->id }}</td>
                              <td>{{ $typeofdish->name }}</td>
                            </tr>
                         
                          </tbody>
                        </table>
                        <button class=" btn btn_item mb-2"><a class="text-white" href="/admin/typeofdishes/">Trở về</a></button>
                      </div>           
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

