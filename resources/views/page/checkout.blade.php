@include('client.layout.master')
<body style="background-color: Silver">
@include('client.layout.header')
{{-- <section class="checkout spad">
    <div class="container">
        <form action="" method="POST" class="checkout__form">
            @csrf
            <div class="row">
                <div class="col-lg-8">
                    <h5>Billing detail</h5>
                    <div class="row">
                        <div class="col-lg-12">
                            @foreach ($nguoidung as $user)
                                <div class="checkout__form__input">

                                    <p>Họ Và tên<span>*</span></p>
                                    <input type="text" value="{{$user->name}}" name="order_name">


                                </div>

                                <div class="checkout__form__input">


                                    <input type="text" hidden name="id" value="{{$user->id}}">

                                </div>

                                <div class="checkout__form__input">
                                    <p>Địa Chỉ <span>*</span></p>
                                    <input type="text" name="address" placeholder="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="checkout__form__input">
                                        <p>Email <span>*</span></p>
                                    <input type="email" name="order_email" value="{{$user->email}}">
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <p>Phone <span>*</span></p>
                                <input type="tel" name="order_sdt">
                            </div>
                        </div>

                        <div class="col-lg-12">

                                <div class="checkout__form__input">
                                    <p>Ghi Chú <span>*</span></p>
                                    <input type="text" name="note">
                                </div>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">
                                    <input type="radio" checked="checked" aria-label="Radio button for following text input">
                                  </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Thanh toán khi nhận hàng" readonly aria-label="Text input with radio button">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="checkout__order">
                            <h5>Your order</h5>
                            <div class="checkout__order__product">
                                <ul>
                                    <li>

                                        <span class="top__text">Product</span>
                                        <span class="top__text__right">Total</span>
                                    </li>

                                    @foreach ($cart as $prod)
                                    <li>{{$prod->name}} <span>   <td>{{ number_format($prod->price * $prod->qty,0,',','.') }} đ</td></span></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="checkout__order__total">
                                <ul>

                                    <li>Total <span>{{ Cart::subtotal() }} đ</span></li>
                                </ul>
                            </div>



                            <button type="submit" class="site-btn">Buy now</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</section> --}}
<section class="checkout spad">
    <div class="container">
        <div class="row row-cols-2">
            <form style="padding: 10px"  method="POST">
                <div class="col-sm-6" style="background-color: white; padding: 20px;border-radius: 4px;" class="checkout__form">
                    <h4>thông tin giao hàng</h4>
               
                    @csrf
                    @foreach ($nguoidung as $user)
                        <div class="form-group" class="checkout__form__input">
                            <label >Họ Tên</label>
                            <input type="text" class="form-control" name="order_name" value="{{$user->name}}"/>
                        </div>
                        <div class="form-group" class="checkout__form__input">
                            <label>Email</label>
                            <input type="email" class="form-control" id="order_email" value="{{$user->email}}" />
                        </div>
                        <div class="form-group" class="checkout__form__input">
                            <input type="text" hidden name="id" value="{{$user->id}}">
                        </div>
                        <div class="form-group" class="checkout__form__input">
                            <label>Địa chỉ</label>
                            <input type="text" class="form-control" name="address" />
                        </div>
                        <div class="form-group" class="checkout__form__input">
                            <label >Số Điện Thoại</label>
                            <input type="text" class="form-control" name="order_sdt"/>
                        </div>
                        <div class="form-group" class="checkout__form__input">
                            <label>ghi Chú</label>
                            <input type="text" class="form-control" name="note" />
                        </div>
                    @endforeach
               

                </div>
                <div class="col-sm-4" style="background-color: white; padding: 20px;border-radius: 4px;float: right">
                <div class="card" style="width: 100%;">
                    <ul class="list-group list-group-flush">
                        <li  class="list-group-item" style="text-align: center"><h4>Your order</h4></li>
                    </ul>
                    <ul class="list-group list-group-flush">
                        <h4><strong>Thông tin đơn hàng</strong></h4><br>
                        @foreach ($cart as $prod)
                            <li style="height: 30px;">
                                {{$prod->name}} ({{$prod->qty}} sản phẩm)
                                <span style="float: right"><td><strong>{{ number_format($prod->price * $prod->qty,0,',','.') }} đ</strong></td></span>
                            </li>
                        @endforeach
                    </ul>
                    <ul class="list-group list-group-flush">
                        <li style="height: 30px;">Tổng cộng <span style="float: right; font-size: 16px;color: #FF9900">{{ Cart::subtotal() }} đ</span></li>
                    </ul>
                    <ul class="list-group list-group-flush" class="checkout__order__total">
                        <li  class="list-group-item"  style="text-align: center">
                            <button class="site-btn" type="submit" style="width: 100%;height: 30px;">Buy Now</button>
                        </li>
                    </ul>
                </div>
               
            </form>
        </div>
    </div>
</section>

@include('client.layout.footer')
</body>
</html>
