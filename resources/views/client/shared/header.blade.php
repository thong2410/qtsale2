<div class="wrap">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <button id="primary-nav-button" type="button">Menu</button>
                    <a href="index.html"><div class="logo">
                        <img src="img/BI_Logo.png" alt="Venue Logo">
                    </div></a>
                    <nav id="primary-nav" class="dropdown cf">
                        <ul class="dropdown menu">
                            <li class="active"><a href="{{route('trang-chu')}}">Trang chủ</a></li>
                            <li><a href="#">Giới Thiệu</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Giới Thiệu</a>
                                    </li>
                                    <li><a href="#">Điểm Nổi Bật</a>
                                    </li>
                                </ul>
                            </li>
                             <li><a href="product">Sản Phẩm</a>
                                <ul class="sub-menu">
                                    <?php foreach ($type_Products as $value): ?>
                                        <li><a href="{{route('loaisanpham',$value['id_type'])}}">{{$value['name']}}</a></li>
                                    <?php endforeach ?>
                                </ul>
                            </li>
                            <li><a href="#">Giải Pháp</a>
                                <ul class="sub-menu">
                                    <li><a href="#">BiSchool</a>
                                    </li>
                                    <li><a href="#">REVA</a>
                                    </li>
                                    <li><a href="#">BiSecurity</a>
                                    </li>
                                    <li><a href="#">BiTraffic</a>
                                    </li>
                                    <li><a href="#">BiQueue</a>
                                    </li>
                                    <li><a href="#">BeKYC</a>
                                    </li>
                                    <li><a href="#">AiParking</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Tin Tức</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Tư vấn giải pháp</a>
                                    </li>
                                    <li><a href="#">Công nghệ AI</a>
                                    </li>
                                    <li><a href="#">Tin tức BI</a>
                                    </li>
                                </ul>
                            </li>
                            @guest
                            <li><a href="#">Tài Khoản</a>
                                <ul class="sub-menu">
                                    <li><a href="{{URL::to('/authlogin')}}">Đăng Nhập</a>
                                    </li>

                                    <li><a href="{{URL::to('/sigup')}}">Đăng Kí</a>
                                    </li>
                                </ul>
                            </li>
                            @else
                            <li><a href="#">{{Auth::user()->customer_name}}</a>
                                <ul class="sub-menu">
                                    <li><a href="{{URL::to('/')}}">Thông Tin Tài Khoản</a>
                                    </li>
                                    <li><a href="admin/orders/don-hang-cua-toi">Đơn Hàng của Tôi</a>
                                    </li>
                                    <li><a href="{{route('logout')}}">Đăng Xuất</a>
                                    </li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </nav>
                    {{-- <form role="search" method="get" id="searchform" action="{{route('search')}}">
                        <input type="text" value="" name="key" id="key" placeholder="Nhập từ khóa..." />
                        <button class="fa fa-search" type="submit" name="searchsubmit" id="searchsubmit"></button>
                    </form> --}}


                </div>

            </div>
        </div>
    </header>
</div>
