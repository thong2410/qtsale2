@extends('admin.layout.master2')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <h3 class="card-title mb-0">Sản Phẩm</h3>
          <a href="{{URL::to('admin/product/add')}}"><small>thêm sản phẩm mới</small></a>
        </div>
        @if (session('thongbao'))
            <div class="alert alert-success" role="alert">
                {{ session('thongbao') }}
            </div>
        @endif
        <div class="table-responsive">
          <table class="table table-striped table-hover" method="post">
            @csrf
            <thead>
              <tr>
                <th>Stt</th>
                <th>Tên sản phẩm</th>
                <th>hình ảnh</th>
                <th>giá tiền</th>
                <th>Mô tả</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($product as  $key => $value):?>
                <tr>
                    <td> {{$key +1}}</td>
                    <td>{{$value ['name'] }}</td>
                    <td><img class="images" src="../../codeADM/images/product/{{$value ['image']}}" alt=""></td>
                    <td>{{$value ['price'] }}</td>
                    <td>{{$value ['description'] }}</td>
                    {{-- <td>{{$value ['description'] }}</td> --}}
                    <td style="float: right;">
                        <a href="{{URL::to('admin/product/edit',$value ['product_id'])}}"><button class="btn btn-primary">sửa</button></a>
                        <a href="{{Route('delete',['id' =>$value->product_id])}}"><button class="btn btn-primary">Xóa</button></a>
                    </td>
                </tr>
            <?php   endforeach ?>
            </tbody>
          </table>
          <div class="container-fluid " style="padding-left: 470px">
            {!! $product->links() !!}
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
