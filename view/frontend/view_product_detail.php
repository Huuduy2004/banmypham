<!-- Chi tiet san pham -->
<?php
    $id = isset($_GET["id"]) ? $_GET["id"]:0;
    //lây một bản ghi
    $product = $this->model->get_a_record("select * from tbl_product where pk_product_id=$id");
?>
<div class="box-container">
    <div class="box-home box-news">
        <div class="header">
        </div>
        <div class="content">                           
        <div class="detai-product-left" style="float: left; margin-right: 70px;">
            <img src="public/upload/product/<?php echo $product->c_img; ?>" style="border:1px solid #dddddd; padding:1px; width: 300px;"  />
        </div>
        <div class="detai-product-right" >
            <div class="product-list" >
                <ul>
                        <h3>
                        Tên sản phẩm: <?php echo $product->c_name; ?>
                        </h3>
                    <h3>
                        Danh mục: <?php
                            $category = $this->model->get_a_record("select c_name from tbl_category_product where pk_category_product_id=".$product->fk_category_product_id);
                            echo $category->c_name;
                         ?>
                   </h3>
                   <h3>
                    
                        Giá: <span style="color:red">  <?php echo number_format($product->c_price); ?> VNĐ </span>
                   </h3> 
                    <h3>
                        <a style="color: red" href="index.php?controller=cart&act=add&id=<?php echo $product->pk_product_id; ?>">
                        <img src="public/frontend/images/icon-cart.jpg" /> Mua sản phẩm này
                        </a>
                    </h3>
                </ul>
             </div>
        </div>
        <div style="clear:both; padding-top:15px;"></div>
            <ul>
                
                <div style="width: 840q vpx;" class="news1">                                                                                     
                    <div class="news-content">
                    <p><a href="#" class="news-title"><?php echo $product->c_description; ?></a></p>
                    <p><?php echo $product->c_content; ?></p>
                    </div>
                 </div>                                
                
            </ul> 
            <!-- comment -->
            <h2>Phản hồi khách hàng</h2>
            <div class="fb-comments" data-href="https://myphanhank65c.000webhostapp.com" data-width="700" data-numposts="5"></div>
            <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=1386244808136451&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
            <!-- end comment -->
        </div>                        
    </div>
</div>
<!-- hết chi tiet san pham --> 
