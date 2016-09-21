<div class="col-md-12">
    
      <div class="tqt">
        <div class="mnu">
          <h4>video</h4>
          <div class="new-box-tqt">
            <figure>
              <a href="<?php echo base_url();?>cau-thu/chi-tiet/<?php echo $first_roat['title-url'];?>-<?php echo $first_roat['id'];?>.html""><img src="<?php echo base_url(); ?>public/images/<?php echo $first_roat['image'];?>"/></a>
            </figure>
            <a href="<?php echo base_url();?>cau-thu/chi-tiet/<?php echo $first_roat['title-url'];?>-<?php echo $first_roat['id'];?>.html"><?php echo $first_roat['title'];?></a>
            <p><?php echo $first_roat['description'];?></p>
          </div>
          <div class="new-box-tqt-dt">
          <?php
        foreach ($d_data as $value) {?>
            
              <div class="new-box-dt">
                <figure>
                  <a href="<?php echo base_url();?>cau-thu/chi-tiet/<?php echo $value['title-url'];?>-<?php echo $value['id'];?>.html""><img src="<?php echo base_url(); ?>public/images/<?php echo $value['image'];?>"/></a>
                </figure>
                <a href="<?php echo base_url();?>cau-thu/chi-tiet/<?php echo $value['title-url'];?>-<?php echo $value['id'];?>.html""><?php echo $value['title'];?><</a>
                <p><?php echo $value['description'];?></p>
              </div>
            
            <?php
        }
      ?>
           </div> 
        </div>
      </div>