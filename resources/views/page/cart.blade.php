@include('client.layout.master')
<style type="text/css">.table&amp;amp;gt;tbody&amp;amp;gt;tr&amp;amp;gt;td, .table&amp;amp;gt;tfoot&amp;amp;gt;tr&amp;amp;gt;td {  
    vertical-align: middle;
    }
     
    @media screen and (max-width: 600px) { 
    table#cart tbody td .form-control { 
    width:20%; 
    display: inline !important;
    } 
     
    .actions .btn { 
    width:36%; 
    margin:1.5em 0;
    } 
     
    .actions .btn-info { 
    float:left;
    } 
     
    .actions .btn-danger { 
    float:right;
    } 
     
    table#cart thead {
    display: none;
    } 
     
    table#cart tbody td {
    display: block;
    padding: .6rem;
    min-width:320px;
    } 
     
    table#cart tbody tr td:first-child {
    background: #333;
    color: #fff;
    } 
     
    table#cart tbody td:before { 
    content: attr(data-th);
    font-weight: bold; 
    display: inline-block;
    width: 8rem;
    } 
     
    table#cart tfoot td {
    display:block;
    } 
    table#cart tfoot td .btn {
    display:block;
    }
    }</style>
<body>
@include('client.layout.header')
    <!-- Shop Cart Section Begin -->
    {{-- <section class="shop-cart spad">
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
    </section> --}}

    {{-- test --}}
    <h2 class="text-center">My cart</h2>
    <div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width: 30%;">Tên sản phẩm</th>
                    <th style="width: 10%;">Giá</th>
                    <th style="width: 8%;">Số lượng</th>
                    <th style="width: 22%;" class="text-center">Thành tiền</th>
                    <th style="width: 10%;"></th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                @foreach ($cart as $prod)
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs">
                                <img src="../codeADM/images/product/{{ $prod->options->avatar }}" alt="Sản phẩm" class="img-thumbnail" width="100" height="auto" />
                            </div>
                            <div class="col-sm-9">
                                <h4 style="margin-top: 1.3em">{{ $prod->name }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price"><h4 style="margin-top: 1.3em; ">{{ number_format($prod->price,0,',','.')  }}đ</h4></td>
                    <td data-th="qty"> 
                            <form action="cap-nhap-soluong" method="post">
                                <div>
                                    @csrf
                                    <input type="hidden" name="rowId" value="{{ $prod->rowId }}">
                                    <input min="1" max="100" style="width: 50px;height: 40px;border-radius: 5px;padding: 5px;border: 1px solid;margin: 4px -8px -8px 0px;" value="{{ $prod->qty }}" type="number" name="weight">
                                </div>
                                </td>
                                <td  data-th="Price" class="text-center"> <h4 style="margin-top: 1.3em">{{ number_format($prod->price * $prod->qty,0,',','.') }} đ</h4></td>
                                <td class="cart__total"> <button class="btn btn-success" type="submit">Update</button></td>
                                <td class="cart__close"><a href="xoa/{{ $prod->rowId }}"><span class="btn btn-danger">xoa</span></a></td>
                                
                            </form>
                            
                    </td>
                    
                </tr>
              
                @endforeach
                <?php $i++ ?>
            </tbody>
            <tfoot>
                <tr>
                    <td>
                        <a href="http://hocwebgiare.com/" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                    </td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center" data-th="Price">
                        <strong>Tổng tiền {{ Cart::subtotal() }} đ</span></strong>
                    </td>
                   
                    <td>
                        <a href="thanh-toan" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

    {{-- /test --}}
    @include('client.layout.footer')
