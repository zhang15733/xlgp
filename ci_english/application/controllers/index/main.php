<?php
  /**
   * 前台首页main控制器
   */
  class Main extends CI_Controller {
      	
      /**
	   * 构造函数
	   */
      function __construct() {
          parent::__construct();
      }
	  
	  /*
	   * 首页控制器main_view
	   */
	 public function index(){
		$this->show_main();
	 }
	 
	 public function show_main($page = 1){
	 	$this->load->model('index/video_model');
	 	//取得当前页面显示的视频集
	 	$page = intval($page);
		if($page<=0) $page = 1;
		$data['video'] = $this->video_model->get_all_video(($page-1)*15);
		
		/**
		 * 分页 page()
		 *loc select_helper/page
		 */
		$data['pagelist'] = page($this->video_model->get_video_num(), $page, 1);
	 	$this->load->view('index/main_view.php', $data);
	 }
	 /**
	  * 个人中心控制器
	  */
	 
	 public function infocenter(){
		 $this->load->view('index/index_view.php');
	 }
	  /**
	   * 个人笔记控制器
	   * 用于显示笔记
	   */
	 public function show_note(){
	 	$this->load->view('index/dczs_view.php');
	 }
	 
	 /**
	  * 视频库控制器
	  * 显示视频
	  */
	  public function show_video($page = 1){
	  	$this->load->model('index/video_model');
	 	//取得当前页面显示的视频集
	 	$page = intval($page);
		if($page<=0) $page = 1;
		$data['video'] = $this->video_model->get_all_video(($page-1)*9, 9);
		
		/**
		 * 分页 page()
		 *loc helper/select_helper/page
		 */
		$data['pagelist'] = page($this->video_model->get_video_num(), $page, 0, 'index/main/show_video/', 9);
	 	$this->load->view('index/videos_view.php', $data);
	 }
	  /**
	   * 单词集控制器
	   * 显示单词
	   */
	   public function show_word(){
	 	$this->load->view('index/dcj_view.php');
	 }
	   /**
	    * 播放记录控制器
	    * 显示播放记录
	    * 用户未登录时 暂时显示所有的视频集
	    * 登陆后再显示，用户自己的播放记录
	    */
	    public function show_record($page = 1){
		    $this->load->model('index/video_model');
		 	//取得当前页面显示的视频集
		 	$page = intval($page);
			if($page<=0) $page = 1;
			$data['video'] = $this->video_model->get_all_video(($page-1)*9, 9);
			
			/**
			 * 分页 page()
			 *loc helper/select_helper/page
			 */
			$data['pagelist'] = page($this->video_model->get_video_num(), $page, 0, 'index/main/show_video/', 9);
		 	$this->load->view('index/videos_view.php', $data);
	 }
	
  }
  