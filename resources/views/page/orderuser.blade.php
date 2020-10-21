<!doctype html>
<html lang="en">
  <head>
    <title>My order</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

<div class="container">
<div >

    @if ($sodon <= 0)
        <h3>Xin lỗi! Bạn chưa thực hiện giao dịch nào</h3>
    @else
        @foreach ($db as $item)
    <div class="list-group-item list-group-item-action active">
        <strong>Chi tiết đơn hàng #{{ $item->order_id }}</strong>
    </div>

    <div class="form-group">


        <div class="card" style="100%">

            <div >

            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Họ và tên:</strong> {{ $item->order_name }}</li>
                <li class="list-group-item"><strong>Địa chỉ giao hàng:</strong> {{ $item->address }}</li>
                <li class="list-group-item"><strong>Đặt ngày: </strong>{{ $item->order_date }} </li>
            </ul>
            </div>

            {{-- <table class="table table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Tổng giá</th>


                  </tr>
                </thead>
                <tbody>
                    <?php $a = 1 ?>
                    @foreach ($item->product as $i)


                      <tr>
                        <th scope="row">{{ $a }}</th>
                        <td>{{ $i->name }}</td>
                        <td><img width="50" src="../codeADM/images/product/{{ $i->image }}" alt=""></td>
                        <td>{{ number_format($i->pivot->total,2,",",".") }} VND</td>
                        <td>{{ $i->pivot->quantity }}</td>
                        <td>{{ number_format($i->pivot->total * $i->pivot->quantity,2,",",".") }} đ</td>


                      </tr>
                      <?php $a++ ?>
                      @endforeach

                </tbody>
              </table> --}}
            <div class="card-body">
                <h5 class="card-title">Tình trạng đơn hàng</h5>
                <div class="row">
                    <div class="col-lg-6">
                      <div class="row">
                        <div class="col-lg-6">
                        <h4 class="card-link">{{$item->getstatus->status_order }}</h4>
                        </div>

                        {{-- <div class="col-lg6">
                            @if (($item->id_stt) ==1)
                            <a href="gio-hang/huydon/{{ $item->id }}">Hủy đơn hàng</a>
                            @endif
                        </div> --}}
                      </div>

                    </div>

                    <div style="text-align: right" class="col-lg-6">
                       <h4>Tổng tiền: {{ number_format($item ->total_price,2,",",".") }} VND</h4>
                    </div>
                </div>
            </div>
          </div>
    </div>



    @endforeach
    @endif
</div>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
