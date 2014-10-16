<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>微课·美剧</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<style type="text/css">
body {
  background-image: url(image/bg.jpg);
  background-size: cover;
}
</style>

<body>
<style>
body{
	font-family: "微软雅黑","宋体",Helvetica, Arial, sans-serif;
	background-image:url(bg.jpg);
	background-size:cover;  
	margin:0;
	padding:0;
	height:100%;
}
 
.guide-left{
    background-size:cover;
	width:23%;
	height:780px;
	margin:0;
	float:left;
        position:fixed;
}
.section1{margin:0;
	padding:0;
	 position: relative;
	}


.nav{
	display:inline-block;
	float:left;
	margin-left:22%;
    margin-top:2%;
	 position: relative;
		 
	/*
	border:1px solid #505255;
	border-bottom: 1px solid #282C2F;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	margin:50px;
	-webkit-box-shadow:1px 1px 3px #292929;
    -moz-box-shadow:1px 1px 3px #292929;
	*/
}
 .nav ul li.current a{color:#ffcd24;}
 .nav li{
	list-style:none;
	float:left;
	text-align:center;
	/*border-right: 1px solid #2E3235; */
	position: relative;
	/*background: -moz-linear-gradient(top, #fff, #555D5F 2% ,#555D5F  50%,#3E4245 100%);
	background: -webkit-gradient(linear, 0 0, 0 100%, from(#fff), color-stop(2%, #555D5F), color-stop(50%, #555D5F),to(#3E4245));*/
	
}
 .nav li:hover a{
	 }
 .nav li a{
	display:block;
	height:40px;
	line-height:40px;
	padding:0 30px;
	font-size:20px;
	color:#fff;
	 
	text-decoration:none;
	white-space:nowrap;
	
	-moz-border-top-left-radius: 2px;
	-webkit-border-top-left-radius: 2px;
	
	z-index:100;
}
 .nav li > a{
	position:relative;
}
 .nav li.first a{
	-moz-border-radius-topleft: 4px;
	-moz-border-radius-bottomleft: 4px;
	/*
	-webkit-border-top-left-radius: 4px;
	-webkit-border-bottom-left-radius: 4px;
	*/
}
 .nav li.last{
	border-right: 0 none;
}


 .nav dl{
	position:absolute;
	display:block;	
	left: -22px;
	width:165px;
	margin-top:0;
	border-bottom:medium;
	border-bottom-color:#FFF;
	background:#ffcd24;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	-webkit-box-shadow:1px 1px 3px   #222222;
    -moz-box-shadow:1px 1px 3px #22222;
	z-index:10;
            
}
 .nav li:hover dl{
	display:block;
	width:145px;
	padding:10px 0px 0px 0px;
}
 .nav dl a{
	background:transparent;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-transition: background 0.5s ease-out;
	-webkit-transition: background 0.5s ease-out;
	
	z-index:50;  
}

 .nav dd{
	margin-top:-45px;
	margin-left: 0px;
	opacity:0;
	width:145px;
	-webkit-transition-property:all;
	/*-webkit-transition-timing-function: cubic-bezier(5,0,5,0);*/
	-moz-transition-property: all;
	/*-moz-transition-timing-function: cubic-bezier(5,0,5,0);*/
	/*-webkit-transition-delay:5s;
	-moz-transition-delay:5s;*/
}
li:hover dd{
	margin-top:0;
	opacity:1;
}
li dd:nth-child(1){
	-webkit-transition-duration: 0.1s;
	-moz-transition-duration: 0.1s;
}
li dd:nth-child(2){
	-webkit-transition-duration: 0.2s;
	-moz-transition-duration: 0.2s;
}
li dd:nth-child(3){
	-webkit-transition-duration: 0.3s;
	-moz-transition-duration: 0.3s;
}
li dd:nth-child(4){
	-webkit-transition-duration: 0.4s;
	-moz-transition-duration: 0.4s;
}
dt{
	display:none;
	margin-top:-25px;
	padding-top:15px;
	height:10px;
}
li:hover dt{
	display:block;
}
.Darrow{
	float:right;
	margin:18px 10px 0 0;
	border-width:5px;
	border-color:#FFF transparent transparent transparent;
	border-style:solid;
	width:0;
	height:0;
	line-height:0;
	overflow:hidden;
	
	cursor:pointer;
	
	text-shadow: 0px -1px 0px #000;
	
	-webkit-box-shadow:0px -1px 0px #000;
    -moz-box-shadow:0px -1px 0px #000;
}
.arrow{
	margin:0 auto;
	margin-top:-5px;
	display:block;
	width:10px;
	height:10px;
	background:#ffcd24;
	-webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
}
	
.c-right-1{
position: relative;
	margin:0;
	padding:0;
}
.c-right-1 ul{ padding:0;}
.c-right-1 li{ list-style-type:none; }
.s-right{  }
.header{ float:left; margin-left:25%;}
.s-right li{list-style-type:none; color:#fff;position: relative; display:inline; font-weight:bold; }
.nav{border-bottom: 2px solid #e7e7e7; margin-left:20%; margin-top:10%; width:365px;padding:2px;}
.nav ul{ padding:2px; margin:0;}

.arrange{ margin-left:20%; width:365px;padding:2px;}
.arrange ul{padding:2px; margin:2px;; }
.search{ float:left;margin-left:30%; margin-top: 3%; width:220px;   }
.search input{width:163px; height:22px;}
.content{margin-left:300px;float:left;border-bottom: 2px solid #e7e7e7;width:1024px; height:670px;  }
.content-1{  float:left; width:1024px; margin-left:3%;  }
.pagi{ float:right; margin-right:50px; margin-top:2%;}
#pagi {
clear: both; 
list-style: none;
width: auto;
}
#pagi li {
float: left;
margin-right: 10px;
}
#pagi li a {
display: block;
text-decoration: none;
color: #717171;
font: bold 11px Arial, sans-serif;
padding: 5px 8px;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
background: #ffffff;
}
#pagi li a.current, #pagi li a:hover {
color: #ffffff;
background: #C0504D;
}
.c-bottom { float:left;width: 1024px;
margin-left:30%;  }
.w-list{ float:left; width:250px; }
.w-list ul{ margin-top:0;}
.w-list  li{ padding-top:15px; }
.w-list span{color:#fff; font-weight:bold; font-family: "微软雅黑","宋体",Helvetica, Arial, sans-serif;}
.p-list{float:left; width:500px;margin-left:20px; }
.p-list span{color:#fff; font-weight:bold; font-family: "微软雅黑","宋体",Helvetica, Arial, sans-serif;}
.p-list ul{ margin-top:0;}
.p-list li{ padding-top:15px; }
footer .copyright {
text-align: center;
background: #095997;
height: 40px;
padding-top: 10px;
font-size:12px;
font-family:Georgia;
width:100%;
color: #fff;
position:relative; float:left;
bottom:0;
margin-top:5%;
}
.copyright li{position: relative;display:inline;border-right: 2px solid #e7e7e7; padding-left:7px; padding-right:7px;}
.copyright a{color: #fff; text-decoration:none;   }

h3, h4{
	font-family: "微软雅黑","宋体",Helvetica, Arial, sans-serif;
}

</style>
</head>

<body>

<div class="guide-left ">
  <img src="<?php echo base_url('style/index/image/logo-l.png');?>"/> 
  <div class="guide-type">
     <img src="<?php echo base_url('style/index/image/guide-c.png');?>"/>
  </div>
  <div class="guide-sy">
     <a href="main.html"> <img src="<?php echo base_url('style/index/image/guide-sy.png');?>"/> </a>
  </div>
  
  <div class="guide-grzx">
     <a href="index.html"> <img src="<?php echo base_url('style/index/image/guide-grzx.png');?>"/></a>
  </div>
  
  <div class="guide-grbj">
    <a href="dczs.html"> <img src="<?php echo base_url('style/index/image/guide-grbj.png');?>"/> </a>
  </div>
  
  <div class="guide-spk">
     <a href="videos.html"> <img src="<?php echo base_url('style/index/image/guide-spk.png');?>"/></a>
  </div>
  
  <div class="guide-dcj">
    <a href="dcj.html"> <img src="<?php echo base_url('style/index/image/guide-dcj.png');?>"/> </a>
  </div>
  
  <div class="guide-bfjl">
     <a href="videos.html"><img src="<?php echo base_url('style/index/image/guide-bfjl.png');?>"/></a>
  </div>

</div>

<div class="s-right">
<div class="header">
<div class="nav">
<ul>
<li>视频难度：</li>
<li>初级难度<img src="<?php echo base_url('style/index/icon/nav.png');?>"/> />
<dl >
<dt><span class="arrow"></span></dt>
<dd style="border-bottom:2px solid #fff;"><a href="#" >初级难度</a></dd>
<dd style="border-bottom:2px solid #fff;"><a href="#"  >中级难度</a></dd>
<dd><a href="#" >高级难度</a></dd>
</dl>
</li>
<li style="margin-left:60px;">专题视频<img src="<?php echo base_url('style/index/icon/nav.png');?>"/> />
<dl >
<dt><span class="arrow"></span></dt>
<dd style="border-bottom:2px solid #fff;"><a href="#" >生活专题</a></dd>
<dd style="border-bottom:2px solid #fff;"><a href="#"  >法律专题</a></dd>
<dd style="border-bottom:2px solid #fff;"><a href="#"  >体育专题</a></dd>
<dd style="border-bottom:2px solid #fff;"><a href="#"  >教育专题</a></dd>
<dd><a href="#" >娱乐专题</a></dd>
</dl>

</li>
</ul>
</div>
<div class="arrange">
<ul>
<li>重新排列：</li>
<li>日期</li>
<li style="margin-left:20px;">名称</li>
<li style="margin-left:20px;">观看次数</li>
<li style="margin-left:20px;">喜欢</li>
</ul>
</div>
</div>
 
<div class="search">
<div style="float:left;">
<h4 style="color:#fff; margin:0; padding-bottom:2px;">搜索美剧</h4>
 
 <input name="" type="text" class="input-box"  />  
 </div>
<div style="float:left; margin-top: 10%;">
 <img src="<?php echo base_url('style/index/icon/search.png');?>"/>   /> 
 </div>
 </div>
 
 
<div class="content">

<div class="content-1" >
<ul>
<li >
<div style="width:260px; margin:0; float:left;">
<a href="#"><img src="<?php echo base_url('style/index/icon/boston.jpg');?>"/> width="250"  height="150;"/></a>
<ul style="margin:0;padding:0">
<li><a href="#" style=" text-decoration:none; color:#fff;">波士顿法律</a></li>
<li style="padding-left:65px;"><img src="<?php echo base_url('style/index/icon/03lib_01.png');?>"/> />17</li>
<li><img src="<?php echo base_url('style/index/icon/03lib_03.png');?>"/> />10</li>
<ul>
</div>
</li>
<div style="width:260px; margin-left:5%; float:left;">
<a href="#"><img  src="icon/desperate.jpg" width="250"  height="150;"/></a>
<ul style="margin:0;padding:0">
<li><a href="#" style=" text-decoration:none; color:#fff;">绝望的主妇</a></li>
<li style="padding-left:65px;"><img src="<?php echo base_url('style/index/icon/03lib_01.png');?>"/> />17</li>
<li><img src="<?php echo base_url('style/index/icon/03lib_03.png');?>"/> />10</li>
<ul>
</div>
</li>
<div style="width:260px; margin:0; margin-left:5%; float:left;">
<a href="#"><img  src="icon/vampire.jpeg" width="250"  height="150;"/></a>
<ul style="margin:0;padding:0">
<li><a href="#" style=" text-decoration:none; color:#fff;">波士顿法律</a></li>
<li style="padding-left:65px;"><img src="<?php echo base_url('style/index/icon/03lib_01.png');?>"/> />17</li>
<li><img src="<?php echo base_url('style/index/icon/03lib_03.png');?>"/> />10</li>
<ul>
</div>
</li>
</ul>
</div>
<div class="content-1" >
<ul>
<li >
<div style="width:260px; margin:0; float:left;">
<a href="#"><img  src="icon/ggkr.jpg" width="250"  height="150;"/></a>
<ul style="margin:0;padding:0">
<li><a href="#" style=" text-decoration:none; color:#fff;">广告狂人</a></li>
<li style="padding-left:65px;"><img src="<?php echo base_url('style/index/icon/03lib_01.png');?>"/> />17</li>
<li><img src="<?php echo base_url('style/index/icon/03lib_03.png');?>"/> />10</li>
<ul>
</div>
</li>
<div style="width:260px; margin-left:5%; float:left;">
<a href="#"><img  src="icon/Img356715297.jpg" width="250"  height="150;"/></a>
<ul style="margin:0;padding:0">
<li><a href="#" style=" text-decoration:none; color:#fff;">破产姐妹</a></li>
<li style="padding-left:65px;"><img src="<?php echo base_url('style/index/icon/03lib_01.png');?>"/> />17</li>
<li><img src="<?php echo base_url('style/index/icon/03lib_03.png');?>"/> />10</li>
<ul>
</div>
</li>
<div style="width:260px; margin:0; margin-left:5%; float:left;">
<a href="#"><img  src="icon/18110541_1270179544_514.jpg" width="250"  height="150;"/></a>
<ul style="margin:0;padding:0">
<li><a href="#" style=" text-decoration:none; color:#fff;">老友记</a></li>
<li style="padding-left:65px;"><img src="<?php echo base_url('style/index/icon/03lib_01.png');?>"/> />17</li>
<li><img src="<?php echo base_url('style/index/icon/03lib_03.png');?>"/> />10</li>
<ul>
</div>
</li>
</ul>
</div>
<div class="content-1" >
<ul>
<li >
<div style="width:260px; margin:0; float:left;">
<a href="#"><img src="<?php echo base_url('style/index/icon/20130331180502_yxPkn.jpeg');?>"/> width="250"  height="150;"/></a>
<ul style="margin:0;padding:0">
<li><a href="#" style=" text-decoration:none; color:#fff;">摩登家庭</a></li>
<li style="padding-left:65px;"><img src="<?php echo base_url('style/index/icon/03lib_01.png');?>"/> />17</li>
<li><img src="<?php echo base_url('style/index/icon/03lib_03.png');?>"/> />10</li>
<ul>
</div>
</li>
<div style="width:260px; margin-left:5%; float:left;">
<a href="#"><img  src="icon/825635.jpg" width="250"  height="150;"/></a>
<ul style="margin:0;padding:0">
<li><a href="#" style=" text-decoration:none; color:#fff;"> 童话镇</a></li>
<li style="padding-left:65px;"><img src="<?php echo base_url('style/index/icon/03lib_01.png');?>"/> />17</li>
<li><img src="<?php echo base_url('style/index/icon/03lib_03.png');?>"/> />10</li>
<ul>
</div>
</li>
<div style="width:260px; margin:0; margin-left:5%; float:left;">
<a href="#"><img  src="icon/fzxl.jpg" width="250"  height="150;"/></a>
<ul style="margin:0;padding:0">
<li><a href="#" style=" text-decoration:none; color:#fff;">犯罪心理</a></li>
<li style="padding-left:65px;"><img src="<?php echo base_url('style/index/icon/03lib_01.png');?>"/> />17</li>
<li><img src="<?php echo base_url('style/index/icon/03lib_03.png');?>"/> />10</li>
<ul>
</div>
</li>
</ul>
</div>

<div class="pagi">
 <ul id="pagi">
 <li><a class="current" href="#">1</a></li>
 <li><a href="#">2</a></li>
 <li><a href="#">3</a></li>
 <li><a href="#">4</a></li>
 <li><a href="#">5</a></li>
 <li><a href="#">6</a></li>
 <li><a href="#">next</a></li>
 </ul>
 </div>

</div>
 </div>

<div class="c-bottom">
<div class="w-list">
<h3 style=" margin-bottom:0; margin-left:20%;">最近被标记的单词</h3>
<ul style="float:left;margin-left:10%;color:#ffcd24;">
<li><span>concrete</span></li>
<li><span>compare</span></li>
<li><span>estimate</span></li>
</ul>
 
<ul style="float:left;color:#ffcd24;">
<li><span>slip</span></li>
<li><span>compare</span></li>
<li><span>estimate</span></li>
</ul>
 
 
</div>
<div class="p-list">
<h3 style=" margin-bottom:0; ">最近被标记的句子</h3>
<ul style="float:left; color:#ffcd24;">
<li><span>That depends.Are you still a two timing.bum.</span></li>
<li><span>L got the ass pins and needles.Max</span></li>
<li><span>Max three weeks in a row</span></li>
<li><span>scratchin at my window like a cat in heat</span></li>
<li><span>L am having a situation with my cigarette account.</span></li>
<li><span>L am having a situation with my cigarette account.</span></li>
</ul>
</div>
</div>


<footer>
<div class="copyright">
<ul>
<li><a>美剧英语学习吧 @All Rights Reserver</a></li>
<li><a href="#">帮助和反馈</a></li>
<li><a href="#">About Us</a></li>
<li><a href="#">联系方式</a></li>
<li><a href="#">负责声明</a></li>
<li><a href="#">帮助中心</a></li>
</ul>
</div>
</footer>
</body>
</html>
