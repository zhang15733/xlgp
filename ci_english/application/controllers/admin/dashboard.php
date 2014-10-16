<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dashboard
 *
 * @author wwtx
 */
class Dashboard extends CI_Controller{
    
    private $i;
    
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('admin/dashboard_view');
    }
    
    function settings(){
                //判断是否已登录
        if (!$this->session->userdata('islogin')) {
            $this->load->view('admin/login_view');
            return;
        }
        $this->load->view('admin/user_setting_view');
    }
}
