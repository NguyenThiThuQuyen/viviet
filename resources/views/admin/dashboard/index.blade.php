@extends('admin.layout')
@section('content')

  
<div class="container-fluid p-0">
<div id="slide" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slide" data-slide-to="0" class="active"></li>
            <li data-target="#slide" data-slide-to="1"></li>
            <li data-target="#slide" data-slide-to="2"></li>           
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active" >
                <img class="img-wrap" src="image/bn3.png" alt="">
                <div class="carousel-caption">
                    <h1 class="display-2" style="font-weight: 10">Vị Việt</h1>
                    <h2 class="font-text" style="font-size: 60px">Yêu thương quay về - là bếp lửa lên</h2>
                    <br>
                    <!-- @auth
                    <button type="button" class="btn btn-outline-light btn-lg bg-white"> <a href="/register" class="text-dark"> ĐĂNG KÝ</a></button>
                    <button type="button" class="btn btn-light btn-lg"> <a href="/login" class="text-white py-2"> ĐĂNG NHẬP</a></button>
                    @endauth -->
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-wrap" src="image/29.jpeg" alt="">
            </div>
            <div class="carousel-item">
                <img class="img-wrap" src="image/58.jpeg" alt="">
            </div>

        </div>
    </div>
</div>
@endsection  