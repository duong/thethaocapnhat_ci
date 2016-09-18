<div class="col-md-5">
  <h4>Photo new</h4>
  <div class="cx">
    <?php foreach($image as $value):?>
      <div class="new-box">
        <figure>
          <a href=""><img src="<?php echo base_url();?>public/images/<?php echo $value['image'];?>"/></a>
        </figure>
        <p><span><?php echo $value['modified'];?></span></p>
        <p><a href="<?php echo base_url();?>cau-thu/chi-tiet/<?php echo $value['title-url'];?>-<?php echo $value['id'];?>.html"><?php echo $value['title'];?></a></p>
      </div>
    <?php endforeach;?>
  </div>
</div>