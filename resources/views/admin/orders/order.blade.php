@extends('admin.layout.master2')
@section('content')
<div class="row">
    {{-- <div class="col-lg-4">
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tình trạng
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <a href="status/Processing"><button class="dropdown-item" type="button">Chờ xử lý</button></a>
          <a href="status/shipping"><button class="dropdown-item" type="button">Đang giao hàng</button></a>
          <a href="status/delivered"><button class="dropdown-item" type="button">Đã giao hàng</button></a>
          <a href="status/cancel"><button class="dropdown-item" type="button">Đã hủy</button></a>
          </div>
        </div>
       </div> --}}
    <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-hover" method="post">

            <thead>
              <tr>
                <th>ID</th>
                <th>ID User</th>
                <th>Tên</th>
                <th>Số Điện Thoại</th>
                <th>Tổng Giá</th>
                <th>Tình Trạng</th>
                <th>Xác Nhận Tình Trạng</th>
                <th>Chi Tiết</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($db as $item)
                <tr>
                  <th scope="row">{{ $item ->order_id }}</th>
                  <td>{{ $item->id_users }}</td>
                  <td>{{ $item->order_name }}</td>
                  <td>{{ $item ->order_sdt }}</td>
                  <td>{{ number_format($item ->total_price,2,",",".") }} VNĐ</td>
                  <td>{{$item->getstatus->status_order }}</td>
                 <td><form action="confirm-status" method="POST">
                    @csrf
                 <input type="hidden" name="order_id" value="{{$item->order_id}}" >

                   @if (($item->id_stt) == 1)
                       <input type="hidden" value="2" name="id_stt">
                       <input class="btn btn-warning " type="submit" value="Xác nhận đang giao">
                   @elseif(($item->id_stt) == 2)
                   <input type="hidden" value="3" name="id_stt">
                   <input class="btn btn-warning " type="submit" value="Xác nhận Đã giao">
                   @else
                     <h5></h5>
                   @endif
                  </form></td>


                  <td><a class="btn btn-success" href="detail/{{ $item ->order_id }}">Chi tiết</a></td>
                  <td><a class="btn btn-danger" href="delete/{{ $item ->order_id }}">Xóa</a></td>

                </tr>
              @endforeach
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
