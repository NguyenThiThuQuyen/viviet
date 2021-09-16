<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <meta charset="uft-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <link type="text/css" rel="stylesheet" href="./main.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    * {
            box-sizing: border-box;
        }

        html, body {
            margin: 0;
            padding: 0;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
        }

       body {
            background-image: url(image/5.jpg);
            backdrop-filter: blur(3px);
        }

        .font-color {
            color: rgb(214, 91, 47);
            font-size: 48px;
            font-weight: bold;
        
        }

        .form-container {
            max-width: 600px;
            min-height: 700px;
            padding: 32px;
            margin: 0px auto 0 auto;
            background-color: #ffff;
            font-weight: 545;
        }

        .btn {
            text-decoration: none;
            padding: 10px 42px;
            margin: 15px 25px;
            font-size: 20px;
        }

        .btn_item {
            background-color: rgb(214, 91, 47);
            color: #fff;
        }

        .color {
            /* margin-top: 100px; */
            color: rgb(214, 91, 47);
        }


    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">                               
            </div>
            <div class="col-6">
                <div class="card-body">                   
                    <form class="form-container" style="min-height:550px; padding: 40px;" action="/register" method="POST">
                        <div class="text-center color">
                            <p>Welcome to viviet.com <i class="fas fa-heart color"></i></p>
                        </div>
                        <h1 class="card-title text-center font-color">Create Account</h1>
                        <br>
                        <div>                         
                            <label for="username">User Name</label>
                            <input type="text" class="form-control" name="username" id="username">
                                <br />
                            <label for="sdt">Phone Number</label>
                            <input type="text" class="form-control" name="sdt" id="sdt">                           
                                <br />                           
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                                <br />
                            <label for="date">Date of Birth</label>
                            <input type="date" class="form-control" name="day" id="date">
                                    <br />
                            <div class="form-group form-check">
                               <button type="submit" class="btn btn_item float-right">Submit</button>
                            </div>
                            <div class="card-body" style="margin-left:1%">
                            @if ($errors->any())
                            <div class="alert-danger bg-white text-danger">
                                <ul style="list-style:none;">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>   
                            <div class="text-center" style="margin-top: 100px;">
                                <h6>Already registered? <a href="/login" class="color">Log in</a></h6>

                            </div> 
                           
                        </div>
                    </div>
                                                                                                                                               
                   </form>
                   
                </div>
        </div>

    </div>


    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>