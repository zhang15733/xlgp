<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of register
 * constrollers/admin/register
 * 后台注册控制器
 * @author wwtx
 */
class Register extends CI_Controller {
    
    private $url = 'admin/register_view';

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        //判断是否已登录
        //loc: helpers/select_helper--isLogin();
        //is_login();
        //$this->load->view('admin/register_view');
        $this->url = 'admin/register_view';
        $this->load->view($this->url);
    }
    
    public function adduser_from_admin(){
        $this->url = 'admin/admin_register_view';
        $this->load->view($this->url);
    }

    /**
     * 添加用户
     * @return type
     */
    public function adduser() {
        //判断是否已登录
        //loc: helpers/select_helper--isLogin();
       // is_login();
        //加载函数库
        $this->load->library('form_validation');
        //设置规则 'signup' --config/form_validation
        if ($this->form_validation->run('signup') == FALSE) {
            //前台显示: 规则错误信息
            //$this->load->view('admin/register_view');
             $this->load->view($this->url);
            return;
        }
        //验证密码 与密码确认
        if ($this->input->post('password') != $this->input->post('passconf')) {
            //前台显示: "两次输入的密码不一致"
            echo "两次输入的密码不一致";
           // $this->load->view('admin/register_view');
             $this->load->view($this->url);
            return;
        }
        $code = $this->input->post('code');
        if ($code != $this->session->userdata('captcha')) {
            //验证码不正确
            //前台显示: "验证码不正确"
            //跳转页面
            //$this->load->view('admin/register_view');
             $this->load->view($this->url);
            return;
        }
        //从view/admin/register_view取得值
        $data = array();
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        $data['email'] = $this->input->post('email');
        //载入model/admin/register_model
        $this->load->model('admin/register_model');
        //检测用户是否存在
        //checkUsername函数, models/register_model
        if ($this->register_model->checkUsername($data['username'])) {
            //跳转页面
            //前台显示: "此用户已存在,请换用户名"
            echo "此用户已存在,请换用户名";
            //$this->load->view('admin/register_view');
             $this->load->view($this->url);
            return;
        }
        if (!$this->register_model->adduser_model($data)) {
            //跳转页面
            //前台显示: "注册失败"
            echo "注册失败";
            //$this->load->view('admin/register_view');
             $this->load->view($this->url);
            return;
        }
        //跳回首页
        //没有隐藏index.php后缀
        redirect(site_url(), 'refresh');
    }

    /*
     * 更新用户信息
     */

    public function update_user() {
//         //判断是否已登录
        if (!$this->session->userdata('islogin')) {
            $this->load->view('admin/login_view');
            return;
        }
        //加载函数库
        $this->load->library('form_validation');
        //设置规则 'update' --config/form_validation
        if ($this->form_validation->run('update') == FALSE) {
            //前台显示: 规则错误信息
            $this->load->view('admin/user_setting_view');
            return;
        }
        //验证密码 与密码确认
        if ($this->input->post('password') != $this->input->post('passconf')) {
            //前台显示: "两次输入的密码不一致"
            echo "两次输入的密码不一致";
            $this->load->view('admin/user_setting_view');
            return;
        }
        //载入model/admin/register_model
        $this->load->model('admin/register_model');
        //判断修改是否成功
        if ($this->register_model->update()) {
            $this->load->view('admin/login_view');
        }
    }

}
