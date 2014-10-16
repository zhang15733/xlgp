<?php
header("Content-Type: text/html; charset=utf-8");
?>

<html>
<head>
<meta charset="utf-8">
<title>微课·美剧</title>
<link href="<?php echo base_url('style/index/css/bootstrap.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('style/index/css/style.css'); ?>" rel="stylesheet">
</head>

<style type="text/css">
body {
  background-image: url(<?php echo base_url('style/index/image/bg.jpg')?>);
  background-size: cover;
}
</style>

<body>


<!-- ===============版权信息================ -->
<div class="footer">
 微课-美剧英语学习网 &nbsp;&nbsp;  @ All &nbsp; Rights &nbsp; Reserver &nbsp;&nbsp;  
      <a href="#"> 用户反馈 </a>  &nbsp;&nbsp;  
      <a href="#"> 关于我们 </a>  &nbsp;&nbsp;  
      <a href="#"> 联系方式 </a>  &nbsp;&nbsp;  
      <a href="#"> 负责声明 </a>  &nbsp;&nbsp; 
      <a href="#"> 帮助中心 </a>  &nbsp;&nbsp; 
</div>

<!-- ===============left================ -->
<div class="guide-left ">
  <img src="<?php echo base_url('style/index/image/logo-l.png')?>"/> 
  <div class="guide-type">
     <img src="<?php echo base_url('style/index/image/guide-c.png')?>"/>
  </div>
  <div class="guide-sy">
  	<!-- 首页 -->
     <a href="<?php echo site_url('index/main');?>"> <img src="<?php echo base_url('style/index/image/guide-sy.png');?>"/></a>
  </div>
  
  <div class="guide-grzx">
     <a href="<?php echo site_url('index/main/infocenter');?>"> <img src="<?php echo base_url('style/index/image/guide-grzx.png');?>"/></a>
  </div>
  
  <div class="guide-grbj">
    <a href="<?php echo site_url('index/main/show_note');?>"> <img src="<?php echo base_url('style/index/image/guide-grbj.png');?>"/> </a>
  </div>
  
  <div class="guide-spk">
     <a href="<?php echo site_url('index/main/show_video');?>"> <img src="<?php echo base_url('style/index/image/guide-spk.png');?>"/></a>
  </div>
  
  <div class="guide-dcj">
    <a href="<?php echo site_url('index/main/show_word');?>"> <img src="<?php echo base_url('style/index/image/guide-dcj.png');?>"/> </a>
  </div>
  
  <div class="guide-bfjl">
     <a href="<?php echo site_url('index/main/show_record');?>"><img src="<?php echo base_url('style/index/image/guide-bfjl.png');?>"/></a>
  </div>

</div>

<!-- ==================cantain=================== --> 

<div class="try">

  <div class="fond">
    <label>搜索美剧</label>
   <input class=" search-type" type="text" /><button class="search-btn"  type="submit"></button>
  </div>

  <input type="radio" name="tab" hidden="shortcut" id="tab1" class="tabs" checked="checked">
  <label for="tab1"> <img src="<?php echo base_url('style/index/image/rmsp.png');?>"/><b>热门视频</b> </label>
  <input type="radio" name="tab" hidden="shortcut" id="tab2" class="tabs">
  <label for="tab2"> <img src="<?php echo base_url('style/index/image/zjsc.png');?>"/><b>最近上传</b> </label>
  <input type="radio" name="tab" hidden="shortcut" id="tab3" class="tabs">
  <label for="tab3"> <img src="<?php echo base_url('style/index/image/cnxh.png');?>"/><b>猜你喜欢</b> </label>
  <input type="radio" name="tab" hidden="shortcut" id="tab4" class="tabs">
  <label for="tab4"> <img src="<?php echo base_url('style/index/image/rmzt.png');?>"/><b>热门专题</b> </label>

  <!-- ==================热门视频=================== --> 
  <div id="view1" class="tabcontent"><br />
    <?php
    $num = 0; 
    foreach ($video as $row): 
    	$id = $row->id;
		$num++;
    ?>
        <div class="etv">
	    	<a href="<?php echo site_url('index/video/video_play/'.$id);?>" target="_blank">
	    	<div class="first"><img class="first-size" src="<?php echo base_url($row->poster);?>"/></div>
	    	<div class="second"><p class="w-bg-second"><?php echo $row->title_zh.' '.$row->title_en?></p></div>
	    	</a>
    	</div>
    <?php endforeach ?>
    <?php for($i = 15; $i>$num; $i--){?> 
	    <div class="etv">
	        <a href="#">
	      <div class="first"><img class="first-size" src="<?php echo base_url('style/index/image//qipao.png' );?>"/></div></a>
	    </div>
    <?php }?>
    <div class="page">
    <ul class="pagination"><?php echo $pagelist; ?></ul>
    </div>
  </div>

<!-- ==================最近上传=================== --> 

  <div id="view2" class="tabcontent"><br />
    
   <?php
    $num = 0; 
    foreach ($video as $row): 
    	$id = $row->id;
		$num++;
    ?>
        <div class="etv">
	    	<a href="<?php echo site_url('index/video/video_play/'.$id);?>" target="_blank">
	    	<div class="first"><img class="first-size" src="<?php echo base_url($row->poster);?>"/></div>
	    	<div class="second"><p class="w-bg-second"><?php echo $row->title_zh.' '.$row->title_en?></p></div>
	    	</a>
    	</div>
    <?php endforeach ?>
    <?php for($i = 15; $i>$num; $i--){?> 
	    <div class="etv">
	        <a href="#">
	      <div class="first"><img class="first-size" src="<?php echo base_url('style/index/image//qipao.png' );?>"/></div></a>
	    </div>
    <?php }?>
    <div class="page">
    <ul class="pagination"><?php echo $pagelist; ?></ul>
    </div>
  </div>

<!-- ==================猜你喜欢=================== --> 
  <div id="view3" class="tabcontent"><br />
    
    <?php
    $num = 0; 
    foreach ($video as $row): 
    	$id = $row->id;
		$num++;
    ?>
        <div class="etv">
	    	<a href="<?php echo site_url('index/video/video_play/'.$id);?>" target="_blank">
	    	<div class="first"><img class="first-size" src="<?php echo base_url($row->poster);?>"/></div>
	    	<div class="second"><p class="w-bg-second"><?php echo $row->title_zh.' '.$row->title_en?></p></div>
	    	</a>
    	</div>
    <?php endforeach ?>
    <?php for($i = 15; $i>$num; $i--){?> 
	    <div class="etv">
	        <a href="#">
	      <div class="first"><img class="first-size" src="<?php echo base_url('style/index/image//qipao.png' );?>"/></div></a>
	    </div>
    <?php }?>
    <div class="page">
    <ul class="pagination"><?php echo $pagelist; ?></ul>
    </div>

  </div>

<!-- ==================热门专题=================== --> 
  <div id="view4" class="tabcontent"><br />
     
     <?php
    $num = 0; 
    foreach ($video as $row): 
    	$id = $row->id;
		$num++;
    ?>
        <div class="etv">
	    	<a href="<?php echo site_url('index/video/video_play/'.$id);?>" target="_blank">
	    	<div class="first"><img class="first-size" src="<?php echo base_url($row->poster);?>"/></div>
	    	<div class="second"><p class="w-bg-second"><?php echo $row->title_zh.' '.$row->title_en?></p></div>
	    	</a>
    	</div>
    <?php endforeach ?>
    <?php for($i = 15; $i>$num; $i--){?> 
	    <div class="etv">
	        <a href="#">
	      <div class="first"><img class="first-size" src="<?php echo base_url('style/index/image//qipao.png' );?>"/></div></a>
	    </div>
    <?php }?>
    <div class="page">
    <ul class="pagination"><?php echo $pagelist; ?></ul>
    </div>

  </div>

</div>




<!-- ==================over=================== -->

</body>
</html>
