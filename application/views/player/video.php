<div class="col-md-5">
  <h4>Video</h4>
  <div class="cx">
    <?php foreach($videos as $value):?>
      <div class="new-box">
        <figure>
          <a href="<?php echo base_url();?>cau-thu/chi-tiet/<?php echo $value['title-url'];?>-<?php echo $value['id'];?>.html"><img src="<?php echo base_url(); ?>public/images/<?php echo $value['image'];?>"/></a>
        </figure>
        <p><span><?php echo $value['created'];?></span></p>
        <p><a href="<?php echo base_url();?>cau-thu/chi-tiet/<?php echo $value['title-url'];?>-<?php echo $value['id'];?>.html"><?php echo $value['title'];?></a></p>
      </div>
    <?php endforeach;?>
  </div>
</div>