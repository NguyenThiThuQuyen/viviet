  
@extends('layout')
@section('content')
    <title>Thực Đơn</title>
 
    <style>
    
        .text-color {
            color: rgb(214, 91, 47);
        }
      
        
        .btn {
            height: 50px;
            min-width: 200px;
        }

        .btn + .btn {
            margin-left: 20px;
        }

        .btn-outline-dark {
            color: rgb(214, 91, 47);
        }

        .btn-light:hover {
            background-color: rgb(230, 118, 77);
            
        }

        .outlinecolor {
            color: rgb(230, 118, 77);
        }

        .img-wrap {
            height: 250px;
            overflow: hidden;
        }

        .img-wrap img {
            height: auto;
            width: 100%;
        }  
        
        .btn-light1 {
            background-color: rgb(214, 91, 47);
            border: 1px solid white;
        }

        .btn-light1:hover {
            background-color: rgb(206, 80, 35);
            border: 1px solid white;
        }
    </style>

</head>
<body>

    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-5">
                    <h1 class="text-center">Thực Đơn Nhà Hàng</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mx-auto">
        <div class="mt-5">
            <button type="button" class="btn btn-outline-dark btn-lg btn-light">
                <a href="#bestseller" class="text-white" style="text-decoration: none;">Best Seller</a>
            </button>
            <button type="button" class="btn btn-outline-dark btn-lg btn-light">
                <a href="#monmoi" class="text-white" style="text-decoration: none;">Món Mới</a>
            </button>
            <button type="button" class="btn btn-outline-dark btn-lg btn-light">
                <a href="#monchinh" class="text-white" style="text-decoration: none;">Món Chính</a>
            </button>
        </div>
        <div class="mt-4">
            <button type="button" class="btn btn-outline-dark btn-lg btn-light">
                <a href="#khaivi" class="text-white" style="text-decoration: none;">Khai Vị</a>
            </button>
            <button type="button" class="btn btn-outline-dark btn-lg btn-light">
                <a href="#trangmieng" class="text-white" style="text-decoration: none;">Tráng Miệng</a>
            </button>
            <button type="button" class="btn btn-outline-dark btn-lg btn-light">
                <a href="#douong" class="text-white" style="text-decoration: none;">Đồ Uống</a>
            </button>
            <button type="button" class="btn btn-outline-dark btn-lg btn-light">
                <a href="#ruou" class="text-white" style="text-decoration: none;">Rượu</a>
            </button>
        </div>

        <div class="container mt-5" style="border-bottom: 2px solid #222; width:40%;"></div>

    </div>


    <div class="">
        <div class="container padding">
            <div class="row" id="bestseller">
                <div class="col-12 mt-5">
                    <!-- <h1 class="text-center">Best Seller</h1> -->
                    <h1 class="text-center">{{ $typeofdish->name }}</h1> 
                </div>           
            </div>
            <div class="row padding">
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <!-- <img class="img-wrap card-img-top" src="/image/38.jpg" alt=""> -->
                        <img class="img-wrap card-img-top" src="{{ Storage::url($dish->image) }}" alt="">
                        <div class="card-body p-3">
                            <!-- <h5 class="card-text text-center">Bò nướng đá</h5> -->
                            <h5 class="card-text text-center">{{ $dish->name }}</h5>
                            <!-- <p class="card-text text-center">Price: 300.000 VND</p> -->
                            <p class="card-text text-center">{{ $dish->currentprice->price }}</p>
                          
                        </div>
                    </div>
                </div>


        <div class="container mt-5" style="border-bottom: 2px solid #222; width:40%;"></div>




    <div class="container mt-5" style="border-bottom: 2px solid #222; width:40%;"></div>
    <div class="row">
        <div class="col-12 mt-3">
            <h4 class="text-center mt-2">Đặt bàn ngay hôm nay</h4> 
        </div>
        <div class="mx-auto">
            <button type="button" class="btn btn-light1 btn-lg mt-3 mb-5"><a href="" class="text-white"> ĐẶT NGAY</a></button>
        </div>           
    </div>
  
        </div>
    </div>

@endsection
