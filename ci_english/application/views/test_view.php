<?php ?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin - Bootstrap Admin Template</title>
		
        <!-- Bootstrap Core CSS -->
        <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
        <link href="<?php echo base_url('style/commen/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <!-- Custom CSS -->
        <!--<link href="css/sb-admin.css" rel="stylesheet">-->
        <link href="<?php echo base_url('style/admin/css/sb-admin.css'); ?>" rel="stylesheet">
        <!-- Morris Charts CSS -->
        <!--<link href="css/plugins/morris.css" rel="stylesheet">-->
        <!--<link href="<?php echo base_url('style/admin/css/morris.css'); ?>" rel="stylesheet">-->
        <!-- Custom Fonts -->
        <!--<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
        <link href="<?php echo base_url('style/admin/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('style/admin/css/dashboardsetting.css'); ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('public/ueditor/themes/default/ueditor.css')?>" type="text/css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- jQuery Version 1.11.0 -->
        <script src="<?php echo base_url('style/commen/js/jquery.js'); ?>"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url('style/commen/js/bootstrap.min.js'); ?>"></script>


        <!--验证码引入captcha_code.js commen.js-->
        <script src="<?php echo base_url('style/commen/js/captcha_code.js') ?>"></script>
        <script src="<?php echo base_url('style/commen/js/commen.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('style/commen/js/commen.js'); ?>"></script>
        
        <!-- 加载编辑器的容器 -->
	<script id="container" name="content" type="text/plain">这里写你的初始化内容</script>
	<!-- 配置文件 -->
	<script type="text/javascript" src="<?php echo base_url('public/ueditor/ueditor.config.js');?>">
		//window.UEDITOR_HOME_URL = "/ci_blog/public/ueditor";
	</script>
	<!-- 编辑器源码文件 -->
	<script type="text/javascript" src="<?php echo base_url('public/ueditor/ueditor.all.js');?>"></script>
	
    </head>

    <body>

        <div id="wrapper">
            <!-- Navigation 头部和左部 导航栏-->

            <div id="page-wrapper">
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Settings <small>Settings Informations</small>
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="<?php echo site_url('admin/login/todashboard'); ?>">Dashboard</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-fw fa-gear"></i> Settings
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <ul id="myTab" class="nav nav-tabs">
                                <li class="active"><a href="#show" data-toggle="tab"><i class="fa fa-user fa-fw"></i>Show Your Information</a></li>
                                <li><a href="#update" data-toggle="tab"><i class="fa fa-user fa-fw"></i>Update Your Information</a></li>
                            </ul>
                            <div class="tab-content">
                                
                                <div class="row tab-pane fade in active" id="show">
                                    <?php
                                    $show_form = site_url('admin/register/update_user');
                                    $show_attributes = array('class' => 'form-signin');
                                    echo form_open($show_form, $show_attributes);
                                    ?>
                                    <base href="" target=""/>
                                    <h4 class="page-header"><small>Username:</small>　<label class="label label-info"><?php echo $this->session->userdata('username'); ?></label></h4>
                                    <h4 class="page-header"><small>Email　　:</small>　<label class="label label-info"><?php echo $this->session->userdata('username'); ?></label></h4>
                                   </form>
                                   
                                </div>
                                
                                <div class="row tab-pane fade in" id="update">
                                    <?php
                                    $update_form = site_url('admin/register/update_user');
                                    $update_attributes = array('class' => 'form-signin');
                                    echo form_open($update_form, $update_attributes);
									
                                    ?>
                                    <input type="text" name="username" class="form-control" readonly="readonly" placeholder="用户名" value="<?php echo $this->session->userdata('username'); ?>">
                                    <input type="password" name="password" class="form-control" placeholder="密码" ><?php echo form_error('password', '<div class="error">', '</div>'); ?>
                                    <input type="password" name="passconf" class="form-control" placeholder="密码确认" ><?php echo form_error('passconf', '<div class="error">', '</div>'); ?>
                                    <input type="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>" placeholder="电子邮箱" ><?php echo form_error('email', '<div class="error">', '</div>'); ?>
                                    <!--img title传给 style/commen/js/captcha_code.js--> 
                                    <input type="text" name="code" class="form-control code" placeholder="验证码" >
                                    <img src="<?php echo site_url('commen/pubfunc/yzm'); ?>" alt="<?php echo site_url('commen/pubfunc/yzm'); ?>" name="checkCodeImg" id="checkCodeImg" border="0" title="点击换一张"/><?php echo form_error('code', '<span class="yzm">', '</span>'); ?>
                                    
                                    <button class="btn btn-lg btn-success btn-block" type="submit">Update</button>
                                    <label class="defualt"><a href="<?php echo site_url('admin/login') ?>">返回登录</a></label>
                                    </form>
                                    <div class="col-md-8">
                                    <textarea name="content" id="ueditor" placeholder = "这是编辑器" class=""></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- /#page-wrapper -->

            </div>
            <!-- /#wrapper -->
            <!-- Morris Charts JavaScript -->
            <script src="<?php echo base_url('style/admin/js/raphael.min.js'); ?>"></script>
            <script src="<?php echo base_url('style/admin/js/morris.min.js'); ?>"></script>
            <script src="<?php echo base_url('style/admin/js/morris-data.js'); ?>"></script>
            <!-- 实例化编辑器 -->
            <script type="text/javascript">
       			var ue = new UE.ui.Editor();
      			 ue.render('ueditor'); //ueditor为id值
			</script>

    </body>

</html>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>菜单</title>
<style>
<!--
body {
	margin:0px 0px;
}
.content {
	width:640px;
	margin:0px auto;
}
	.content ul {
text-align:center;
		list-style:none;
	}
		.content li {
			display:inline;
			padding:5px 25px;margin:1px;
			width:100px;
			background-color:#f800f8;
			text-align:center;
			line-height:30px;
			
		}
-->
</style>
</head>
<body>
<div class="content">
	<ul>
		<li><a href="#">列表1</a></li>
		<li><a href="#">列表2</a></li>
		<li><a href="#">列表3</a></li>
		<li><a href="#">列表4</a></li>
		<li><a href="#">列表4</a></li>
		<li><a href="#">列表4</a></li>
		<li><a href="#">列表4</a></li>
		<li><a href="#">列表4</a></li>
		<li><a href="#">列表4</a></li>
	</ul>


</div>
</body>
</html>



<?php
	$num = 0; 
	foreach ($video as $row):
	if($num%3 == 0){
		echo '<div class="content-1" ><ul>';
	}
?>
		<li>
			<?php if($num%3 == 0){
				echo '<div style="width:260px; margin:0; float:left;">';
			}else{
				echo '<div style="width:260px; margin-left: 5%; float:left;">';
			}?>
				<a href="<?php echo site_url('index/video/video_play/1');?>" target="_blank" title="波士顿法律波士顿法律波士顿法律"><img src="<?php echo base_url('style/index/image/1-1-4.jpg');?>" width="250"  height="150;"/></a>
				<ul style="margin:11px 0 0 0;padding:0">
					<!-- 标题字数太长,截选标题用···代替，在title中显示全标题 -->
					<li><a href="#" style=" text-decoration:none; color:#fff;" title="波士顿法律波士顿法律波士顿法律"><?php echo '波士顿法律'.'···'?></a></li>
					<li style="float: right">	
							<ul style="margin-top: -10px; padding-right: 10px;">
								<li><img src="<?php echo base_url('style/index/icon/03lib_01.png');?>"/> 17</li>
								<li><img src="<?php echo base_url('style/index/icon/03lib_03.png');?>"/> 10</li>
							</ul>
					</li>
				</ul>
			</div>
		</li>
	
<?php 
	if($num%3 == 2){
		echo '</ul></div>';
	}
	$num++;
endforeach ?>






















