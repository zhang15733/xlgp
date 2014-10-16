<?php
/**
 * 后台登录页面
 */
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?php echo base_url('style/commen/images/title.ico'); ?>">

        <title>登录</title>

        <!--Bootstrap core CSS--> 
        <link href="<?php echo base_url('style/commen/css/bootstrap.min.css'); ?>" rel="stylesheet">

        <!--Custom styles for this template--> 
        <link href="<?php echo base_url('style/admin/css/signin.css'); ?>" rel="stylesheet">

        <!--     Just for debugging purposes. Don't actually copy these 2 lines! 
            [if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="<?php echo base_url('style/admin/js/ie-emulation-modes-warning.js') ?>"></script>

        <!--IE10 viewport hack for Surface/desktop Windows 8 bug--> 
        <script src="<?php echo base_url('style/admin/js/ie10-viewport-bug-workaround.js') ?>"></script>
       <script src="<?php echo base_url('style/commen/js/jquery.js') ?>"></script>
        <!--     HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries 
            [if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
        <!--验证码引入captcha_code.js commen.js-->
        <script src="<?php echo base_url('style/commen/js/captcha_code.js') ?>"></script>
        <script src="<?php echo base_url('style/commen/js/commen.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function (){
                $('body').css('background-image', 'url("<?php echo base_url('style/admin/image/bg.jpg') ?>")');
            });
        </script>
    </head>

    <body>

        <div class="container">

            <!--<form class="form-signin" role="form" action="">-->

            <?php
            $form = site_url('admin/login/checklogin');
            $attributes = array('class' => 'form-signin');
            echo form_open($form, $attributes);
            ?>
            <h2 class="form-signin-heading">Please sign in</h2>

<!--            <input type="text" name="username" class="form-control" value="<?php echo set_value('username'); ?>"  
                   data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                    placeholder="User name" data-trigger="focus" autofocus>-->
            <input type="text" name="username" class="form-control" value="<?php echo set_value('username'); ?>" placeholder="User name" autofocus>
            <?php echo form_error('username', '<div class="error">', '</div>'); ?>
            <input type="password" name="password" class="form-control" placeholder="Password" ><?php echo form_error('password', '<div class="error">', '</div>'); ?>
            <label class="checkbox">
                <input type="checkbox" name="remember-me" value="remember-me" <?php echo set_checkbox('remember-me', 'remember-me', TRUE); ?>/> Remember me
            </label>
            <!--img title传给 captcha_code.js -->
            
            <input type="text" name="code" class="form-control code" placeholder="验证码" >
            <img src="<?php echo site_url('commen/pubfunc/yzm'); ?>" name="checkCodeImg" id="checkCodeImg" border="0" title="点击换一张" alt="<?php echo site_url('commen/pubfunc/yzm'); ?>"/>
            <?php echo form_error('code', '<span class="yzm">', '</span>'); ?>
            <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
            <label class="defualt"><a class="fgtpwd">忘记密码?</a><a class="register" href="<?php echo site_url('admin/register') ?>">立即注册</a></label>
        </form>
    </div>  <!--/container 


     Bootstrap core JavaScript
    ================================================== 
     Placed at the end of the document so the pages load faster -->
</body>
</html>


