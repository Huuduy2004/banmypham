<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	<meta charset="utf-8">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
	<link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">
  <script type="text/javascript" src="public/backend/ckeditor/ckeditor.js"></script>
  <link href="public/backend/css/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="public/backend/css/sb-admin.css" rel="stylesheet">
   <link href="public/backend/css/all.css" rel="stylesheet" integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
  <link href="public/backend/css/dataTables.bootstrap4.css" rel="stylesheet">
  <script src="public/backend/js/datatables-demo.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="admin.php?controller=home">Trang quản trị</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
<!-- search -->
      <div class="collapse navbar-collapse " id="navbarsExampleDefault">
        
      </div>
<!-- end search -->
<ul class="navbar-nav ml-auto ml-md-0">
        <ul class="navbar-nav mr-auto">
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Tìm kiếm ..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <span class="fa fa-search"></span>
            </button>
          </div>
        </div>
        </form>
        </ul>        
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <!-- @if($sl!=0) -->
            <span class="badge badge-danger"><!-- {{$sl}} --></span>
           <!--  @endif -->
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="{{url('admin/contact')}}">Tin nhắn</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1" style="color: white;line-height: 40px;"> 
          <?php if(isset($_SESSION["c_email"]) == true): ?>
          <?php echo $_SESSION["c_email"] ?>
          <?php endif ?>
          </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="{{url('admin/account/'.auth()->user()->id)}}">Tài khoản</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Đăng xuất</a>
          </div>
        </li>
      </ul>

</nav>


<div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav ">
          <li class="nav-item active">
          <a class="nav-link" href="admin.php?controller=home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
          <a class="nav-link" href="admin.php?controller=home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=category_product">Danh mục sản phẩm</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=product">Sản phẩm</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=order">Đơn hàng</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=slide">Slide</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=user">Danh sách người dùng</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=logout">Logout</a>
          </li>
      </ul>



    <div class="container" style="margin-top: 70px;">
    <?php 
        //kiem tra, neu duong dan ton tai thi load mvc do ra
        if(file_exists($controller))
          include $controller;
     ?>
    </div>
  </div>
    <script src="public/backend/js/chart-area-demo.js"></script>
    <script src="public/backend/js/Chart.min.js"></script>
</body>

</html>