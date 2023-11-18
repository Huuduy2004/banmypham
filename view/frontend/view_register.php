
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
   <legend><i class="glyphicon glyphicon-globe"></i>Đăng ký thành viên!
   </legend> 
   <form action="index.php?controller=register" method="post" class="form" role="form"> 
    <input class="form-control" name="hovaten" placeholder="Họ và tên" required=""  type="text"> 
    <input class="form-control" name="email" placeholder="Email" type="email">
     <input class="form-control" name="password" placeholder="Mật khẩu" type="password">
     <input class="form-control" name="diachi" placeholder="Địa chỉ" type="text">
     <input class="form-control" name="dienthoai" placeholder="Số điện thoại" type="text">
     <label>Giới tính</label>
    <label class="radio-inline">         
    <input name="sex" id="inlineCheckbox1" value="male" type="radio">          Nam </label> <label class="radio-inline">   <input name="sex" id="inlineCheckbox2" value="female" type="radio">          Nữ </label> 
    <br> 
    <br> 
    <button class="btn btn-lg btn-primary btn-block form-control2 " type="submit"> Đăng ký</button> 
   </form> 
  </div> 
 </div>
</div>