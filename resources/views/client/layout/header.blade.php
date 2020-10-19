<div class="wrap">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <button id="primary-nav-button" type="button">Menu</button>
                    <a href="index.html"><div class="logo">
                        <img src="../img/BI_Logo.png" alt="Venue Logo">
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
                        <li><a href="{{route('product')}}">Sản Phẩm</a>
                                <ul class="sub-menu">
                                    <?php foreach ($type_Products as $value): ?>
                                        <li><a href="{{route('type',$value['id_type'])}}">{{$value['name']}}</a></li>
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
                            <li><a class="scrollTo" data-scrollTo="contact" href="#">Liên Hệ</a></li>
                            <li class="Hotline"><button type="button" class="btn btn-primary">Hotline</button></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </header>
</div>
