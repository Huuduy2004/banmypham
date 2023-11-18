<?php 
    $slide = $this->model->get_all("select * from tbl_slide order by pk_slide_id desc");
    $n = 0;
 ?>
<div class="col-md-9 col-md-offset-3">
    <div class="flexslider ma-nivoslider">
          <div class="ma-loading"></div>
                <div id="ma-inivoslider-banner7" class="slides" style="height: 400px;">
                            <?php 
            				        $n = 0;
            				        foreach($slide as $rows):
         					          ?>
                <div class="carousel-item <?php if($n==0): ?> active<?php endif; ?>"> 
                <img  src="public/upload/slide/<?php echo $rows->c_img; ?>" alt="<?php echo $rows->c_name; ?>">
                </div>
          					        <?php 
              				      $n++;
            				        endforeach;
          					       ?>	
                </div>                     
      </div>
</div>