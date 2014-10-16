<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of vars
 * 修改config/autoload.php中的$autoload['libraries'] = array('vars');自动加载vars类。
 * location: libraries/vars.php
 * 从config/vars得到常量
 * 设置全局常量
 * @author wwtx
 */
class Vars {
  
    function vars($config = array()) {
       $CI = & get_instance();  
        foreach ($config as $key => $value) {
            $data[$key] = $value;
        }
        $CI->load->vars($data); 
    }

}

