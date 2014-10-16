<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" p://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
    <head> <meta http- quiv="Content-Type" content="text/html; charset=utf-8" />
        <title>微课·美剧</title> 
        <style> 
            body{ font-family: "微软雅黑","宋体",Helvetica, Arial, sans-serif; background-image:url(<?php echo base_url('style/index/image/bg.jpg') ?>);
                  background-size:cover;  margin:0; padding:0; height:100%; 
            }

            .guide-left{
                background-image:url(<?php echo base_url('style/index/image/left.png') ?>);
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
            .header{ float:left; margin-left:30%;}
            .s-right li{list-style-type:none; color:#fff;position: relative; display:inline; font-weight:bold; }
            .nav{border-bottom: 2px solid #e7e7e7; margin-left:0%; margin-top:10%; width:365px;padding:2px;}
            .nav ul{ padding:2px; margin:0;}

            .arrange{ margin-left:0%; width:365px;padding:2px;}
            .arrange ul{padding:2px; margin:2px;; }
            .search{ float:left;margin-left:25%; margin-top: 3%; width:220px;   }
            .search input{width:163px; height:22px;}
            .content{margin-left:25%;float:left;border-bottom: 2px solid #e7e7e7;width:1024px; height:670px;  }
            .content-1{  float:left; width:1024px; margin-left:3%;  }
            .pagi{ float: right; margin-right: 7%; margin-top:2%; }
            #pagi {
                clear: both; 
                list-style: none;
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
            .w-list{ float:left; width:400px; }
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


        </style>
    </head>

    <body>

        <div class="guide-left ">
            <img  src="<?php echo base_url('style/index/bg/logo.png'); ?>" width="297" height="120">
                <div class="section1">

                    <div class="c-right-1" style=" float:left;margin-top:34%; margin-left:33%; ">
                        <ul>
                            <li><a href="<?php echo site_url('index/main'); ?>"><img src="<?php echo base_url('style/index/bg/main.png'); ?>"  width="54px" height="64" /></a></li>
                            <li><a href="<?php echo site_url('index/main/show_record'); ?>"><img  src="<?php echo base_url('style/index/bg/videos2.png'); ?>" style="margin-top:220px;" width="54px" height="64" /></a></li>
                        </ul>
                    </div>

                    <div class="c-right-1"  style="float:left;margin-top:42%; margin-left:4%; ">
                        <ul>
                            <li>
                                <a href="<?php echo site_url('index/main/infocenter'); ?>"><img src="<?php echo base_url('style/index/bg/index.png'); ?>" width="54px" height="60px" /></a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('index/main/show_word'); ?>"><img src="<?php echo base_url('style/index/bg/dcj.png'); ?>" style="margin-top:180px;"  width="54px" height="64"  /></a>
                            </li>
                        </ul>
                    </div>
                    <div class="c-right-1"  style="float:left; margin-top:65%; margin-left:2%;  ">
                        <ul>
                            <li>
                                <a href="<?php echo site_url('index/main/show_note'); ?>"><img  src="<?php echo base_url('style/index/bg/dczs.png'); ?>"  width="48px" height="64"  /></a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('index/main/show_video'); ?>"><img src="<?php echo base_url('style/index/bg/videos.png'); ?>" style="margin-top:89%; margin-left:2%"  width="54px" height="57" /></a>
                            </li>
                        </ul>
                    </div>
                </div> 

        </div>

        <div class="s-right">
            <div class="header">
                <div class="nav">
                    <ul>
                        <li>视频难度：</li>
                        <li>初级难度<img src="<?php echo base_url('style/index/icon/nav.png'); ?>"/>
                            <dl >
                                <dt><span class="arrow"></span></dt>
                                <dd style="border-bottom:2px solid #fff;"><a href="#" >初级难度</a></dd>
                                <dd style="border-bottom:2px solid #fff;"><a href="#" >中级难度</a></dd>
                                <dd><a href="#" >高级难度</a></dd>
                            </dl>
                        </li>
                        <li style="margin-left:60px;">专题视频<img src="<?php echo base_url('style/index/icon/nav.png'); ?>"/>
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
                    <img src="<?php echo base_url('style/index/icon/search.png'); ?>"/>
                </div>
            </div>

            <div class="content">
                <?php
                $num = 0;
                foreach ($video as $row):
                    if ($num % 3 == 0) {
                        echo '<div class="content-1" ><ul>';
                    }
                    ?>
                    <li>
                        <?php
                        if ($num % 3 == 0) {
                            echo '<div style="width:260px; margin:0; float:left;">';
                        } else {
                            echo '<div style="width:260px; margin-left: 5%; float:left;">';
                        }
                        ?>
                        <a href="<?php echo site_url('index/video/video_play/' . $row->id); ?>" target="_blank" title="<?php echo $row->title_zh . ' ' . $row->title_en ?>">
                            <img src="<?php echo base_url($row->poster); ?>" width="250"  height="150"/></a>
                        <div style="height: 31px;padding-right: 10px;">
                            <div style="padding: 0px; margin: 11px 0px 0px; float: left;">
                                <!-- 标题字数太长,截选标题用···代替，在title中显示全标题 -->
                                <?php
                                $title_zh = $row->title_zh;
                                if (mb_strlen($title_zh, 'utf-8') > 6) {
                                    $title_zh = mb_substr($title_zh, 0, 5, 'utf-8') . '···';
                                }
                                ?>
                                <a href="<?php echo site_url('index/video/video_play/' . $row->id); ?>" target="_blank" style=" text-decoration:none; color:#fff;" title="<?php echo $row->title_zh ?>"><?php echo $title_zh ?></a>
                            </div>
                            <div style="float: right; padding-top: 3px;">
                                <div style="float: left; padding: 0">
                                    <div style="float:left; margin: 5px 0px 0px;">
                                        <img src="<?php echo base_url('style/index/icon/03lib_01.png'); ?>" title="播放指数"/>
                                        <span style=""><?php echo $row->play_count ?></span>
                                    </div>
                                    <div style="float:right;">
                                        <div style="float:left;">
                                            <img src="<?php echo base_url('style/index/icon/03lib_03.png'); ?>" title="点击收藏"/></div>
                                        <div style="float:right;margin-top: 8px;"><span>10</span></div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php
                    if ($num % 3 == 2) {
                        echo '</ul></div>';
                    }
                    $num++;
                endforeach
                ?>

                <?php
                for (; $num < 9;) {
                    if ($num % 3 == 0) {
                        echo '<div class="content-1" ><ul>';
                    }
                    ?>
                    <li>
                        <?php
                        if ($num % 3 == 0) {
                            echo '<div style="width:260px; margin:0; float:left;">';
                        } else {
                            echo '<div style="width:260px; margin-left: 5%; float:left;">';
                        }
                        ?>
                        <img src="<?php echo base_url('style/index/image//wait.png') ?>" width="250"  height="150"/>
                        <div style="height: 31px;padding-right: 10px;">
                            <div style="padding: 0px; margin: 11px 0px 0px; float: left;">
                                <a href="#" style=" text-decoration:none; color:#fff;"><?php echo ' ' ?></a>
                            </div>
                            <div style="float: right; padding-top: 3px;">	
                                <div style="float: left; padding: 0">
                                    <div style="float:left; margin: 5px 0px 0px;">
                                        <img src="<?php echo base_url('style/index/icon/03lib_01.png'); ?>" title="播放指数"/>
                                        <span style="">0</span>
                                    </div>
                                    <div style="float:right;">
                                        <div style="float:left;">
                                            <img src="<?php echo base_url('style/index/icon/03lib_03.png'); ?>" title="点击收藏"/></div>
                                        <div style="float:right;margin-top: 8px;"><span>0</span></div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php
                    if ($num % 3 == 2) {
                        echo '</ul></div>';
                    }
                    $num++;
                }
                ?>


                <!-- 视频循环结束 -->

                <!-- 分页 -->
                <div class="pagi">
                    <ul id="pagi"><?php echo $pagelist; ?></ul>
                </div>
                <!-- 分页结束 -->
            </div>
            <!-- 右边主体 视频+分页 结束-->
        </div>
        <!-- 右边结束-->

        <div class="c-bottom">
            <div class="w-list">
                <h3 style=" margin-bottom:0; margin-left:7%;">最近被标记的单词</h3>
                <ul style="float:left;margin-left:7%;color:#ffcd24;">
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
