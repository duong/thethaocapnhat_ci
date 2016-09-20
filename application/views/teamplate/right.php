<div class="col-md-4">
  <div class="col-md-12">
    <div id="advertisement">
      <figure>
          
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FF-Music-198471657019766%2F&tabs=timeline&width=380&height=464&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="380" height="464" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

      </figure>  
    </div>
    <div class="right-box-tdn">
      <h4>Tin Đọc Nhiều</h4>
      <ul>
        <?php foreach($view as $value):?>
        <li>
            <figure>
              <a href=""><img src="<?php echo base_url();?>public/images/<?php echo $value['image'];?>"/></a>
            </figure>
            <p><span><?php echo $value['created'];?></span></p>
            <p><a href="<?php echo base_url();?>cau-thu/chi-tiet/<?php echo $value['title-url'];?>-<?php echo $value['id'];?>.html"><?php echo $value['title'];?></a></p>
        </li>
      <?php endforeach;?>
        
      </ul>
    </div>
    <div id="advertisement">
      <figure>
        <img src="<?php echo base_url(); ?>public/img/qc2.jpg"/>
      </figure>  
    </div>
    <div class="right-box-tdn">
      <h4>Tin Trong Ngày</h4>
      <ul>
        <li>
            <figure>
              <a href=""><img src="<?php echo base_url(); ?>public/img/b8.jpg"/></a>
            </figure>
            <p><span>18:45 20/05/2016</span></p>
            <p><a href="">ĐT Việt Nam gặp khó tại vòng loại U16 và U19 nữ châu Á 2017</a></p>
        </li>
        <li>
            <figure>
              <a href=""><img src="<?php echo base_url(); ?>public/img/b9.jpg"/></a>
            </figure>
            <p><span>18:45 20/05/2016</span></p>
            <p><a href="">ĐT Việt Nam gặp khó tại vòng loại U16 và U19 nữ châu Á 2017</a></p>
        </li>
        <li>
            <figure>
              <a href=""><img src="<?php echo base_url(); ?>public/img/b10.jpg"/></a>
            </figure>
            <p><span>18:45 20/05/2016</span></p>
            <p><a href="">ĐT Việt Nam gặp khó tại vòng loại U16 và U19 nữ châu Á 2017</a></p>
        </li>
        <li>
            <figure>
              <a href=""><img src="<?php echo base_url(); ?>public/img/b11.jpg"/></a>
            </figure>
            <p><span>18:45 20/05/2016</span></p>
            <p><a href="">ĐT Việt Nam gặp khó tại vòng loại U16 và U19 nữ châu Á 2017</a></p>
        </li>
        <li>
            <figure>
              <a href=""><img src="<?php echo base_url(); ?>public/img/b12.jpg"/></a>
            </figure>
            <p><span>18:45 20/05/2016</span></p>
            <p><a href="">ĐT Việt Nam gặp khó tại vòng loại U16 và U19 nữ châu Á 2017</a></p>
        </li>
        
      </ul>
    </div>

  </div>
</div>
