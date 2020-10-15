<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>

   <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
   rel="stylesheet">

   <!-- Css Styles -->
   <link rel="stylesheet" href="../login/css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="../login/css/elegant-icons.css" type="text/css">
   <link rel="stylesheet" href="../login/css/style.css" type="text/css">
   @include('client.shared.master')
</head>

<body>
@include('client.shared.header')

    <!-- Checkout Section Begin -->
    <section class="checkout spad ">
        <div class="container">
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                    {{$err}} <br>
                    @endforeach
                </div>
            @endif


            @if(session('errLogin'))
                <div class="alert alert-danger">
                    {{ session('errLogin') }}
                </div>
            @endif
            <form action="{{route('login')}}" method="POST" class="checkout__form ">
            @csrf
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <h5>Login</h5>
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Email<span>*</span></p>
                                    <input type="email" name="customer_email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkout__form__checkbox">
                                    <div class="checkout__form__input">
                                        <p>Account Password <span>*</span></p>
                                        <input type="password" name="password" placeholder="Account Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                                <a href="{{ url('auth/google') }}"  class="btn btn-lg btn-success ">
                                    <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                                    <strong>Login With Google</strong>
                                </a>
                                <a href=""  class="btn btn-lg btn-info ">
                                <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                    <strong>Login With Facebook</strong>
                                </a>
                        </div>
                        
                        <button type="submit" class="site-btn">Login</button>
                    </div>
                    <div class="col-lg-2"></div>
                </form>
            </div>  
        </section>
        <!-- Checkout Section End -->

        @include('client.shared.footer')

        <!-- Js Plugins -->
        <script src="../login/js/jquery-3.3.1.min.js"></script>
        <script src="../login/js/bootstrap.min.js"></script>
    </body>

    </html>
