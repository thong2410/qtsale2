
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Beet innovators - giải pháp  nhận diện khuôn mặt hàng đầu thế giơi</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('client.shared.master')

</head>

<body>

   @include('client.shared.header')
   <div class="container">
        <section class="sp1" style="width: 100%; height: auto;">
            <div >
                <h4>
                    <div class="beta-products-details">
                       Đã tìm thấy <span class="badge badge-success">{{count($product)}} </span> sản phẩm
                        <div class="clearfix"></div>
                    </div>
                </h4>
            </div>
            <section class="container">
                {{-- san pham --}}
                <div class="row">
                    @foreach ($product as $new)
                    <div class="item  col-xs-3 col-lg-3" style="height: 450px; width: 24%;">
                        <div class="thumbnail" style="height: 350px;">
                          <a href="{{route('chitietsanpham',$new->product_id)}}">  <img class="group list-group-image" style="width: 100%; height: 100%;" src="../codeADM/images/product/{{$new['image']}}" alt="Sản phẩm 4" width="300" height="200"></a>
                         <div class="caption">
                         <h4 class="group inner list-group-item-heading"  style="text-align: center"><strong>{{$new->name}}</strong></h4>
                          <div class="row">
                           <div class="col-xs-12">
                            <p class="lead" style="text-align: center">{{number_format($new->price)}} đồng</p>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                @endforeach
                </div>
            </section>
        </section>
    </div>
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
