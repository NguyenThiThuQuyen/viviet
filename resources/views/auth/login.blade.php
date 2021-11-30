
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
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
                background-color: rgb(204, 103, 67);
            }

            .font-color {
                color: rgb(214, 91, 47);
                font-size: 80px;
                font-weight: bold;
                /* margin-top: 80px; */
            }

            .form-container {
                max-width: 550px;
                padding: 32px;
                margin: 0px auto 0 auto;
                background-color: #ffff;
                font-weight: 545;
            }



            .from-control {
                padding: 8px 0;
                display: flex;

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
                /* margin: 0 auto 0 auto; */
                margin-top: 81px;
                color: rgb(214, 91, 47);
                font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            }

            a {
                color: white;
            }
            a:link {
                text-decoration: none;
            }
        </style>

    </head>
<body>
    <div class="container-fluid">
        <div class="row m-3">
            <div class="col-12 p-0 pr-2">
                <div class="card mb-3" >
                    <div class="row no-gutters">
                        <div class="col-8 bg-color">
                            <div class="" >
                                <img src="image/logo_main.png" alt="logo" style="height:150px; width: 200px;">
                            </div>
                            <div class="card-body">
                                <h1 class="card-title text-center font-color">Login</h1>
                                <form action="/login" method="POST">
                                <div class="form-container">

                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" name="email" id="email" required autofocus>
                                            <br />                           
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" required autocomplete>
                                            <br />
                                      
                                    <div class="block mt-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                       
                                        <x-button class="btn btn_item float-right mr-1">
                                            {{ __('Log in') }}                      
                                        </x-button>

                                        <div class="flex items-center justify-end mt-4">

                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                </form>

                            </div>

                            <div class="text-center">
                                <p>Thank you <i class="fas fa-heart color"></i> Created with viviet.com</p>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="">
                               <img src="image/40.jpeg" alt="hinh-nen" style="max-width: 500px; height: 52rem;">
                            </div>
                        </div>

                    </div>
                </div>
                </div>
        </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>
