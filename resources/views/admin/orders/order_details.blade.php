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

   <div class="card">
    <div class="card-header">
       <h1>Thông Tin Khách Hàng</h1>
    </div>
    <div class="card-body">
        <?php $i = 1 ?>
     @foreach ($db as $item)

     <ul class="list-group list-group-flush">
         <li class="list-group-item"><strong>Họ và tên:</strong>{{$item->order_name}} </li>
         <li class="list-group-item"><strong>Số điện thoại:</strong>{{$item->order_sdt}} </li>
         <li class="list-group-item"><strong>Địa chỉ giao hàng:</strong>{{$item->address}}</li>
         <li class="list-group-item"><strong>Ngày/ Giờ đặt hàng:</strong>{{$item->order_date}} </li>
         <li class="list-group-item"><strong>Ghi chú:</strong>{{$item->note}}</li>
       </ul>
    </div>
    <div class="card-footer text-muted">

         <h5 class="card-title"><strong>Tình trạng đơn hàng</strong></h5>


               <div >

                 <h4 class="card-link">{{$item->getstatus->status_order }}</h4>
                 <h4 style="text-align: right"><strong>Tổng tiền:</strong> {{ number_format($item ->total_price,2,",",".") }}đ </h4>

    </div>
</div>

 @endforeach
{{--
 <table class="table table-hover">
    <thead>
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
            <td>{{ $i->pivot->weight }}</td>
            <td>{{ number_format($i->pivot->total * $i->pivot->weight,2,",",".") }} đ</td>


          </tr>
          <?php $a++ ?>
          @endforeach

    </tbody>
  </table> --}}



    </div></div>
          <!-- content-wrapper ends -->
            </div>
        <!-- main-panel ends -->
        </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../../codeADM/admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../../codeADM/admin/assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../../../codeADM/admin/assets/js/shared/off-canvas.js"></script>
    <script src="../../../codeADM/admin/assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../../codeADM/admin/assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>

