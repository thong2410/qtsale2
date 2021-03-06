<!doctype html>
<html lang="en">

<head>
    <title>Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../codeADM/css/style.css">
</head>

<body>
    <div class="container-xl">
        <div id="menu" style="height: 900px; width: 20%; float: left;">
            <div class="p-2">
                <a href="../../" id="logo">Flower Shop</a>
            </div>
            <div  class=" p-2">
            <h3 class="text-center mr-4" style="color:orangered">admin</h3>
            </div>
            <div class="p-3">
                <ul class="navbar-nav p-3">
                    <li class="nav-item">
                        <a class=" nav-link active text-light" href="../../../admin/product/list"> <i class="ni ni-tv-2 " style="color: darkorange;"></i> Sản phẩm
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" href="../../../admin/type_product/list"> <i class="ni ni-tv-2 " style="color: darkorange;"></i> Loại sản phẩm
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link active text-light" href="../../../admin/user/list"> <i class="ni ni-tv-2 " style="color: darkorange;"></i> Người dùng
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link active text-light" href="../../../admin/order/list"> <i class="ni ni-tv-2 " style="color: darkorange;"></i>Đơn Hàng
                        </a>
                    </li>

                </ul>
            </div>

        </div>
        <div style="height: 80px; background-color: #000099;">
            <div style="float: left; padding:1em;color: greenyellow; ">
                <h1>dashboard</h1>
            </div>
            <div style="float: right;padding:25px;">

            <form class="form-inline">
                <div class="form-group mx-sm-3 mb-2">
                    <input type="text" class="form-control" placeholder="tim kiem">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Tim kiem</button>
            </form>
            </div>

        </div>
        <div class="bg-light" style="height: 800px; width: 80%; float: right;">
            <div class="headersp">
                <div class="row">
                    <div class="col-6">
                        <h1>Sửa sản phẩm</h1>
                    </div>
                </div>
                <div class="container-fluid">
                    @if (session('thongbao'))
                        <div class="alert alert-success" role="alert">
                            {{ session('thongbao') }}
                        </div>
                    @endif
                    <form method="POST" action="../../../admin/product/edit/{{$sp->product_id}}" enctype="multipart/form-data">
                        @csrf
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$sp->name}}">
                            @if ($errors->has('name'))
                                <div  class="form-group">
                                    <label for="exampleInputPassword1" class="text-secondary">{{ $errors->first('name')}}</label>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Gía sản phẩm</label>
                            <input type="text" class="form-control" name="price" id="price" value="{{$sp->price}}">
                            @if ($errors->has('price'))
                                <div  class="form-group">
                                    <label for="exampleInputPassword1" class="text-secondary">{{ $errors->first('price')}}</label>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hình ảnh</label>
                        <input type="file" class="form-control" name="image" id="image" value="{{$sp->image}}">
                            @if ($errors->has('image'))
                                <div  class="form-group">
                                    <label for="exampleInputPassword1" class="text-secondary">{{ $errors->first('image')}}</label>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Loại sản phẩm</label>
                            <select class="custom-select" name="id_type">
                                @foreach ($type as $item)
                                    <option value="{{$item->id_type}}">
                                    {{$item->name}}
                                    </option>
                                @endforeach
                              </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">MÔ TẢ</label>
                            <input class="form-control" name="description" id="description" value="{{$sp->description}}" rows="4">
                            @if ($errors->has('description'))
                                <div  class="form-group">
                                    <label for="exampleInputPassword1" class="text-secondary">{{ $errors->first('description')}}</label>
                                </div>
                            @endif
                        </div>
                        <div class="form-group form-check">
                            <button type="submit" class="btn btn-primary">cập nhật</button>
                        </div>
                    </form>
                    </div>
            </div>
        </div>
    </div>

</html>
