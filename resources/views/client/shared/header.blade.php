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
                                {{-- <ul class="sub-menu">
                                    <?php foreach ($type_Products as $value): ?>
                                        <li><a href="{{route('loaisanpham',$value['id_type'])}}">{{$value['name']}}</a></li>
                                    <?php endforeach ?>
                                </ul> --}}
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
                            <li>
                                <a href="#">Tin Tức</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Tư vấn giải pháp</a>
                                    </li>
                                    <li><a href="#">Công nghệ AI</a>
                                    </li>
                                    <li><a href="#">Tin tức BI</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">{{ Auth::user()->name }}</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#">{{ __('Manage Account') }}</a>
                                            </li>
                                            <li><a href="{{ route('profile.show') }}">{{ __('Profile') }}</a>
                                            </li>
                                             <li><a href="admin/orders/don-hang-cua-toi">Đơn Hàng của Tôi</a>
                                    </li>
                                            <li>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                        
                                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                                                        onclick="event.preventDefault();
                                                                                    this.closest('form').submit();">
                                                        {{ __('Logout') }}
                                                    </x-jet-dropdown-link>
                                                </form>
                                            </li>
                                        </ul>
                                    @else
                                    <a href="#">Tài Khoản</a>
                                    <ul class="sub-menu">
                                        <li>  
                                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                                        </li>
                                        <li>
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                            @endif
                                        </li>
                                    </ul>
                                    @endif
                                @endif
                            </li>
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
