    
      <div class="tqt">
        <div class="mnu">
          <h4>video</h4>
          <div class="new-box-tqt">
            <figure>
              <a href=""><img src="<?php echo base_url(); ?>public/images/<?php echo $first_roat['image'];?>"/></a>
            </figure>
            <a href=""><?php echo $first_roat['title'];?></a>
            <p><?php echo $first_roat['description'];?></p>
          </div>
          <div class="new-box-tqt-dt">
          <?php
        foreach ($d_data as $value) {?>
            
              <div class="new-box-dt">
                <figure>
                  <a href=""><img src="<?php echo base_url(); ?>public/images/<?php echo $value['image'];?>"/></a>
                </figure>
                <a href=""><?php echo $value['title'];?><</a>
                <p><?php echo $value['description'];?></p>
              </div>
            
            <?php
        }
      ?>
            </div>
        </div>
      </div>
      

    </div>
  </article>
</div>
