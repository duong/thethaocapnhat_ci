<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Thethaocapnhat.com - Tin tức - Trang thông tin Thể Thao, Bóng Đá, Quần Vợt, Đua Xe, Bóng Rổ, Golf và nhiều môn thể thao khác. Tin tức, Kết quả, Lịch thi đấu, Bảng xếp hạng, Tỷ lệ, Dự đoán cập nhật liên tục.">
  <meta name="keywords" content="Bong da,The thao,world cup,euro,sea games,aff cup,tin quan vot,tin tennis,uc mo rong,my mo rong,phap mo rong,roland garros,wimbledon,tin đua xe,tin f1,grand prix,oto,xe may,tin bong ro,tin nba,tin golf,Tin bong da,ngoai hang anh,bong da anh,premier league" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title><?php echo $page_title;?></title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url(); ?>public/css/main.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>public/css/stylesheet.css" rel="stylesheet" type="text/css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>public/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="<?php echo base_url(); ?>public/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84374719-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>  
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container">
  <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url();?>" style="color:#fff;">Tin The Thao 365</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
          <?php //print_r($mains);die;?>
          <?php foreach($mains as $value):?>
            <li><a href="<?php echo base_url();?>player/category/<?php echo $value['id'];?>"><?php echo $value['name'];?></a></li>
        <?php endforeach;?>
        </ul>
      </div>
  </nav>