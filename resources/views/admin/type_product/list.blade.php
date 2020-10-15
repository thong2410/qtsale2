@extends('admin.layout.master2')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title mb-0">Loại Sản Phẩm</h3>
                    <a href="{{URL::to('admin/type_product/add')}}"><small>thêm loại sản phẩm mới</small></a>
                </div><br>
                <div class="headersp">
                    <div>
                       <table class="table table-striped table-hover" method="post">
                            @if (session('thongbao'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('thongbao') }}
                                </div>
                            @endif
                            @csrf
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col" class="text-center">Tên Loại sản phẩm</th>
                                    <th scope="col"></th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($type_Products as $key=>$value): ?>
                                <tr style="height: 50px;">
                                    <td>{{$key +1}}</td>
                                    <td class="text-center">{{$value['name']}}</td>
                                    <td style="float: right;">
                                        <a href="{{URL::to('admin/type_product/edit',$value ['id_type'])}}"><button class="btn btn-primary">sửa</button></a>
                                        <a href="{{Route('delete2',['id_type' =>$value['id_type']])}}" name="delete"><button class="btn btn-primary">Xóa</button></a>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
