<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pubfunc
 * libraries/pubfunc 公共函数类
 * 用处 载入 $this->load->library('pubfunc');
 * @author wwtx
 */
class Pubfunc {

    function pubfunc() {
        $CI = & get_instance();
        $CI->load->helper('url');
        $CI->load->library('session');
        
    }

    /**
     * 验证用户是否已登录
     * @param bool $bool
     */
    public function isLogin($bool) {
        //判断用户是否已登录
        if ($bool == true) {
            //跳回首页
            //没有隐藏index.php后缀
            redirect(site_url(), 'refresh');
            exit;
        }
    }
    
    public function nimei(){
       
    }
    

}

/* End of file Someclass.php */
