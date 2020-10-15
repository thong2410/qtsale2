<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../codeADM/admin/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../codeADM/admin/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="../../../codeADM/admin/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../codeADM/admin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../../codeADM/admin/assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../../codeADM/admin/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../codeADM/admin/assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="../../../codeADM/admin/assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="../../../admin">
            <img src="../../../img/BI_Logo.png" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="../../../codeADM/admin/../../../codeADM/admin/assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li>
          </ul>

          <form class="ml-auto search-form d-none d-md-block" role="search" action="{{route('admin/search')}}" method="get" id="searchform">
            <div class="form-group">
              <input type="text" class="form-control" name="key" id="key" placeholder="Tìm Kiếm sản phẩm">
            </div>
          </form>
          <ul class="navbar-nav ml-auto">

            {{-- profile --}}
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="../../../codeADM/admin/assets/images/faces/face8.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../../../codeADM/admin/assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Hải Đẹp Trai</p>
                  <p class="font-weight-light text-muted mb-0">haideptrai@gmail.com</p>
                </div>
                <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="../../../codeADM/admin/assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Hải Đẹp trai</p>
                  <p class="designation">hải đẹp trai admin</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="../../../admin">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Sản phẩm</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../../admin/type_product/list">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Loại Sản Phẩm</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../../admin/orders/order">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">order</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#nguoidungcuaTra">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Người dùng</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
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
