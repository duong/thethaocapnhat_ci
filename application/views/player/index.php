<div class="col-md-8">
	<article id="main">
		<div class="col-sm-7">
		  <figure id="img-new">
		    <a href="detai.html"><img src="<?php echo base_url(); ?>public/images/<?php echo $first_row['image'] ;?>" name="chelsea" alt="chelsea"></a>
		  </figure>
		  <h4><a href="<?php echo base_url();?>cau-thu/chi-tiet/<?php echo $first_row['title-url'];?>-<?php echo $first_row['id'];?>.html"><?php echo $first_row['title'];?></a></h4>
		  <p><?php echo $first_row['description'];?></p>
		</div>
		<div class="col-sm-5">
		  Tin mới nhất »
		  	<?php
				foreach ($b_data as $value) {?>
					<div class="new-box">
					    <figure>
					      <a href="detai.html"><img src="<?php echo base_url();?>public/images/<?php echo $value['image'];?>"/></a>
					    </figure>
					    <p><span><?php echo $value['modified'];?></span></p>
					    <p><a href="<?php echo base_url();?>cau-thu/chi-tiet/<?php echo $value['title-url'];?>-<?php echo $value['id'];?>.html"><?php echo $value['title'];?></a></p>
					</div>
			<?php
				}
			?>
		</div>