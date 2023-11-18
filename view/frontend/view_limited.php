<div class="block">
<div class="title-group"><h2>Hàng giới hạn</h2></div>
<div id="special-offer" class="owl-container">
    <div class="owl">
            <?php
        //liệt kê sản phẩm nổi bật
        $product = $this->model->get_all("select * from tbl_product where c_hotproduct = 1 limit 0,4");
        foreach ($product as $rows):
    ?>
        <div class='sepecialoffer-item item'>
            <div class="item-inner first">
                <div class="images-container">
                    <a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>" title="<?php echo $rows->c_name;?>" class="product-image">
                        <img style="width: 87px;height: 103px;" src="public/upload/product/<?php echo $rows->c_img; ?>" />
                    </a>
                </div>
                <div class="des-container">
                    <h2 class="product-name"><a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>" title="Primis in faucibus"><?php echo $rows->c_name; ?></a></h2>
                    <div class="price-box">
                        <p class="special-price">
                            <span class="price"><?php echo number_format($rows->c_price); ?>VNĐ</span>
                        </p>
                        <p class="old-price">
                            <span class="price"></span>
                        </p>
                    </div>
                    <div class="ratings">
                        <div class="rating-box">
                            <div class="rating" style="width:87%"></div>
                        </div>
                        <span class="amount"><a href="#">1 Review(s)</a></span>
                    </div>
                </div>
            </div>
             
        </div>
          <?php endforeach; ?>  
    </div>

</div><!-- /.owl-container -->

</div><!-- /.block - Special offer -->