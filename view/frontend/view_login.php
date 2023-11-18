<style type="text/css">
.form-control { 
margin-bottom: 10px;
border-radius: 10px;
}
.form-control2 { 
border-radius: 10px;
}

.login-screen-bg {  
background-color: #EFEFEF;
}
body {  
padding-top: 0px;
}
</style>

<div class="container"> 
 <div class="row"> 
  <div class="col-md-4 col-md-offset-2 "> 
   <legend><i class="glyphicon glyphicon-globe"></i>Đăng nhập
   </legend> 
   <form action="" method="post" class="form" role="form"> 
    <input class="form-control" name="email" placeholder="Email" type="email">
     <input class="form-control" name="password" placeholder="Mật khẩu" type="password">
    <br> 
    <button class="btn btn-lg btn-primary btn-block form-control2 " type="submit"> Đăng nhập</button> 
    <div style="text-align: center;">
    <a style="font-weight: bold;" href="index.php?controller=register">Chưa có tài khoản ? Đăng kí ngay !</a>
    </div>
   </form> 
  </div> 
 </div>
</div>