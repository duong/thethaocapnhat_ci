<div class="tqt">
        <div class="mnu">
          <h4>Photo News</h4>
          <div class="new-box-tqt">
            <figure>
              <a href=""><img src="<?php echo base_url(); ?>public/images/<?php echo $img_row['image'];?>"/></a>
            </figure>
            <a href=""><?php echo $img_row['title'];?></a>
            <p><?php echo $img_row['description'];?></p>
          </div>
          <?php

        foreach ($p_data as $value) {?>
            <div class="new-box-tqt-dt">
              <div class="new-box-dt">
                <figure>
                  <a href=""><img src="<?php echo base_url(); ?>public/images/<?php echo $value['image'];?>"/></a>
                </figure>
                <a href=""><?php echo $value['title'];?><</a>
                <p><?php echo $value['description'];?></p>
              </div>
            </div>
            <?php
        }
      ?>
            
        </div>
      </div>