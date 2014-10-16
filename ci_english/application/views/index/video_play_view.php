<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8" />
        <!-- <title>老友记第10季第1集</title> -->
        <title><?php echo $video['title_zh'] . '·' . $video['title_en'] ?></title>
        <style>

            body {
                background-color:#1978b7;
                width:100%;
                height:auto;
                display: table; 
                padding: 0; 
                margin: 0; 
            }  
            .c-left{
                margin-left:5%;
                float:left;
            }
            .video{
                margin-top: 8px;
                position:relative;
                z-index: 100;
                width:800px;
                height:550px;
            }

            .c-right{
                margin-left:2%;
                float:left;
                width:380px;
            } 
            .nav{margin-top:10%;
                 border-bottom: 2px solid #e7e7e7;
                 float:left;
            }
            .nav li{position: relative;display:inline;border-right: 2px solid #e7e7e7; padding-left:7px; padding-right:7px; color:#fff; font-size:14px;}

            .content p{margin:0 0 20px 0;}
            .content{width:380px; height:430px; padding-top:7px; overflow:auto; -webkit-border-radius:3px; -moz-border-radius:3px; border-radius:3px; }
            .content p:nth-child(even){color:#999; font-family:Georgia,serif; font-size:17px; font-style:italic;}
            .content p:nth-child(3n+0){color:#c96;}
            .time{ width:380px;}
            .time li{ display:inline; list-style-type:none;}
            .phrase{ background-color:#fff; float:left; height:40px; width:350px;}
            .phrase p{color:#1978b7; padding:3px 0px 3px 5px;  margin:0; font-size:15px;}
            .c-bottom{width:1225px; height:110px; background-color:#0c3653; float:left;margin-left:5%; margin-top:1%;}
            .c-bottom p{ color:#fff; font-size:20px; font-family:Arial, Helvetica, sans-serif; margin-left:2%;}

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
                margin-top:4%;
            }
            .copyright li{position: relative;display:inline;border-right: 2px solid #e7e7e7; padding-left:7px; padding-right:7px;}
            .copyright a{color: #fff; text-decoration:none;   }

        </style>

        <script src="<?php echo base_url('style/index/js/minified/jquery-1.9.1.min.js') ?>"></script>
        <script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo base_url('style/index/js/minified/jquery-1.9.1.min.js') ?>"%3E%3C/script%3E'))</script>
        <!-- custom scrollbars plugin -->
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script>
            (function ($) {
                $(window).load(function () {
                    $("#content_1").mCustomScrollbar({
                        set_width: false, /*optional element width: boolean, pixels, percentage*/
                        set_height: false, /*optional element height: boolean, pixels, percentage*/
                        horizontalScroll: false, /*scroll horizontally: boolean*/
                        scrollInertia: 950, /*scrolling inertia: integer (milliseconds)*/
                        mouseWheel: true, /*mousewheel support: boolean*/
                        mouseWheelPixels: "auto", /*mousewheel pixels amount: integer, "auto"*/
                        autoDraggerLength: true, /*auto-adjust scrollbar dragger length: boolean*/
                        autoHideScrollbar: false, /*auto-hide scrollbar when idle*/
                        scrollButtons: {/*scroll buttons*/
                            enable: false, /*scroll buttons support: boolean*/
                            scrollType: "continuous", /*scroll buttons scrolling type: "continuous", "pixels"*/
                            scrollSpeed: "auto", /*scroll buttons continuous scrolling speed: integer, "auto"*/
                            scrollAmount: 40 /*scroll buttons pixels scroll amount: integer (pixels)*/
                        },
                        advanced: {
                            updateOnBrowserResize: true, /*update scrollbars on browser resize (for layouts based on percentages): boolean*/
                            updateOnContentResize: false, /*auto-update scrollbars on content resize (for dynamic content): boolean*/
                            autoExpandHorizontalScroll: false, /*auto-expand width for horizontal scrolling: boolean*/
                            autoScrollOnFocus: true, /*auto-scroll on focused elements: boolean*/
                            normalizeMouseWheelDelta: false /*normalize mouse-wheel delta (-1/1)*/
                        },
                        contentTouchScroll: true, /*scrolling by touch-swipe content: boolean*/
                        callbacks: {
                            onScrollStart: function () {
                            }, /*user custom callback function on scroll start event*/
                            onScroll: function () {
                            }, /*user custom callback function on scroll event*/
                            onTotalScroll: function () {
                            }, /*user custom callback function on scroll end reached event*/
                            onTotalScrollBack: function () {
                            }, /*user custom callback function on scroll begin reached event*/
                            onTotalScrollOffset: 0, /*scroll end reached offset: integer (pixels)*/
                            onTotalScrollBackOffset: 0, /*scroll begin reached offset: integer (pixels)*/
                            whileScrolling: function () {
                            } /*user custom callback function on scrolling event*/
                        },
                        theme: "light" /*"light", "dark", "light-2", "dark-2", "light-thick", "dark-thick", "light-thin", "dark-thin"*/
                    });
                });
            })(jQuery);
        </script> 
        <script type="text/javascript" src="<?php echo base_url('public/ckplayer/offlights.js') ?>" charset="utf-8"></script>
        <link  href="<?php echo base_url('style/index/js/jquery.mCustomScrollbar.css') ?>" rel="stylesheet" />
    </head>
    <body >
        <section>
            <div class="c-left">
                <!-- 视频 -->
                <!-- <div id="video" class="video"></div> -->

                <script type="text/javascript" src="<?php echo base_url('public/ckplayer/ckplayer.js') ?>" charset="utf-8"></script>
                <div id="flashcontent"></div>
                <script type="text/javascript">
            var box = new LightBox('flashcontent');
            var $ = function (id) {
                return document.getElementById(id);
            };
            ;
            function closelights() {//关灯
                box.Show();
                $('video').style.width = '940px';
                $('video').style.height = '550px';
                $('video').style.margin = '2% 18%';

                swfobject.getObjectById('ckplayer_a1').width = 940;
                swfobject.getObjectById('ckplayer_a1').height = 550;
            }
            function openlights() {//开灯
                box.Close();
                $('video').style.width = '800px';
                $('video').style.height = '550px';
                $('video').style.margin = '8px 0 0 0';
                swfobject.getObjectById('ckplayer_a1').width = 800;
                swfobject.getObjectById('ckplayer_a1').height = 550;
            }
                </script>
                <div id="video" class="video"><div id="a1"></div></div>

                <!-- 视频播放js -->
                <script type="text/javascript">

                    var flashvars = {
                        f: '<?php echo base_url($video['path']) ?>', //视频地址
                        a: '', //调用时的参数，只有当s>0的时候有效
                        s: '0', //调用方式，0=普通方法（f=视频地址），1=网址形式,2=xml形式，3=swf形式(s>0时f=网址，配合a来完成对地址的组装)
                        c: '0', //是否读取文本配置,0不是，1是
                        x: '', //调用配置文件路径，只有在c=1时使用。默认为空调用的是ckplayer.xml
                        e: '3', //视频结束后的动作，0是调用js函数，1是循环播放，2是暂停播放并且不调用广告，3是调用视频推荐列表的插件，4是清除视频流并调用js功能和1差不多，5是暂停播放并且调用暂停广告
                        v: '80', //默认音量，0-100之间
                        p: '1', //视频默认0是暂停，1是播放，2是不加载视频
                        h: '3', //播放http视频流时采用何种拖动方法，=0不使用任意拖动，=1是使用按关键帧，=2是按时间点，=3是自动判断按什么(如果视频格式是.mp4就按关键帧，.flv就按关键时间)，=4也是自动判断(只要包含字符mp4就按mp4来，只要包含字符flv就按flv来)
                        wh: '', //宽高比，可以自己定义视频的宽高或宽高比如：wh:'4:3',或wh:'1080:720'
                        lv: '0', //是否是直播流，=1则锁定进度栏
                        //以下为自定义的播放器参数用来在插件里引用的
                        my_url: encodeURIComponent(window.location.href)//本页面地址
                                //调用自定义播放器参数结束
                    };
                    var params = {bgcolor: '#FFF', allowFullScreen: true, allowScriptAccess: 'always'};//这里定义播放器的其它参数如背景色（跟flashvars中的b不同），是否支持全屏，是否支持交互
                    var video = ['<?php echo base_url('video/lyj.mp4') ?>->video/mp4'];
                    CKobject.embed('<?php echo base_url('public/ckplayer/ckplayer.swf') ?>', 'a1', 'ckplayer_a1', '800', '550', false, flashvars, video, params);
                </script>
            </div>
            <div class="c-right" >
                <div class="nav">
                    <div style="float:left;">
                        <img src="<?php echo base_url('style/index/icon/03_03.png'); ?>" style="margin-top:3px;"  width="120" height="41"/>  
                    </div>
                    <div style="float:left;">
                        <ul>
                            <li>本集生词卡</li>
                            <li>我的笔记</li>
                            <li>答疑</li>
                        </ul>
                    </div>
                </div>

                <div id="content_1" class="content">
                    <div class="time"  > 
                        <p style="float:left; margin-bottom:0; margin-top:5px; margin-left:2px; color:#fff ">00:00:01</p> 
                        <div style="float:left; margin-left:45%;" >
                            <ul style="margin:0;">
                                <li><img src="<?php echo base_url('style/index/icon/play.png'); ?>"/></li>
                                <li><img src="<?php echo base_url('style/index/icon/save.png'); ?>"/></li>
                            </ul>
                        </div>
                    </div>
                    <div class="phrase">
                        <p><font color="red">Pull out</font> the packing material</p>
                    </div>

                    <div class="time"  > 
                        <p style="float:left; margin-bottom:0; margin-top:5px; margin-left:2px; color:#fff ">00:00:05</p> 
                        <div style="float:left; margin-left:45%;" >
                            <ul style="margin:0;">
                                <li><img src="<?php echo base_url('style/index/icon/play.png'); ?>"/></li>
                                <li><img src="<?php echo base_url('style/index/icon/save.png'); ?>"/></li>
                            </ul>
                        </div>
                    </div>
                    <div class="phrase">
                        <p>Let`s leave it there</p>
                    </div>

                    <div class="time"  > 
                        <p style="float:left; margin-bottom:0; margin-top:5px; margin-left:2px; color:#fff ">00:00:15</p> 
                        <div style="float:left; margin-left:45%;" >
                            <ul style="margin:0;">
                                <li><img src="<?php echo base_url('style/index/icon/play.png'); ?>"/></li>
                                <li><img src="<?php echo base_url('style/index/icon/save.png'); ?>"/></li>
                            </ul>
                        </div>
                    </div>
                    <div class="phrase">
                        <p>He`s in a good mood after the flight attendant says "duty-free"</p>
                    </div>

                    <div class="time"  > 
                        <p style="float:left; margin-bottom:0; margin-top:5px; margin-left:2px; color:#fff ">00:00:28</p> 
                        <div style="float:left; margin-left:45%;" >
                            <ul style="margin:0;">
                                <li><img src="<?php echo base_url('style/index/icon/play.png'); ?>"/></li>
                                <li><img src="<?php echo base_url('style/index/icon/save.png'); ?>"/></li>
                            </ul>
                        </div>
                    </div>
                    <div class="phrase">
                        <p>I think now would be a good time to talk to him</p>
                    </div>

                    <div class="time"  > 
                        <p style="float:left; margin-bottom:0; margin-top:5px; margin-left:2px; color:#fff ">00:00:34</p> 
                        <div style="float:left; margin-left:45%;" >
                            <ul style="margin:0;">
                                <li><img src="<?php echo base_url('style/index/icon/play.png'); ?>"/></li>
                                <li><img src="<?php echo base_url('style/index/icon/save.png'); ?>"/></li>
                            </ul>
                        </div>
                    </div>
                    <div class="phrase">
                        <p>Well ,<font color ="red" >keep in mind</font> that <font color ="red" >by the time</font> you`re done...</p>
                    </div>
                    <div class="time"  > 
                        <p style="float:left; margin-bottom:0; margin-top:5px; margin-left:2px; color:#fff ">00:01:07</p> 
                        <div style="float:left; margin-left:45%;" >
                            <ul style="margin:0;">
                                <li><img src="<?php echo base_url('style/index/icon/play.png'); ?>"/></li>
                                <li><img src="<?php echo base_url('style/index/icon/save.png'); ?>"/></li>
                            </ul>
                        </div>
                    </div>
                    <div class="phrase">
                        <p>Last night, after you guys <font color="red">broke up</font>...</p>
                    </div>
                    <div class="time"  > 
                        <p style="float:left; margin-bottom:0; margin-top:5px; margin-left:2px; color:#fff ">00:01:50</p> 
                        <div style="float:left; margin-left:45%;" >
                            <ul style="margin:0;">
                                <li><img src="<?php echo base_url('style/index/icon/play.png'); ?>"/></li>
                                <li><img src="<?php echo base_url('style/index/icon/save.png'); ?>"/></li>
                            </ul>
                        </div>
                    </div>
                    <div class="phrase">
                        <p>...make way <font color="red">more</font> sense <font color="red">than</font> her and I ever did,you know?</p>
                    </div>
                    <div class="time"  > 
                        <p style="float:left; margin-bottom:0; margin-top:5px; margin-left:2px; color:#fff ">00:03:51</p> 
                        <div style="float:left; margin-left:45%;" >
                            <ul style="margin:0;">
                                <li><img src="<?php echo base_url('style/index/icon/play.png'); ?>"/></li>
                                <li><img src="<?php echo base_url('style/index/icon/save.png'); ?>"/></li>
                            </ul>
                        </div>
                    </div>
                    <div class="phrase">
                        <p>Thank you, Yeah, I <font color="red">apreciate</font> that.</p>
                    </div> 
                </div>
            </div>   
            <div class="c-bottom" >
                <p ><font color="red">Pull out</font> the packing material<p>扯开包装材料...</p>
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