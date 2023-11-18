<div class="col-md-3">
    <div class="mega-container visible-lg visible-md">
        <div class="navleft-container">
            <div class="mega-menu-title"><h3>Danh mục</h3></div>
            <div class="mega-menu-category">
                <ul class="nav">
                <?php 
                $category = $this->model->get_all("select * from tbl_category_product");
                foreach ($category as $rows): 
                ?>
                <li class="nosub">
                <a href="index.php?controller=product_category&id=<?php echo $rows->pk_category_product_id; ?>"><?php echo $rows->c_name; ?></a>
                <div class="wrap-popup">
                            <div class="popup">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3>Nội địa</h3>
                                        <ul class="nav">
                                            <li><a href="#">Laco</a></li>
                                            <li><a href="#">Tima</a></li>
                                            <li><a href="#">Olay</a></li>
                                            <li><a href="#">Ponds</a></li>
                                            <li><a href="#">Krixi</a></li>
                                            <li><a href="#">Jinna</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 has-sep">
                                        <h3>Quốc tế</h3>
                                        <ul class="nav">
                                            <li><a href="#">Pháp</a></li>
                                            <li><a href="#">Hàn</a></li>
                                            <li><a href="#">Nhật</a></li>
                                            <li><a href="#">Thụy Điển</a></li>
                                            <li><a href="#">Roma</a></li>
                                            <li><a href="#">Ý</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 has-sep">
                                        <div class="custom-menu-right">
                                            <div class="box-banner media">
                                                <div class="media-body">
                                                    <h3>Olay</h3>
                                                    <div class="price-sale">40 <sup>%</sup><sub>off</sub></div>
                                                    <a href="#">&gt;Mua ngay</a>
                                                </div>
                                                <div class="media-right"><img src="images/products/img-01.jpg" alt=""></div>
                                             </div>
                                             <div class="box-banner media">
                                                <div class="media-body">
                                                    <h3>Nước hoa</h3>
                                                    <div class="price-sale">50 <sup>%</sup><sub>off</sub></div>
                                                    <a href="#">&gt;Mua ngay</a>
                                                </div>
                                                <div class="media-right"><img src="images/products/img-02.jpg" alt=""></div>
                                             </div>
                                             <div class="box-banner media">
                                                <div class="media-body">
                                                    <h3>Romano</h3>
                                                    <div class="price-sale">30 <sup>%</sup><sub>off</sub></div>
                                                    <a href="#">&gt;Mua ngay</a>
                                                </div>
                                                <div class="media-right"><img src="images/products/img-03.jpg" alt=""></div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <a href="#" class="ads"><img alt="" src="images/ads/ads-08.jpg" class="img-responsive"></a>
                            </div>
                        </div>
                </li>  

                <?php endforeach; ?> 
                </ul>
            </div>
        </div>
    </div>
</div>