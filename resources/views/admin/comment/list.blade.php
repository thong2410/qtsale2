@extends('admin.layout.master2')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-body">
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
                <th>Tên Người dùng</th>
                <th>Nội dung</th>
                <th>id sản phẩm</th>
                <th>ngày bình luận</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($comments as  $key => $value):?>
                <tr>
                    <td> {{$key +1}}</td>
                    <td>{{$value ['username'] }}</td>
                    <td>{{$value ['comment'] }}</td>
                    <td>{{$value ['id_product'] }}</td>
                    <td>{{$value ['created_at'] }}</td>
                    {{-- <td>{{$value ['description'] }}</td> --}}
                    <td style="float: right;">
                        <a href="{{Route('delete3',['id' =>$value->comment_id])}}"><button class="btn btn-primary">Xóa</button></a>
                    </td>
                </tr>
            <?php   endforeach ?>
            </tbody>
          </table>
          {{-- <div class="container-fluid " style="padding-left: 470px">
            {!! $product->links() !!}
            </div> --}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
