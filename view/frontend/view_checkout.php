
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

<div style="padding: 20px;  width: 350px; float: left;">
	<form method="post" action="index.php?controller=checkout">
		<div class="container"> 
 		<!-- <div class="row">  -->
  		<div class="col-md-4 col-md-offset-0 "> 
  		 <legend><i class="glyphicon glyphicon-info-sign"></i>Thông tin mua hàng
   		</legend> 
    <input class="form-control" name="hovaten" placeholder="Họ và tên" required="" > 
    <input class="form-control" name="diachi" placeholder="Địa chỉ" >
    <input class="form-control" name="dienthoai" placeholder="Số điện thoại">
    <input class="form-control" name="ghichu" placeholder="Ghi chú">
    	</div>

    	

    	<div class="col-md-4 col-md-offset-0 "> 
  		 <legend><i class="glyphicon glyphicon-shopping-cart"></i>Hình thức thanh toán
   		</legend> 
    <div class="radio">
  	<label><input type="radio" name="optradio" checked>Thanh toán khi giao hàng (COD)</label>
	</div>
	 <div class="radio">
  	<label><input type="radio" name="optradio">Chuyển khoản qua ngân hàng</label>
	</div>
	 <div class="radio">
  	<label><input type="radio" name="optradio">Thanh toán bằng thẻ ATM</label>
	</div>
	<div style="margin-bottom: 22px;" class="radio">
  	<label><input type="radio" name="optradio">Thanh toán bằng thẻ Visa</label>
	</div>
    <button class="btn btn-lg btn-primary btn-block form-control2 " type="submit">Mua hàng</button> 
    	</div>

    	 </div>
    	</div>
   </form> 

