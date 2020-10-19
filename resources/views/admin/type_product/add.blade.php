@extends('admin.layout.master2')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h3>thêm sản phẩm mới</h3>
                    <div class="headersp">
                        <div class="container-fluid">
                            @if (session('thongbao'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('thongbao') }}
                                </div>
                            @endif
                            <form method="POST" action="/admin/type_product/add2" enctype="multipart/form-data">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tên loại sản phẩm</label>
                                    <input type="text" class="form-control" name="name" placeholder="tên loại sản phẩm mới">
                                    @if ($errors->has('name'))
                                        <div  class="form-group">
                                            <label for="exampleInputPassword1" class="text-danger">{{ $errors->first('name')}}</label>
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group form-check">
                                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
