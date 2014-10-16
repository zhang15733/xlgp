<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pubfunc
 *公共函数控制器
 * @author wwtx
 */
class Pubfunc extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    /*
     * 验证码函数
     * 用于: views/admin/login_veiew.php <img>
     *       views/admin/register_veiew.php <img>   
     *      views/admin/user_settings_view.php <img>
     */
     function yzm() {
        $conf['name'] = 'yzm'; //作为配置参数
        $this->load->library('captcha_code', $conf);
        $this->captcha_code->show();
        //将验证码放在了缓存中
        $this->session->set_userdata('captcha',$this->captcha_code->getCaptcha());
    }
}

/* End of file pubfunc.php */
/* Location: ./application/controllers/commen/pubfunc.php */