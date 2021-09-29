  
@extends('guest.layout')
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
                    <h1 class="text-center">Best Seller</h1> 
                </div>           
            </div>
            <div class="row padding">
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <img class="img-wrap card-img-top" src="/image/38.jpg" alt="">
                        <div class="card-body p-3">
                            <h5 class="card-text text-center">Bò nướng đá</h5>
                            <p class="card-text text-center">Price: 300.000 VND</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <img class="img-wrap card-img-top" src="/image/55.jpg" alt="">
                        <div class="card-body p-3">
                            <h5 class="card-text text-center">Rump Steak</h5>
                            <p class="card-text text-center">Price: 280.000 VND</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <img class="img-wrap card-img-top" src="/image/54.jpg" alt="">
                        <div class="card-body p-3">
                            <h5 class="card-text text-center">Rib Eye Steak</h5>
                            <p class="card-text text-center">Price: 300.000 VND</p>
                        </div>
                    </div>
                </div>
            </div>

        <div class="container mt-5" style="border-bottom: 2px solid #222; width:40%;"></div>


            <div class="row" id="monmoi">
                <div class="col-12 mt-5">
                    <h1 class="text-center">Món mới</h1> 
                </div>           
            </div>
            <div class="row padding">
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <img class="img-wrap card-img-top" src="/image/76.jpg" alt="">
                        <div class="card-body p-3">
                            <h5 class="card-text text-center">Salad trái cây</h5>
                            <p class="card-text text-center">Price: 150.000 VND</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <img class="img-wrap card-img-top" src="/image/65.jpg" alt="">
                        <div class="card-body p-3">
                            <h5 class="card-text text-center">Spaghetti sốt hải sản</h5>
                            <p class="card-text text-center">Price: 160.000 VND</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <img class="img-wrap card-img-top" src="/image/75.jpg" alt="">
                        <div class="card-body p-3">
                            <h5 class="card-text text-center">Súp bí đỏ hải sản</h5>
                            <p class="card-text text-center">Price: 150.000 VND</p>
                        </div>
                    </div>
                </div>
            </div>


        <div class="container mt-5" style="border-bottom: 2px solid #222; width:40%;"></div>
            <div class="row" id="monchinh">
                <div class="col-12 mt-5">
                    <h1 class="text-center">Thực đơn các món ăn chính</h1> 
                </div>           
            </div>
            <div class="row padding">
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <img class="img-wrap card-img-top" src="/image/60.png" alt="">
                        <div class="card-body p-3">
                            <h5 class="card-text text-center">Salad cá hồi</h5>
                            <p class="card-text text-center">Price: 180.000 VND</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <img class="img-wrap card-img-top" src="/image/63.png" alt="">
                        <div class="card-body p-3">
                            <h5 class="card-text text-center">Salad bơ</h5>
                            <p class="card-text text-center">Price: 160.000 VND</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-5">
                    <div class="card">
                        <img class="img-wrap card-img-top" src="/image/59.jpg" alt="">
                        <div class="card-body p-3">
                            <h5 class="card-text text-center">Spaghetti sốt bò</h5>
                            <p class="card-text text-center">Price: 180.000 VND</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <img class="img-wrap card-img-top" src="/image/64.jpg" alt="">
                        <div class="card-body p-3">
                            <h5 class="card-text text-center">Spaghetti sốt kem</h5>
                            <p class="card-text text-center">Price: 160.000 VND</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <img class="img-wrap card-img-top" src="/image/66.jpg" alt="">
                        <div class="card-body p-3">
                            <h5 class="card-text text-center">Bruschetta</h5>
                            <p class="card-text text-center">Price: 150.000 VND</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <img class="img-wrap card-img-top" src="/image/67.jpg" alt="">
                        <div class="card-body p-3">
                            <h5 class="card-text text-center">Wiener Schnitzel</h5>
                            <p class="card-text text-center">Price: 150.000 VND</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <img class="img-wrap card-img-top" src="/image/68.jpg" alt="">
                        <div class="card-body p-3">
                            <h5 class="card-text text-center">Ốc sên nướng Pháp</h5>
                            <p class="card-text text-center">Price: 150.000 VND</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-5">
                    <div class="card">
                        <img class="img-wrap card-img-top" src="/image/69.jpg" alt="">
                        <div class="card-body p-3">
                            <h5 class="card-text text-center">Súp hành tây</h5>
                            <p class="card-text text-center">Price: 150.000 VND</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <img class="img-wrap card-img-top" src="/image/70.jpg" alt="">
                        <div class="card-body p-3">
                            <h5 class="card-text text-center">Beefsteak sốt tiêu đen</h5>
                            <p class="card-text text-center">Price: 220.000 VND</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <img class="img-wrap card-img-top" src="/image/71.jpg" alt="">
                        <div class="card-body p-3">
                            <h5 class="card-text text-center">Cá hồi sốt bơ chanh</h5>
                            <p class="card-text text-center">Price: 160.000 VND</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <img class="img-wrap card-img-top" src="/image/72.png" alt="">
                        <div class="card-body p-3">
                            <h5 class="card-text text-center">Dimsum</h5>
                            <p class="card-text text-center">Price: 150.000 VND</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <img class="img-wrap card-img-top" src="/image/73.jpg" alt="">
                        <div class="card-body p-3">
                            <h5 class="card-text text-center">Bánh bột lộc</h5>
                            <p class="card-text text-center">Price: 150.000 VND</p>
                        </div>
                    </div>
                </div>
            </div>

        <div class="container mt-5" style="border-bottom: 2px solid #222; width:40%;"></div>

            
        <div class="row" id="khaivi">
            <div class="col-12 mt-5">
                <h1 class="text-center">Khai vị</h1> 
            </div>           
        </div>
        <div class="row padding">
            <div class="col-md-4 mt-5">
                <div class="card">
                    <img class="img-wrap card-img-top" src="/image/77.jpg" alt="">
                    <div class="card-body p-3">
                        <h5 class="card-text text-center">Hương sen</h5>
                        <p class="card-text text-center">Price: 120.000 VND</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card">
                    <img class="img-wrap card-img-top" src="/image/78.jpg" alt="">
                    <div class="card-body p-3">
                        <h5 class="card-text text-center">Jump</h5>
                        <p class="card-text text-center">Price: 140.000 VND</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card">
                    <img class="img-wrap card-img-top" src="/image/79.jpg" alt="">
                    <div class="card-body p-3">
                        <h5 class="card-text text-center">Ribeye</h5>
                        <p class="card-text text-center">Price: 140.000 VND</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="container mt-5" style="border-bottom: 2px solid #222; width:40%;"></div>

            
        <div class="row" id="trangmieng">
            <div class="col-12 mt-5">
                <h1 class="text-center">Tráng miệng</h1> 
            </div>           
        </div>
        <div class="row padding">
            <div class="col-md-4 mt-5">
                <div class="card">
                    <img class="img-wrap card-img-top" src="/image/85.jpg" alt="">
                    <div class="card-body p-3">
                        <h5 class="card-text text-center">Hương sen</h5>
                        <p class="card-text text-center">Price: 120.000 VND</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card">
                    <img class="img-wrap card-img-top" src="/image/87.jpg" alt="">
                    <div class="card-body p-3">
                        <h5 class="card-text text-center">Jump</h5>
                        <p class="card-text text-center">Price: 140.000 VND</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card">
                    <img class="img-wrap card-img-top" src="/image/86.jpg" alt="">
                    <div class="card-body p-3">
                        <h5 class="card-text text-center">Ribeye</h5>
                        <p class="card-text text-center">Price: 140.000 VND</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5" style="border-bottom: 2px solid #222; width:40%;"></div>

        <div class="row" id="douong">
            <div class="col-12 mt-5">
                <h1 class="text-center">Đồ uống</h1> 
            </div>           
        </div>
        <div class="row padding">
            <div class="col-md-4 mt-5">
                <div class="card">
                    <img class="img-wrap card-img-top" src="/image/81.jpg" alt="">
                    <div class="card-body p-3">
                        <h5 class="card-text text-center">Strawberry fruit</h5>
                        <p class="card-text text-center">Price: 120.000 VND</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card">
                    <img class="img-wrap card-img-top" src="/image/84.jpg" alt="">
                    <div class="card-body p-3">
                        <h5 class="card-text text-center">trumb</h5>
                        <p class="card-text text-center">Price: 120.000 VND</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card">
                    <img class="img-wrap card-img-top" src="/image/83.jpg" alt="">
                    <div class="card-body p-3">
                        <h5 class="card-text text-center">Ép thơm</h5>
                        <p class="card-text text-center">Price: 120.000 VND</p>
                    </div>
                </div>
            </div>
        </div>

    <div class="container mt-5" style="border-bottom: 2px solid #222; width:40%;"></div>


    <div class="row" id="ruou">
        <div class="col-12 mt-5">
            <h1 class="text-center">Rượu</h1> 
        </div>           
    </div>
    <div class="row padding">
        <div class="col-md-4 mt-5">
            <div class="card">
                <img class="img-wrap card-img-top" src="/image/88.jpg" alt="">
                <div class="card-body p-3">
                    <h5 class="card-text text-center">Visan</h5>
                    <p class="card-text text-center">Price: 1.120.000 VND</p>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <div class="card">
                <img class="img-wrap card-img-top" src="/image/89.jpg" alt="">
                <div class="card-body p-3">
                    <h5 class="card-text text-center">Amore</h5>
                    <p class="card-text text-center">Price: 920.000 VND</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <div class="card">
                <img class="img-wrap card-img-top" src="/image/90.jpg" alt="">
                <div class="card-body p-3">
                    <h5 class="card-text text-center">Callac</h5>
                    <p class="card-text text-center">Price: 2.320.000 VND</p>
                </div>
            </div>
        </div>
    </div>

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
