<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sigup</title>

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

    <section class="checkout spad">
        <div class="container">
            @if(session('errLogin'))
                <div class="alert alert-danger">
                    {{ session('errLogin') }}
                </div>
            @endif
            <form action="{{URL::to('/sigup')}}" method="POST" class="checkout__form">
            {{csrf_field()}}
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <h5>Register</h5>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Full Name <span>*</span></p>
                                    <input type="text" name="customer_name" placeholder="full name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Phone <span>*</span></p>
                                    <input type="text" name="customer_phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Email <span>*</span></p>
                                    <input type="email" name="customer_email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkout__form__checkbox">
                                    <div class="checkout__form__input">
                                        <p>Account Password <span>*</span></p>
                                        <input type="password" name="password" placeholder="Password" >
                                    </div>

                                </div>
                            <button type="submit" class="site-btn">Register</button>
                            </div>
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
