<div class="featuredproductslider-container"> 
    <div class="title-group1"><h2>Tìm kiếm</h2></div>
    <div id="featured-products" class="owl-container">
        <div class="owl">
           <?php
            
            foreach ($arr as $rows):
            ?>
            <div class='productslider-item item'>
                <div class="item-inner">
                    <div class="images-container">
                        <div class="product_icon">
                            <div class='new-icon'><span>hot</span></div>
                        </div>
                        <a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>" class="jt" title="<?php echo $rows->c_name; ?>" >
                            <img style="width: 195px; height: 231px;" src="public/upload/product/<?php echo $rows->c_img; ?>">
                        </a>
                    </div>
                    <div class="des-container">
                        <h2 style="text-align: center;" class="product-name"><a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>" title="<a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id; ?>" class="jt" ><?php echo $rows->c_name; ?></a></h2>
                        <div style="text-align: center;" class="price-box">
                            <p class="special-price">
                                <span class="price-label">Special Price</span>
                                <span class="price"><?php echo number_format($rows->c_price); ?>VNĐ</span>
                            </p>
                        </div>
                        <div class="ratings">
                            <div class="rating-box">
                                <div class="rating" style="width:67%"></div>
                            </div>
                            <span class="amount"><a href="#">3 Review(s)</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end product -->
            <?php endforeach; ?>
        </div>
    </div>
</div><!-- /.featuredproductslider-container -->