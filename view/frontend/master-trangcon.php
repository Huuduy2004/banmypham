
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" 
      type="image/png" 
      href="public/frontend/images/logo-comestic.jpg">

      <title>Web bán mỹ phẩm DPN</title>


    <link rel="stylesheet" type="text/css" href="public/frontend/css/style-login.css">
    <link href="public/frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/frontend/css/nivo-slider.css" rel="stylesheet">
    <link href="public/frontend/css/animate.css" rel="stylesheet">
    <link href="public/frontend/css/owl.carousel.css" rel="stylesheet">
    <link href="public/frontend/css/style.css" rel="stylesheet">
    <link href="public/frontend/css/responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
        <div class="header">
            <div class="topbar">
                <div class="container">
                    <div style="margin-left: -10px;" class="topbar-left">
                        <ul class="topbar-nav clearfix">
                           <li><span class="phone">0(123) 456 789</span></li>
                            <li><span class="email">myphamhan@.com</span></li>
                        </ul>
                    </div>
                    <div class="topbar-right">
                        <ul class="topbar-nav clearfix">
                            <?php if(isset($_SESSION["email"]) == false): ?>
                            <li><a href="index.php?controller=register" id="loginform">Đăng kí</a></li>
                            <li>
                            <a href="index.php?controller=login" id="loginform">Đăng nhập</a>
                            </li>

                            <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="account dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION["email"] ?></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a title="My Account" href="account.html">Tài khoản của tôi</a></li>
                                    <li><a title="My Wishlist" href="index.php?controller=my_order">Đơn hàng của tôi</a></li>
                                    <li><a title="My Cart" href="cart.html">Đổi mật khẩu</a></li>
                                    <li><a href="index.php?controller=logout" id="loginform">Đăng xuất</a></li>
                                </ul>
                            </li>
                            <?php endif ?>
                        </ul>
                    </div>
                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="http://localhost/banmypham/index.php" class="logo"><img style="width: 260px;height: 100px;" src="public/frontend/images/logo-comestic.jpg" alt=""></a>
                        </div>
                        <div class="col-md-9">
                            <div class="support-client">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="box-container time">
                                            <div class="box-inner">
                                                <h2>Mở cửa</h2>
                                                <p>Mon- Sun: 8.00 - 18.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="box-container free-shipping">
                                            <div class="box-inner">
                                                <h2>Miễn phí ship</h2>
                                                <p>Tất cả sản phẩm</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="box-container money-back">
                                            <div class="box-inner">
                                                <h2>Hoàn $ 100%</h2>
                                                <p>30 ngày sau khi nhận</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.support-client -->
                          <form class="form-search" method="get">
                                <script type="text/javascript">
                                function search(){
                                    var key = document.getElementById("key").value;
                                    //alert(key);
                                    window.location.href="index.php?controller=search&key="+key;
                                }
                                </script>
                                <input type="text" class="input-text" id="key" placeholder="Tìm kiếm ...">
                              <div class="dropdown">
                                    <button type="button" class="btn" data-toggle="dropdown">Tất cả danh mục<span class="fa fa-angle-down"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="index.php?controller=product_category&id=2">Trang điểm</a></li>
                                        <li><a href="index.php?controller=product_category&id=3">Dưỡng da</a></li>
                                        <li><a href="index.php?controller=product_category&id=4">Nước hoa</a></li>
                                        <li><a href="index.php?controller=product_category&id=6">Khác</a></li>
                                    </ul>
                                </div>
                                <button type="text" class="btn btn-danger"  onclick="search(); return false;" ><span class="fa fa-search"></span></button>
                            </form>                              
                            <div class="mini-cart">
                                <div style="width: 180px;" class="top-cart-title">
                                    <a style="color:white;" href="index.php?controller=cart">
                                        Giỏ hàng
                                        <span class="price">chi tiết</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php include "controller/frontend/controller_inc_product.php" ?>
                        <div style="text-align: center;" class="col-md-9">
                            <ul class="menu clearfix visible-lg visible-md">
                                 <li style="width: 165px;"><a  href="index.php">Trang chủ</a></li>
                                <li style="width: 162px;"><a href="index.php?controller=intro">Giới thiệu</a></li>
                                <li style="width: 164px;"><a href="index.php?controller=policy">Chính sách</a></li>
                                <li style="width: 210px;"><a href="index.php?controller=cskh">Chăm sóc khách hàng</a></li>
                                <li style="width: 185px;"><a href="index.php?controller=contact">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-primary navbar-static-top hidden-lg hidden-md">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <h2 class="navbar-brand visible-xs">Menu</h2>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Computer <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Desktop PC</a></li>
                                        <li><a href="#">Notebook</a></li>
                                        <li><a href="#">Gaming</a></li>
                                        <li><a href="#">Mouse &amp; Keyboard</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Camera <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Walkera</a></li>
                                        <li><a href="#">Fpv System &amp; Parts</a></li>
                                        <li><a href="#">RC Cars &amp; Parts</a></li>
                                        <li><a href="#">Helicopters &amp; Part</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Smart Phone <span class="fa fa-angle-down"></span></a>                                   <ul class="dropdown-menu">
                                        <li><a href="#">Accessories for iPhone</a></li>
                                        <li><a href="#">Accessories for iPad</a></li>
                                        <li><a href="#">Accessories for Tablet PC</a></li>
                                        <li><a href="#">Tablet PC</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Electtronic <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Batteries &amp; Chargers</a></li>
                                        <li><a href="#">Headphone, Headset</a></li>
                                        <li><a href="#">Home Audio</a></li>
                                        <li><a href="#">Mp3 Player Accessories</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">New Arrivals</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container -->
                </nav>
            </div><!-- /.header-bottom -->
        </div><!-- /.header -->
        
        <div class="main">
            <div class="container">
                <div class="row">
                </div>
                <div class="row">
                    <div class="col-sm-3 col-left">
                        <div style="margin-top: 360px;"></div>
                        <?php include "controller/frontend/controller_hotdeal.php" ?>
                        <?php include "controller/frontend/controller_limited.php" ?>
          <div class="block">
                            <div class="title-group"><h2>Feedback</h2></div>
                            <div id="clients-say" class="owl-container">
                                <div class="owl">
                                    <div class='testimonial-list'>
                                        <div class="testimonial-sidebar-content">
                                            <div class="content">
                                                <a href="#">Tôi là Khổng Đình Oai , kể từ khi sử dụng mỹ phẩm Hàn Quốc , da mặt tôi căng mịn hơn , sáng bóng hơn . Giúp tôi có một gương mặt đẹp trai đi tán gái . Cảm ơn myphamhanquoc nhiều</a>
                                            </div>
                                            <div class="post-by">
                                                <div class="testimonial-content-avatar">
                                                    <img src="public/frontend/images/avatar/avatar-01.jpg" alt="test" />
                                                </div>
                                                <div class="box-author">
                                                    <span class="testimonial-author">Mr Oai</span>
                                                    <span class="testimonial-date">December 24, 2018</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='testimonial-list'>
                                        <div class="testimonial-sidebar-content">
                                            <div class="content">
                                                <a href="#">Tôi là Nguyễn Mạnh Rùa , kể từ khi sử dụng mỹ phẩm Hàn Quốc , da mặt tôi căng mịn hơn , sáng bóng hơn . Giúp tôi có một gương mặt đẹp trai đi tán gái . Cảm ơn myphamhanquoc nhiều</a>
                                            </div>
                                            <div class="post-by">
                                                <div class="testimonial-content-avatar">
                                                    <img src="public/frontend/images/avatar/avatar-02.jpg" alt="test" />
                                                </div>
                                                <div class="box-author">
                                                    <span class="testimonial-author">Mr Rùa</span>
                                                    <span class="testimonial-date">January 30, 2018</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='testimonial-list'>
                                        <div class="testimonial-sidebar-content">
                                            <div class="content">
                                                <a href="#">Tôi là Đỗ Hoàng , kể từ khi sử dụng mỹ phẩm Hàn Quốc , da mặt tôi căng mịn hơn , sáng bóng hơn . Giúp tôi có một gương mặt đẹp trai đi tán gái . Cảm ơn myphamhanquoc nhiều</a>
                                            </div>
                                            <div class="post-by">
                                                <div class="testimonial-content-avatar">
                                                    <img src="public/frontend/images/avatar/avatar-03.jpg" alt="test" />
                                                </div>
                                                <div class="box-author">
                                                    <span class="testimonial-author">mr Hoàng</span>
                                                    <span class="testimonial-date">January 24, 2018</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.block - Latest News -->
                    </div><!-- /.col-left -->
                    <div class="col-sm-9 col-right">
                       
                        <div class="banner">
                            <a href="#"><img alt="" src="public/frontend/images/ads/ads-05.jpg"></a>
                        </div>
                            <!-- detail product -->
                                <?php
                                if(file_exists($file_controller))
                                include $file_controller;
                                ?> 

                                </div><!-- /.product-list -->
                            </div>
                        </div>
                    </div><!-- /.col-right -->
                </div>
            </div>
        </div><!-- /.main -->
        
        <div class="catlist">
            <div class="container">
                <div class="title-group1">
                    <h2>Top Danh Mục Sản Phẩm Hot</h2>
                </div> 
                <?php include "controller/frontend/controller_top_category.php" ?>
            </div>
        </div><!-- /.catlist -->       
        <div class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 hidden-sm hidden-xs">
                            <div class="subscribe">
                                <div class="subscribe-inner">
                                     <h3>Đăng kí để nhận mail</h3>
                                    Nhận tin khuyến mãi,sản phẩm mới hàng ngày 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-8">
                            <form method="post" class="form-inline form-subscribe">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="newsletter" name="email">
                                </div>
                                <button class="btn btn-danger" title="Subscribe" type="submit">Gửi đi</button>
                            </form>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <ul class="social">
                                <li><a href="#" class="face">face</a></li>
                                <li><a href="#" class="google">google</a></li>
                                <li><a href="#" class="twitter">twitter</a></li>
                                <li><a href="#" class="youtube">youtube</a></li>
                                <li><a href="#" class="linkedin">linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- /.footer-top -->
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="footer-title">
                                <h2>contact us</h2>
                            </div>
                            <div class="footer-content">
                                <div class="email add">
                                    <p>Support@plazathemes.com</p>
                                </div>
                                <div class="phone add">
                                    <p>(800) 0123 456 789</p>
                                </div>
                                <div class="address add">Address: 
                                    <p>1234 - Bandit Tringi lAliquam Vitae. New York</p>
                                </div>
                                <div class="contact-link"><a href="#" class="btn btn-default">Open in Google Maps</a></div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="footer-title">
                                <h2>MY ACCOUNT</h2>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Your Account</a></li>
                                    <li><a href="#">Advanced Search</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="footer-title">
                                <h2>Payment &amp; Shipping</h2>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Shipping Guide</a></li>
                                    <li><a href="#">Locations We Ship To</a></li>
                                    <li><a href="#">Estimated Delivery Time</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="footer-title">
                                <h2>Customer Service</h2>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="#">Shipping Policy</a></li>
                                    <li><a href="#">Compensation First</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Return Policy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="copy">Copyright &copy; 2015 Plazathemes. All Rights Reserved</div>
                        </div>
                        <div class="col-sm-6">
                            <div class="payment"><img src="public/frontend/images/payment.png" alt="" class="img-responsive"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.footer -->
          
  <!-- ibfb -->

  <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="651649335034658"
  theme_color="#ff5ca1"
  logged_in_greeting="Xin chào ! Myphamhank65c có thể giúp gì cho bạn ?"
  logged_out_greeting="Xin chào ! Myphamhank65c có thể giúp gì cho bạn ?">
</div>

  <!-- end ibfb -->
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="public/frontend/js/bootstrap.min.js"></script>
        <script src="public/frontend/js/jquery.nivo.slider.pack.js"></script>
        <script src="public/frontend/js/owl.carousel.min.js"></script>
        <script src="public/frontend/js/main.js"></script>
        <script type="text/javascript">
            /* Main Slideshow */
            $(window).load(function() {
                $(document).off('mouseenter').on('mouseenter', '.pos-slideshow', function(e){
                    $('.ma-banner7-container .timethai').addClass('pos_hover');
                });
                $(document).off('mouseleave').on('mouseleave', '.pos-slideshow', function(e){
                    $('.ma-banner7-container .timethai').removeClass('pos_hover');
                });
            });
            $(window).load(function() {
                $('#ma-inivoslider-banner7').nivoSlider({
                    effect: 'random',
                    slices: 15,
                    boxCols: 8,
                    boxRows: 4,
                    animSpeed: 1000,
                    pauseTime: 6000,
                    startSlide: 0,
                    controlNav: false,
                    controlNavThumbs: false,
                    pauseOnHover: true,
                    manualAdvance: false,
                    prevText: 'Prev',
                    nextText: 'Next',
                    afterLoad: function(){
                        },     
                    beforeChange: function(){ 
                    }, 
                    afterChange: function(){ 
                    }
                });
            });
            $(document).ready(function(){
                /* timely-owl */
                $("#timely-owl .owl").owlCarousel({
                    autoPlay : false,
                    items : 1,
                    itemsDesktop : [1199,1],
                    itemsDesktopSmall : [991,1],
                    itemsTablet: [767,2],
                    itemsMobile : [480,1],
                    slideSpeed : 1000,
                    paginationSpeed : 1000,
                    rewindSpeed : 1000,
                    navigation : true,
                    stopOnHover : true,
                    pagination : false,
                    scrollPerPage:true,
                });
                /* special-offer slider */
                $("#special-offer .owl").owlCarousel({
                    autoPlay : false,
                    items : 1,
                    itemsDesktop : [1199,1],
                    itemsDesktopSmall : [991,1],
                    itemsTablet: [767,2],
                    itemsMobile : [480,1],
                    slideSpeed : 3000,
                    paginationSpeed : 3000,
                    rewindSpeed : 3000,
                    navigation : true,
                    stopOnHover : true,
                    pagination : false,
                    scrollPerPage:true,
                });
                /* latest-news slider */
                $("#latest-news .owl").owlCarousel({
                    autoPlay : false,
                    items : 1,
                    itemsDesktop : [1199,1],
                    itemsDesktopSmall : [991,1],
                    itemsTablet: [767,2],
                    itemsMobile : [480,1],
                    slideSpeed : 1000,
                    paginationSpeed : 1000,
                    rewindSpeed : 1000,
                    navigation : true,
                    stopOnHover : true,
                    pagination : false,
                    scrollPerPage:true,
                });
                /* clients-say slider */
                $("#clients-say .owl").owlCarousel({
                    autoPlay : false,
                    items : 1,
                    itemsDesktop : [1199,1],
                    itemsDesktopSmall : [991,1],
                    itemsTablet: [767,2],
                    itemsMobile : [480,1],
                    slideSpeed : 3000,
                    paginationSpeed : 3000,
                    rewindSpeed : 3000,
                    navigation : true,
                    stopOnHover : true,
                    pagination : false,
                    scrollPerPage:true,
                });
                /* featured-products slider */
                $("#featured-products .owl").owlCarousel({
                    autoPlay : false,
                    items : 4,
                    itemsDesktop : [1199,3],
                    itemsDesktopSmall : [991,2],
                    itemsTablet: [767,2],
                    itemsMobile : [480,1],
                    slideSpeed : 3000,
                    paginationSpeed : 3000,
                    rewindSpeed : 3000,
                    navigation : true,
                    stopOnHover : true,
                    pagination : false,
                    scrollPerPage:true,
                });
                /* new-products slider */
                $("#new-products .owl").owlCarousel({
                    autoPlay : false,
                    items : 4,
                    itemsDesktop : [1199,3],
                    itemsDesktopSmall : [991,2],
                    itemsTablet: [767,2],
                    itemsMobile : [480,1],
                    slideSpeed : 3000,
                    paginationSpeed : 3000,
                    rewindSpeed : 3000,
                    navigation : true,
                    stopOnHover : true,
                    pagination : false,
                    scrollPerPage:true,
                });
            });
        </script>
        
        <!-- Hot Deals Timer 1-->
        <script type="text/javascript">
            var dthen1 = new Date("12/25/33 11:59:00 PM");
            start = "08/04/15 03:02:11 AM";
            start_date = Date.parse(start);
            var dnow1 = new Date(start_date);
            if(CountStepper>0)
                ddiff= new Date((dnow1)-(dthen1));
            else
                ddiff = new Date((dthen1)-(dnow1));
            gsecs1 = Math.floor(ddiff.valueOf()/1000);
            
            var iid1 = "countbox_1";
            CountBack_slider(gsecs1,"countbox_1", 1);
        </script>
        <!-- Hot Deals Timer 2-->
        <script type="text/javascript">
            var dthen2 = new Date("05/21/26 11:59:00 PM");
            start = "08/04/15 03:02:11 AM";
            start_date = Date.parse(start);
            var dnow2 = new Date(start_date);
            if(CountStepper>0)
                ddiff= new Date((dnow2)-(dthen2));
            else
                ddiff = new Date((dthen2)-(dnow2));
            gsecs2 = Math.floor(ddiff.valueOf()/1000);
            
            var iid2 = "countbox_2";
            CountBack_slider(gsecs2,"countbox_2", 2);
        </script>
        <!-- Hot Deals Timer 3-->
        <script type="text/javascript">
            var dthen3 = new Date("05/21/33 11:59:00 PM");
            start = "08/04/15 03:02:11 AM";
            start_date = Date.parse(start);
            var dnow3 = new Date(start_date);
            if(CountStepper>0)
                ddiff= new Date((dnow3)-(dthen3));
            else
                ddiff = new Date((dthen3)-(dnow3));
            gsecs3 = Math.floor(ddiff.valueOf()/1000);
            
            var iid3 = "countbox_3";
            CountBack_slider(gsecs3,"countbox_3", 3);
        </script>
        <script  src="public/frontend/js/login.js"></script>
  </body>
</html>
