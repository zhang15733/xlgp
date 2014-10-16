<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * blog_view.php
 * 前台页面
 * 
 * 常量----liberaries/vars/vars/$variable
 * $title
 * $head
 * $login
 * <?php echo $this->pubfunc->nimei(); ?>
 * <?php echo pubfunc(); ?>
 */
header("Content-Type: text/html; charset=utf-8");
?>
<html>
    <head>
        <link rel="icon" href="<?php echo base_url('style/commen/images/title.ico'); ?>">
        <link href="<?php echo base_url('style/commen/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <!--接受libraries/vars传来的参数-->
        <title><?php echo $title; ?></title>
    </head>
    <body class="container">
        <a href="<?php echo site_url('index/about'); ?>"><h1><?php echo $this->session->userdata('username'); ?></h1></a><br>
        
        <a href="<?php echo site_url('admin/register/update_user'); ?>" ><?php echo $this->session->userdata('username'); ?></a><br>
        <a href="<?php echo site_url('admin/login/sessionDestroy'); ?>">退出</a><br>
        <a href="<?php echo site_url('admin/login'); ?>"><?php echo $login; ?></a><br>
        <a href="<?php echo site_url('index/blog/play'); ?>" >播放</a><br>
        <a href="<?php echo site_url('test/test'); ?>" >测试页面</a><br>
        <a href="<?php echo site_url('admin/login/todashboard');?>" target="_blank">去后台</a><br>
    </body>
</html>

