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
    </head>

    <body>

        <div id="wrapper">
            <!-- Navigation 头部和左部 导航栏-->
            <?php require_once 'menu_nav_view.php'; ?>
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
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Update your information</h3>
                                </div>
                                <div class="panel-body">
                                    <?php
                                    $form = site_url('admin/register/update_user');
                                    $attributes = array('class' => 'form-signin');
                                    echo form_open($form, $attributes);
                                    ?>
                                    <input type="text" name="username" class="form-control" readonly="readonly" placeholder="用户名" value="<?php echo $this->session->userdata('username'); ?>">
                                    <input type="password" name="password" class="form-control" placeholder="密码" ><?php echo form_error('password', '<div class="error">', '</div>'); ?>
                                    <input type="password" name="passconf" class="form-control" placeholder="密码确认" ><?php echo form_error('passconf', '<div class="error">', '</div>'); ?>
                                    <input type="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>" placeholder="电子邮箱" ><?php echo form_error('email', '<div class="error">', '</div>'); ?>
                                    <!--img title传给 style/commen/js/captcha_code.js--> 
                                    <input type="text" name="code" class="form-control code" placeholder="验证码" >
                                    <img src="<?php echo site_url('commen/pubfunc/yzm'); ?>" alt="<?php echo site_url('commen/pubfunc/yzm'); ?>" name="checkCodeImg" id="checkCodeImg" border="0" title="点击换一张"/><?php echo form_error('code', '<span class="yzm">', '</span>'); ?>
                                    <!--            <label class="checkbox">
                                                    <input type="checkbox" name="remember-me" value="remember-me" <?php echo set_checkbox('remember-me', 'remember-me', TRUE); ?>/> Remember me
                                                </label>-->
                                    <button class="btn btn-lg btn-success btn-block" type="submit">Update</button>
                                    <label class="defualt"><a href="<?php echo site_url('admin/login') ?>">返回登录</a></label>
                                    </form>
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

    </body>

</html>
