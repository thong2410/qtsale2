
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Beet innovators - giải pháp  nhận diện khuôn mặt hàng đầu thế giơi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('client.layout.master')
    <style>
        article {
            float: left;
            padding: 20px;
        }
        section:after {
            content: "";
            display: table;
            clear: both;
            }
    </style>
</head>

<body>
@include('client.layout.header')
{{-- <div class="container">
    <div class="card">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1">
                            <img src="../codeADM/images/product/{{$sanpham->image}}" alt="">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-3">
                            <img src="../codeADM/images/product/{{$sanpham->image}}" alt="anh" class="img-thumbnail">
                        </div>
                        <div class="col-3">
                            <img src="../codeADM/images/product/{{$sanpham->image}}" alt="anh" class="img-thumbnail">
                        </div>
                        <div class="col-3">
                            <img src="../codeADM/images/product/{{$sanpham->image}}" alt="anh" class="img-thumbnail">
                        </div>
                        <div class="col-3">
                            <img src="../codeADM/images/product/{{$sanpham->image}}" alt="anh" class="img-thumbnail">
                        </div>
                    </div>
                </div>
                <div class="details col-md-6">
                    <h3 class="product-title">{{$sanpham->name}}</h3>
                    <div class="rating">
                        <div class="stars"> <span class="fa fa-star checked"></span> <span
                                class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span
                                class="fa fa-star"></span> <span class="fa fa-star"></span>
                        </div> <span class="review-no">123 đánh giá</span>
                    </div>
                    <h3>Mô tả về sản phẩm này</h3>
                    <p class="product-description">
                        {{$sanpham->description}}
                    </p>
                    <h4 class="price">Giá bán: {{number_format($sanpham->price)}} đồng</h4>
                    <p class="vote"><strong>91%</strong> of người mua hài lòng với sản phẩm này <strong>(87 bình
                            chọn)</strong>
                    </p>

                    <h5 class="colors">Màu: <span class="color orange not-available" data-toggle="tooltip"
                            title="Not In store"></span>
                        <span class="color red"></span>
                        <span class="color blue"></span>
                        <span class="color black"></span>
                    </h5>

                    <div class="row">
                        <button class="add-to-cart btn btn-default" type="button" style="height: 50px;">MUA NGAY</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<section class="container">
    <div class="sp1" style="width: 100%; height: auto;">
        <div style="width: 45%; float: left; height: 500px;">
            <img src="../codeADM/images/product/{{$sanpham->image}}" style="height:500px;width: 500px;padding: 5px;border: 1px solid;box-shadow: 1px 1px inset; border-radius: 15px;">
        </div>
        <article style="width:55%; float: left; height: 500px;">
            <h3> {{$sanpham->name}}</h3>
            <div class="rating">
                <div class="stars">
                    <span class="fa fa-star" style="color: rgb(252, 214, 0)"></span>
                    <span class="fa fa-star" style="color: rgb(252, 214, 0)"></span>
                    <span class="fa fa-star" style="color: rgb(252, 214, 0)"></span>
                    <span class="fa fa-star" style="color: rgb(252, 214, 0)"></span>
                    <span class="fa fa-star" style="color: rgb(252, 214, 0)"></span>
                </div>
                <span class="review-no">123 đánh giá</span>
            </div>
            <div>
                <h3>Mô tả về sản phẩm này</h3>
                <p class="product-description">
                    {{$sanpham->description}}
                </p>
            </div>
            <div>
                <h4 class="price">Giá bán: {{number_format($sanpham->price)}} đồng</h4>
            </div>
            <p class="vote"><strong>91%</strong> of người mua hài lòng với sản phẩm này <strong>(87 bình
                chọn)</strong>
            </p>
            <div class="row">

                <button class="add-to-cart btn btn-default" type="button" style="height: 50px;">Thêm giỏ hàng</button>
            </div>
        </article>
    </div>
    <div class="sp khac" style="clear: both"><br>
        <hr>
        <div style="height: 200px;" >
            <h2 style="padding: 20px; text-align: center; font-size:50px">Sản Phẩm Tương Tự</h2>
            <p style="text-align: center">—————————————————————— ❉ ——————————————————————</p>
            <p style="text-align: center; font-size:20px" >Những sản phẩm thời trang mới nhất/hot nhất</p>
        </div>
        @foreach ($sp_tuongtu as $sp)
        <div style="width: 24%; float: left;height: 350px; margin-bottom: 80px;margin-left:10px;  box-shadow: 4px 4px       10px#888888;">
            <a href="{{route('chitietsanpham',$sp->product_id)}}"><img src="../codeADM/images/product/{{$sp['image']}}" class="card-img-top" style="height: 350px; padding: 40px;" alt="Image"></a>
            <a href="#giohang">
                <div class="card-footer">
                    <span class="flash-sale" style="width: 100%;font-size:17px;"><p style="text-align: center; font-size: 20px;font-weight: bold;color: #333333	; padding: 1em; display:inline-block;">{{number_format($sp->price)}} đồng</p></span>
                </div>
            </a>
        </div>
        <?php endforeach ?>
    </div>
    <div class="container-fluid " style="padding-left: 470px">
        {!! $sp_tuongtu->links() !!}
    </div>
</section>
@include('client.layout.footer')

</body>
<script type="text/javascript">
   setTimeout(function(){
    $('.odometer-1').html(500);
  }, 1000);
   setTimeout(function(){
    $('.odometer-2').html(20);
  }, 1000);
  setTimeout(function(){
    $('.odometer-3').html(200);
  }, 1000);
  setTimeout(function(){
    $('.odometer-4').html(10);
  }, 1000);
</script>
</html>
