<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$config = array(
//    登录
    'signin' => array(
        array(
            'field' => 'username',
            'label' => '用户名',
            'rules' => 'trim|required|min_length[6]|xss_clean|alpha_dash'
        ),
        array(
            'field' => 'password',
            'label' => '密码',
            'rules' => 'trim|required|min_length[6]|md5|alpha_dash'
        ),
        array(
            'field' => 'code',
            'label' => '验证码',
            'rules' => 'trim|required|exact_length[4]|alpha_numeric'           
        )
    ),
//    注册
    'signup' => array(
        array(
            'field' => 'username',
            'label' => '用户名',
            'rules' => 'trim|required|min_length[6]|alpha_dash|xss_clean'
        ),
        array(
            'field' => 'password',
            'label' => '密码',
            'rules' => 'trim|required|min_length[6]|alpha_dash|md5'
        ),
        array(
            'field' => 'passconf',
            'label' => '密码确认',
            'rules' => 'trim|required|min_length[6]|alpha_dash|md5'
        ),
        array(
            'field' => 'email',
            'label' => '电子邮件',
            'rules' => 'required|valid_email'
        ),
         array(
            'field' => 'code',
            'label' => '验证码',
            'rules' => 'trim|required|exact_length[4]|alpha_numeric'           
        )
    ),
    //更新
    'update' => array(
       
        array(
            'field' => 'password',
            'label' => '密码',
            'rules' => 'trim|required|min_length[6]|alpha_dash|md5'
        ),
        array(
            'field' => 'passconf',
            'label' => '密码确认',
            'rules' => 'trim|required|min_length[6]|alpha_dash|md5'
        ),
        array(
            'field' => 'email',
            'label' => '电子邮件',
            'rules' => 'required|valid_email'
        ),
         array(
            'field' => 'code',
            'label' => '验证码',
            'rules' => 'trim|required|exact_length[4]|alpha_numeric'           
        )
    ),
);
