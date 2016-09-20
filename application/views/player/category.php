<div id="types">
<div class="col-md-8">
    <article id="main">
        <h4><?php echo $c_data[0]['name'];?></h4>
        <div id="new-box-type">
          <ul>
            <?php foreach($c_data as $value):?>
                <li>
                    <figure>
                      <a href=""><img src="<?php echo base_url();?>public/images/<?php echo $value['image'];?>"/></a>
                    </figure>
                    <p><span><?php echo $value['created'];?></span></p>
                    <p>
                        <a href="<?php echo base_url();?>cau-thu/chi-tiet/<?php echo $value['title-url'];?>-<?php echo $value['id'];?>.html"><?php echo $value['title'];?></a>
                    </p>
                    <p><?php echo $value['description'];?></p>
                </li>
            <?php endforeach;?>
          </ul>
        </div>
        </div>