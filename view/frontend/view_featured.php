                        <div class="featuredproductslider-container"> 
                            <div class="title-group1"><h2>Sản phẩm hot</h2></div>
                            <div id="featured-products" class="owl-container">
                                <div class="owl">
                                    <?php
                                    //liệt kê sản phẩm nổi bật
                                    $product = $this->model->get_all("select * from tbl_product where c_hotproduct = 1 limit 0,8");
                                    foreach ($product as $rows):
                                ?>
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <!-- <div class='new-icon'><span>hot</span></div> -->
                                                    <i style="left:5px;top:5px;font-size: 30px;color: #E33539" class="glyphicon glyphicon-heart-empty"></i>
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
                                                    <p class="old-price">
                                                        <span class="price-label">Regular Price: </span>
                                                        <span class="price">7.000.000 VNĐ</span>
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