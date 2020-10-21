
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Beet innovators - giải pháp  nhận diện khuôn mặt hàng đầu thế giơi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('client.shared.master')
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
@include('client.shared.header')
<section>
    <div class="" style="width: 20%; float: left;padding: 10px">
        <div style="width: 100%; height: 230px;padding: 10px;">
            <a href="#"><img src="img/product/balo3.jpg" style="height: 100%;width: 100%;"></a>
        </div>
        <div style="width: 100%; height: 230px;padding: 10px;">
            <a href="#"><img src="img/product/balo4.jpg" style="height: 100%;width: 100%;"></a>
        </div>
        <div style="width: 100%; height: 230px;padding: 10px;">
            <a href="#"><img src="img/product/phukien1.jpg" style="height: 100%;width: 100%;"></a>
        </div>
    </div>
    <article style="width: 80%;">
        <div style="height: 680px;width: 50%; float: left;">
            <a href="{{route('loaisanpham',1)}}"> <img src="img/product/typeNAm.jpg" style=";height: 680px; width:99%;"></a>
        </div>
        <div style="height: 680px;width:50%;float:left;">
            <a href="{{route('loaisanpham',2)}}"><img src="img/product/typeNu.jpg" style="height: 680px; width: 99%;"></a>
        </div>
    </article>
  </section>
  <section class="container">
    {{-- san pham --}}
    <form role="search" class="searchcontainer" method="get" id="searchform" action="{{route('search')}}">

        <input type="text" value="" name="key" id="key"  class="searchinput" placeholder="Nhập từ khóa..." />
    </form>
    <div style="height: 200px;" >
        <h2 style="padding: 20px; text-align: center; font-size:50px">Sản Phẩm Mới</h2>
        <p style="text-align: center">—————————————————————— ❉ ——————————————————————</p>
        <p style="text-align: center; font-size:20px" >Những sản phẩm thời trang mới nhất/hot nhất</p>
    </div>
<div class="row">
   <a href="gio-hang/gio-hang"> <i class="fa fa-shopping-bag" style="font-size:40px;float:right"> {{ Cart::count()}}</i></a>


</div>




    <div class="row">
        @foreach ($new_products as $new)
        <div class="item  col-xs-3 col-lg-3" style="height: 450px; width: 24%;">
            <div class="thumbnail" style="height: 350px;">
               <a href="{{route('chitietsanpham',$new->product_id)}}"> <img class="group list-group-image" style="width: 100%; height: 100%;" src="../codeADM/images/product/{{$new['image']}}" alt="Sản phẩm 4" width="300" height="200"></a>
             <div class="caption">
             <h4 class="group inner list-group-item-heading"  style="text-align: center"><strong>{{$new->name}}</strong></h4>
              <div class="row">
               <div class="col-xs-12">
                <p class="lead" style="text-align: center">{{number_format($new->price)}} đồng</p>
               </div>
               <div class="col-xs-12">
                <a href="gio-hang/them/{{ $new->product_id }}" class="btn btn-danger col-lg-12">Thêm vào giỏ hàng</a>
               </div>
              </div>
             </div>
            </div>
           </div>
    @endforeach
    </div>
</section>
    {{-- <div class="container" style="padding: 20px">
        <div class="sp1" style="width: 100%; height: 700px;">
            <div style="height: 200px;" >
                <h2 style="padding: 20px; text-align: center; font-size:50px">Sản Phẩm Mới</h2>
                <p style="text-align: center">—————————————————————— ❉ ——————————————————————</p>
                <p style="text-align: center; font-size:20px" >Những sản phẩm thời trang mới nhất/hot nhất</p>
            </div>
                <div class="card-deck" style="padding: 10px;">
                    @foreach ($new_products as $new)
                    <div class="card">
                        <a href="{{route('chitietsanpham',$new->product_id)}}">  <img src="codeADM/images/product/{{$new->image}}" class="card-img-top" style="height: 400px;" alt="Image"></a>
                      <div class="card-body">
                       <button  class="btn btn-default" style="width: 100%;font-size:17px">{{$new->price}}</button>
                      </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div> --}}
@include('client.shared.footer')

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
