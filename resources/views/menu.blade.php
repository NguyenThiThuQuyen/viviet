  
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


        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-5">
                    <h2 class="text-center">Thực Đơn Nhà Hàng</h2>
                </div>
            </div>
        </div>

    <div class="text-center mx-auto">
        <div class="mt-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                    <ul>
                            @if(isset($typeofdishes))
                            @foreach($typeofdishes as $typeofdish)
                        <li class="d-inline mr-4 ">
                            <button type="button" class="btn btn-outline-dark btn-lg btn-light mt-4">
                                <a href="{{ route('guest.menu.typeofdish', ['typeofdish' => $typeofdish]) }}" class="text-white" style="text-decoration: none;">{{ $typeofdish->name }}</a>
                            </button>
                        </li>
                            @endforeach
                            @endif
                    </ul>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </div>

        <div class="container mt-3" style="border-bottom: 2px solid #222; width:40%;"></div>

    </div>


        <div class="container">

            <div class="row padding">
                @if(isset($dishes))
                @foreach ($dishes as $dish)
                <div class="col-md-4 mt-5">
                    <div class="card">                       
                        <img class="img-wrap card-img-top" src="{{ Storage::url($dish->image) }}" alt="">                       
                        <div class="card-body p-3">                          
                            <h5 class="card-text text-center">{{ $dish->name }}</h5>
                            <p class="card-text text-center">{{ $dish->currentprice->price }} VND</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
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
