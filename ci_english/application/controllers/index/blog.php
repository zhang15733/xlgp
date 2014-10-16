<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of blog_controller
 *
 * @author wwtx
 */
class Blog extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
    }
    
    public function index(){
        $this->load->view('index/blog_view.php'); 
    }
    
     /**
     * 播放视频
     */
    public function play(){
        $this->load->view('index/play.html');
    }
}
