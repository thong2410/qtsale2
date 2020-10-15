@extends('admin.layout.master')
@section('content')
<div class="headersp">
    <div class="row">
        <div class="col-6">
            <h1>Thêm người dùng</h1>
        </div>
    </div>
    <div class="container-fluid">

        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputPassword1">username</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">password</label>
                <input type="password" class="form-control" name="pass">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Số điện thoại</label>
                <input type="number" class="form-control" name="phone">
            </div>

            <div class="form-group form-check">
                <button type="submit" name="add_sp" class="btn btn-primary">Thêm mới</button>
        </form>
        </div>

    </div>
</div>
@endsection
