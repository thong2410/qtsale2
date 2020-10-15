
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
            width: 70%;
            height: 300px; /* only for demonstration, should be removed */
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
<section class="container">
    <div class="sp1" style="width: 100%; height: auto;">
        <div style="height: 200px;" >
            <h2 style="padding: 20px; text-align: center; font-size:50px">{{$loai_sp->name}}</h2>
            <p style="text-align: center">—————————————————————— ❉ ——————————————————————</p>
            <p style="text-align: center; font-size:20px" >Những sản phẩm <b>{{$loai_sp->name}}</b> mới nhất/hot nhất</p>
        </div>
        <form role="search" class="searchcontainer" method="get" id="searchform" action="{{route('search')}}">

            <input type="text" value="" name="key" id="key"  class="searchinput" placeholder="Nhập từ khóa..." />
        </form>
        <div class="card-deck" style="padding: 10px;">
            @foreach ($SP_theoloai as $sp)
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
            {!! $SP_theoloai->links() !!}
        </div>
    </div>
    <div class="sp khac" style="clear: both">
        <div style="height: 200px;" >
            <h2 style="padding: 20px; text-align: center; font-size:50px">Sản Phẩm Khác</h2>
            <p style="text-align: center">—————————————————————— ❉ ——————————————————————</p>
            <p style="text-align: center; font-size:20px" >Những sản phẩm thời trang mới nhất/hot nhất</p>
        </div>
        @foreach ($sp_khac as $sp)
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
        {!! $sp_khac->links() !!}
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
