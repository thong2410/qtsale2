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
    <link rel="stylesheet" href="../../../css/style.css">
</head>

<body>
    <div class="container-xl">
        <div id="menu" style="height: 900px; width: 20%; float: left;">
            <div class=" p-2">
                <a id="logo">Flower Shop</a>
            </div>
            <div  class=" p-2">
            <h3 class="text-center mr-4" style="color:orangered">admin</h3>
            </div>
            <div class="p-3">
                <ul class="navbar-nav p-3">
                    <li class="nav-item">
                        <a class=" nav-link active text-light" href="../product/list.blade.php"> <i class="ni ni-tv-2 " style="color: darkorange;"></i> Sản phẩm
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" href="../type_product/list.blade.php"> <i class="ni ni-tv-2 " style="color: darkorange;"></i> Loại sản phẩm
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link active text-light" href="../user/list.blade.php"> <i class="ni ni-tv-2 " style="color: darkorange;"></i> Người dùng
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link active text-light" href="../orders/order.blade.php"> <i class="ni ni-tv-2 " style="color: darkorange;"></i>Đơn Hàng
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
