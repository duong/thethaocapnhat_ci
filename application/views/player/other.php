<div class="col-md-7">
  <div class="lx">
    <h4>Tin Chính Khác</h4>
    <?php foreach($khac as $value):?>
      <div class="new-box">
        <figure>
          <a href=""><img src="<?php echo base_url(); ?>public/img/<?php echo $value['image'];?>"/></a>
        </figure>
        <p><span><?php echo $value['modified'];?></span></p>
        <p><a href="player/view/<?php echo $value['id'];?>"><?php echo $value['title'];?></a></p>
      </div>
    <?php endforeach;?>
  </div>
</div>