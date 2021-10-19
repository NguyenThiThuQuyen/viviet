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
                    <h1 class="display-2">Vị Việt</h1>
                    <h2 class="font-text" style="font-size: 60px">Yêu thương quay về - là bếp lửa lên</h2>
                    <br>
                    @guest
                    <button type="button" class="btn btn-outline-light btn-lg bg-white"> <a href="/register" class="text-dark"> ĐĂNG KÝ</a></button>
                    <button type="button" class="btn btn-light btn-lg"> <a href="/login" class="text-white"> ĐĂNG NHẬP</a></button>
                    @endguest
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


<div class="bg-dark">
    <div class="container padding">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="text-center text-white">THỰC ĐƠN</h1> 
            </div>           
        </div>
        <div class="row padding">
            <div class="col-md-6 mt-5">
                <div class="card">
                    <img class="card-img-top" src="image/38.jpg" alt="">
                    <div class="card-body p-3">
                        <h4 class="card-text text-center">Best Seller</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="card">
                    <img class="card-img-top" src="image/36.jpg" alt="">
                    <div class="card-body p-3">
                        <h4 class="card-text text-center">Món Mới</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row padding">
            <div class="col-md-4 mt-5">
                <div class="card">
                    <img class="card-img-top" src="image/39.jpeg" alt="">
                    <div class="card-body p-3">
                        <h4 class="card-text text-center">Khai Vị</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card">
                    <img class="card-img-top" src="image/25.jpg" alt="">
                    <div class="card-body p-3">
                        <h4 class="card-text text-center">Món Chính</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card">
                    <img class="card-img-top" src="image/30.jpeg" alt="">
                    <div class="card-body p-3">
                        <h4 class="card-text text-center">Tráng Miệng</h4>
                    </div>
                </div>
            </div>
        </div>


        <div class="row padding">
            <div class="col-md-6 mt-5">
                <div class="card">
                    <img class="card-img-top" src="image/46.jpeg" alt="">
                    <div class="card-body p-3">
                        <h4 class="card-text text-center">Đồ Uống</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-5">
                <div class="card">
                    <img class="card-img-top" src="image/44.jpeg" alt="">
                    <div class="card-body p-3">
                        <h4 class="card-text text-center">Rượu</h4>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<div class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="text-center text-color">GIỚI THIỆU</h1> 
            </div>           
        </div>

        <div class="row border border-white">
            <div class="col-md-6 mt-5">
                <div class="card">
                    <img class="card-img-top" src="image/52.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <div>
                   <h4>VỊ VIỆT</h4>
                   <h4>Sự kết hợp tinh tế của phong cách ẩm thực </h4>
                   <h4 class="text-center">Châu Á và Việt Nam</h4>
                   <p>
                    Đến với nhà hàng chúng tôi, quý khách sẽ được trải nghiệm một phong cách ẩm thực hoàn toàn mới lạ,
                    với các món ăn từ thịt bò Wagyu thượng hạng,
                    cho đến có hương vị dân dã mà đậm đà của miền quê Việt Nam. </p>
                    
                    <p> Qua bàn tay điêu luyện của các đầu bếp bậc thầy, từng món ăn dậy lên hương vị làm hài lòng ngay
                    cả những thực khách khó tính nhất. </p>
                    
                    <p>Nhà hàng VỊ VIỆT mang lại những cảm nhận và những trải nghiệm khác nhau,
                     từ không khí ấm cúng gần gũi cho đến không gian sang trọng tinh tế.
                   </p>                   
                </div>
            </div>
        </div>


        <div class="row border border-white">
            <div class="col-md-6 mt-5">
                <div>
                   <h5>Phong cách "Meat Bar"</h5>
                   <p>
                    Trong những năm gần đây sự biến tấu từ phong cách “Meat Bar” châu Âu gần gũi,
                     ấm cúng trở nên vô cùng tinh tế qua bàn tay chế biến điêu luyện của các đầu bếp đã làm say lòng bao tín đồ ẩm thực.
                     Điểm nổi bật của phong cách ẩm thực này là bạn có thể thưởng thức thực đơn phong phú đa dạng từ nguyên liệu thịt bò thượng hạng,
                     cùng với các loại đồ uống thơm nồng đặc biệt được tinh chế thủ công một cách tỷ mỉ nhất.
                    </p>
                    <p>Hãy lên ngay kế hoạch buổi hẹn hò với những người bạn yêu thương nhất tại VỊ VIỆT nhé!</p>
                     <p>VỊ VIỆT - Yêu thương quay về là bếp lửa lên ! </p>
                   
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="card">
                    <img class="card-img-top" src="image/47.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="nav bg-dark" style="justify-content: space-evenly;">
        <ul class="nav-list">
            <li class="nav-item text-center text-white mt-3" style="list-style: none;">Hotline: 079.268.268</li>
            <li class="nav-item text-center text-white" style="list-style: none;">Website: viviet.com</li>
            <li class="nav-item text-center text-white" style="list-style: none;">Địa chỉ: Số 12, Hai Bà Trưng, Quận 1, TP Hồ Chí Minh</li>
        </ul>
    </div>
</div>

       
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html> -->
@endsection  