<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 * 后台登录控制器
 * @author wwtx
 */
class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('javascript');   
    }

    /**
     * 来后台
     */
    public function todashboard(){
         //判断是否已登录
        if (!$this->session->userdata('islogin')) {
//            $this->load->view('admin/login_view');
            success("admin/login", '请先登录');
        }
        $this->load->view('admin/dashboard_view');
    }

        public function index() {
        //判断是否已登录
        //loc: helpers/select_helper--isLogin();
        is_login();
        $this->load->view('admin/login_view');
    }

    /**
     * 用户登录验证
     */
    public function checklogin() {
        //判断是否已登录
        //loc: helpers/select_helper--isLogin();
        is_login();
        //加载函数库
        $this->load->library('form_validation');
        //设置规则 'signin' --config/form_validation
        if ($this->form_validation->run('signin') == FALSE) {
            $this->load->view('admin/login_view');
            return;
        }

        //载入model/admin/login_model
        $this->load->model('admin/login_model');
        //得到logni_view传来的usrname. password
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $code = $this->input->post('code');
        if($code != $this->session->userdata('captcha')){
            //验证码不正确
            //前台显示: "验证码不正确"
            //跳转页面
            $this->load->view('admin/login_view');
            return;
        }
        //登录验证用户名 密码
        //loac:model/admin/login_model->checkUser(函数位置)
        if (!$this->login_model->checkUser($username, $password)) {
            //登录不正确
            //前台显示: "登录不成功"
            //跳转页面
//            echo "用户名或密码错误";
//            $this->load->view('admin/login_view');
//            return;
            error('用户名或密码错误');
        }
        //跳回首页
        //没有隐藏index.php后缀
       redirect(site_url(), 'refresh');
    }

    public function sessionDestroy() {
        $this->session->sess_destroy();
        //跳转页面
        $this->load->view('admin/login_view');
    }
}
