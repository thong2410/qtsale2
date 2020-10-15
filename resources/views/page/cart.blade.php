@include('client.shared.master')

<body>

    <!-- Shop Cart Section Begin -->
    <section class="shop-cart spad">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                @foreach ($cart as $prod)
                                <td class="cart__price">{{$i}}</td>
                                    <td class="cart__quantity">

                                        <div class="cart__product__item__title">
                                            <h6>{{ $prod->name }}</h6>
                                        </div>
                                    </td>
                                    <td class="cart__price"><img src="../codeADM/images/product/{{ $prod->options->avatar }}" width="100" height="100px" alt=""></td>
                                    <td class="cart__price">{{ number_format($prod->price,0,',','.')  }}đ</td>
                                    <td class="cart__quantity">

                                        <div class="col-lg-4">
                                            <div class="col-lg-4">
                                                <form action="cap-nhap-soluong" method="post">
                                                  @csrf
                                                  <input type="hidden" name="rowId" value="{{ $prod->rowId }}">
                                                  <input min="1" max="100" style="width: 50px;height: 40px;border-radius: 5px;padding: 5px;border: 1px solid;margin: 4px -8px -8px 0px;" value="{{ $prod->qty }}" type="number" name="weight">

                                              </div>

                                    </td>
                                    <td class="cart__total"> {{ number_format($prod->price * $prod->qty,0,',','.') }} đ</td>
                                    <td class="cart__total"> <button class="btn btn-danger" type="submit">Update</button></td>
                                </form>
                                    <td class="cart__close"><a href="xoa/{{ $prod->rowId }}"><span class="icon_close"></span></a></td>

                                </tr>

                                <?php $i++ ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4 ">
                    <div class="cart__total__procced">
                        <h6>Cart total</h6>
                        <ul>

                            <li>Total <span>{{ Cart::subtotal() }} đ</span></li>
                        </ul>
                        <a href="thanh-toan" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('client.shared.footer')
