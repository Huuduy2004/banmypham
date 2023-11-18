<!-- left news -->
<div class="box-container">
	<div class="box-left">
    	<div class="header">
        	<a href="#">Tin tức</a>
        </div>
        <div class="content">
        <marquee direction="up" scrollamount="2" scrolldelay="2" onmouseover="this.stop()" onmouseout="this.start()">
			<ul>
            <?php
                $hotnews = $this->model->get_all("select * from tbl_news where c_hotnews = 1 order by pk_news_id desc limit 0,5");
                foreach ($hotnews as $rows): 
            ?>
            	<li><a href="index.php?controller=news_detail&id=<?php echo $rows->pk_news_id; ?>"><?php echo $rows->c_name; ?></a></li>
            <?php endforeach; ?>
            </ul>
            </marquee>
        </div>
    </div>
</div>
<!-- end left news -->