@include('client.shared.master')

<body>

    <section class="checkout spad">
        <div class="container">

            <form action="" method="POST" class="checkout__form">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Billing detail</h5>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__form__input">

                                    <p>Họ Và tên<span>*</span></p>
                                    <input type="text" value="" name="order_name">


                                </div>

                                <div class="checkout__form__input">
                                    @foreach ($nguoidung as $nguoi)

                                    <input type="text" hidden name="customer_id" value="{{$nguoi->customer_id}}">
                                    @endforeach
                                </div>

                                <div class="checkout__form__input">
                                    <p>Địa Chỉ <span>*</span></p>
                                    <input type="text" name="address" placeholder="">
                                </div>

                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Phone <span>*</span></p>
                                    <input type="tel" name="order_sdt">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Email <span>*</span></p>
                                    <input type="email" name="order_email">
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

                </form>
            </div>

        </section>

</body>
</html>

