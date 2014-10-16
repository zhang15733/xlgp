<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>微课·美剧</title>
        <style>
            body{

                background-image:url(<?php echo base_url('style/index/bg/bg1.jpg') ?>);
                background-size:cover;
                margin:0;
                padding:0;
                font-family: "微软雅黑","宋体",Helvetica, Arial, sans-serif;
            }
            header{	
                margin:0;
                padding:0;
            }

            .head{background-image:url(<?php echo base_url('style/index/bg/dl2.png') ?>);width:100%;
                  margin:0;
                  padding:0;
                  height:20%;
                  float:left;
                  position: relative;
            }

            .h-left{
                float:left;
                margin:0;
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
                font-size:16px;
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
            .h-right{ float:left;margin-left:7%;
                      margin-top:2.5%;position: relative;}
            .h-right li{position: relative;display:inline;  font-size: 20px; 
                        font-weight: bold; color:#FFF;}
            .h-right li a{ text-decoration:none; color:#FFF;}
            .h-right li a:hover{

                border-bottom:5px solid #ffcd24;
                /*
                -moz-transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
                -webkit-transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
                */
            }
            .img{
                margin-top:20px;
                float:right;
                position: relative;
                padding:0; 
                width:180px; 
                height:60px;
                background-image:url(<?php echo base_url('style/index/bg/qtdl.png') ?>);
            }
            .img ul{ margin-top:8px; padding:0;}
            .img li{position: relative;display:inline; margin-left:17px;}
            section{} 
            .section1{margin:0;
                      padding:0;
                      position: relative;
            }
            .c-right-1{
                position: relative;
                margin:0;
                padding:0;
            }
            .c-right-1 ul{ padding:0;}
            .c-right-1 li{ list-style-type:none; }
            .section2  { float:left; margin-left:16.6%; margin-top:6.5%;position: relative; height:380px; width:275px; background-image:url(<?php echo base_url('style/index/bg/dl4.png') ?>);}
            .section2   img{ 
                -webkit-border-radius: 50em; 
                -moz-border-radius: 50em; 
                border-radius: 50em; 
            } 
            .section2 input{ margin-top:6%; width:134px; height:24px; border-radius:5px; border-width:thin;}
            .section2 li{ list-style-type:none;margin-left:9%;}
            .section2 a{text-decoration:none; color:#fff; font-size:12px; }
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
                margin-top:9%;
            }
            .copyright li{position: relative;display:inline;border-right: 2px solid #e7e7e7; padding-left:7px; padding-right:7px;}
            .copyright a{color: #fff; text-decoration:none;   }

        </style>
    </head>

    <body>
        <header>
            <div class="head">

                <div class="h-left ">

                    <img src="<?php echo base_url('style/index/bg/logo.png'); ?>" width="100%"/>
                </div>

                <div class="nav">

                    <ul class="clear">
                        <li class="current"  ><a  href="#">首页</a></li>
                        <li  ><a href="#">浏览</a></li>
                        <li style="font-size:20px; color:#fff; margin-top:3%;margin-left:25px;">

                            更多  <img src="<?php echo base_url('style/index/icon/nav.png'); ?>" />
                            <dl >
                                <dt><span class="arrow"></span></dt>
                                <dd style="border-bottom:2px solid #fff;"><a href="#" >查找好友</a></dd>
                                <dd style="border-bottom:2px solid #fff;"><a href="#" >我的粉丝</a></dd>
                                <dd><a href="#" >我的关注</a></dd>
                            </dl>
                        </li>

                    </ul>

                </div>

                <div class="h-right">
                    <ul>
                        <li><a href="#">登录/</a></li>
                        <li><a href="#">注册</a></li>
                    </ul>
                </div>
                <div class="img">
                    <ul>
                        <li><a href="#"><img  src="<?php echo base_url('style/index/icon/weibo.png'); ?>"   /></a></li>
                        <li><a href="#"><img  src="<?php echo base_url('style/index/icon/QQ .png'); ?>" /></a></li>
                        <li><a href="#"><img  src="<?php echo base_url('style/index/icon/db.png'); ?>"  /></a></li>
                        <li><a href="#"><img  src="<?php echo base_url('style/index/icon/renren.png'); ?>" style="margin-left: 2px;"/></a></li>
                    </ul>

                </div> 

            </div>

        </header>

        <section>
            <div class="section1">

                <div class="c-right-1" style=" float:left;margin-top:8%; margin-left:10.5%; ">
                    <ul>
                        <li><a href="<?php echo site_url('index/main'); ?>"><img src="<?php echo base_url('style/index/bg/main.png'); ?>" width="54px" height="64" /></a></li>
                        <li><a href="<?php echo site_url('index/main/show_record'); ?>"><img  src="<?php echo base_url('style/index/bg/videos2.png'); ?>" style="margin-top:220px;" width="54px" height="64" /></a></li>
                    </ul>
                </div>

                <div class="c-right-1"  style="float:left;margin-top:10%; margin-left:1.5%; ">
                    <ul>
                        <li>
                            <a href="<?php echo site_url('index/main/infocenter'); ?>"><img src="<?php echo base_url('style/index/bg/index.png'); ?>"   width="54px" height="60px" /></a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('index/main/show_word'); ?>"><img src="<?php echo base_url('style/index/bg/dcj.png'); ?>" style="margin-top:170px;"  width="54px" height="64"  /></a>
                        </li>
                    </ul>
                </div>
                <div class="c-right-1"  style="float:left; margin-top:16%;   ">
                    <ul>
                        <li>
                            <a href="<?php echo site_url('index/main/show_note'); ?>"><img  src="<?php echo base_url('style/index/bg/dczs.png'); ?>"  width="48px" height="64"  /></a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('index/main/show_video'); ?>"><img src="<?php echo base_url('style/index/bg/videos.png'); ?>" style="margin-top:40%;"  width="54px" height="57" /></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="section2">

                <ul>
                    <li>
                        <img src="<?php echo base_url('style/index/icon/tx.PNG'); ?>" width="49%" style="margin-left:10%; margin-top:8%;"/></li> 

                    <li  style="margin-top:17%; "><input type="text" name=" name" placeholder="guest" /><a href="#"> 注册账号</a></li>
                    <li><input type="text" name="password" placeholder="guest" /><a href="#"> 找回密码</a></li>
                </ul>
                <div style="width:34px; height:34px; border:2px #fff solid; border-radius:50%; margin-left:28%;float:left">
                    <p style="width:34px; height:34px; margin-top:10px; margin-left:6px;float:left"><a href="<?php echo site_url('index/main'); ?>" >登录</a></p>
                </div>
                <div style="width:34px; height:34px; border:2px #fff solid; border-radius:50%; margin-left:10%; float:left">
                    <p style="width:34px; height:34px; margin-top:10px; margin-left:6px;float:left"><a href="#" >注册</a></p>
                </div>
            </div>
            </div>

        </section>

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
