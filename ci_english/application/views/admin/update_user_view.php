<?php
/**
 * 后台注册页面
 */
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?php echo base_url('style/commen/iamges/title.ico'); ?>">

        <title>修改用户</title>

        <!--Bootstrap core CSS--> 
        <link href="<?php echo base_url('style/commen/css/bootstrap.min.css'); ?>" rel="stylesheet">

        <!--Custom styles for this template--> 
        <link href="<?php echo base_url('style/admin/css/signin.css'); ?>" rel="stylesheet">

        <!--     Just for debugging purposes. Don't actually copy these 2 lines! 
            [if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="<?php echo base_url('style/admin/js/ie-emulation-modes-warning.js') ?>"></script>

        <!--IE10 viewport hack for Surface/desktop Windows 8 bug--> 
        <script src="<?php echo base_url('style/admin/js/ie10-viewport-bug-workaround.js') ?>"></script>
        <!--验证码引入captcha_code.js commen.js-->
        <script src="<?php echo base_url('style/commen/js/captcha_code.js') ?>"></script>
        <script src="<?php echo base_url('style/commen/js/commen.js') ?>"></script>
        <!--     HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries 
            [if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>

    <body>

        <div class="container">
            <?php
            $form = site_url('admin/register/update_user');
            $attributes = array('class' => 'form-signin');
            echo form_open($form, $attributes);
            ?>
            <h3 class="form-signin-heading">Update Your Information</h3>
            <input type="text" name="username" class="form-control" readonly="readonly" value="<?php echo $this->session->userdata('username'); ?>">
            <input type="password" name="password" class="form-control" placeholder="密码" ><?php echo form_error('password', '<div class="error">', '</div>'); ?>
            <input type="password" name="passconf" class="form-control" placeholder="密码确认" ><?php echo form_error('passconf', '<div class="error">', '</div>'); ?>
            <input type="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>" placeholder="电子邮箱" ><?php echo form_error('email', '<div class="error">', '</div>'); ?>
            <!--img title传给 style/commen/js/captcha_code.js--> 
            <input type="text" name="code" class="form-control code" placeholder="验证码" >
            <img src="<?php echo site_url('commen/pubfunc/yzm'); ?>" name="checkCodeImg" id="checkCodeImg" border="0" title="<?php echo site_url('commen/pubfunc/yzm'); ?>"/><?php echo form_error('code', '<span class="yzm">', '</span>'); ?>
            <!--            <label class="checkbox">
                            <input type="checkbox" name="remember-me" value="remember-me" <?php echo set_checkbox('remember-me', 'remember-me', TRUE); ?>/> Remember me
                        </label>-->
            <button class="btn btn-lg btn-success btn-block" type="submit">Update</button>
            <label class="defualt"><a href="<?php echo site_url('admin/login') ?>">返回登录</a></label>
        </form>

    </div>  <!--/container 


     Bootstrap core JavaScript
    ================================================== 
     Placed at the end of the document so the pages load faster -->
</body>
</html>


