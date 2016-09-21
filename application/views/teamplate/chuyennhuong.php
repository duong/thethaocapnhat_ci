<div class="tqt">
        <div class="mnu">
          <h4>Photo News</h4>
          <div class="new-box-tqt">
            <figure>
              <a href="<?php echo base_url();?>cau-thu/chi-tiet/<?php echo $img_row['title-url'];?>-<?php echo $img_row['id'];?>.html""><img src="<?php echo base_url(); ?>public/images/<?php echo $img_row['image'];?>"/></a>
            </figure>
            <a href="<?php echo base_url();?>cau-thu/chi-tiet/<?php echo $img_row['title-url'];?>-<?php echo $img_row['id'];?>.html"><?php echo $img_row['title'];?></a>
            <p><?php echo $img_row['description'];?></p>
          </div>
          <div class="new-box-tqt-dt">
          <?php

        foreach ($p_data as $value) {?>
            
              <div class="new-box-dt">
                <figure>
                  <a href="<?php echo base_url();?>cau-thu/chi-tiet/<?php echo $value['title-url'];?>-<?php echo $value['id'];?>.html"><img src="<?php echo base_url(); ?>public/images/<?php echo $value['image'];?>"/></a>
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