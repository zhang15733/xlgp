<?php
/**
 * 视频控制器
 */
 class Video extends CI_Controller {
     
     /**
	   * 构造函数
	   */
      function __construct() {
          parent::__construct();
      }
	  
	  /**
	   * 播放视频控制器
	   */
	   public function video_play($video_id){
	   		//载入model
	   		$this->load->model('index/video_model');
			$video_id = intval($video_id);
			if($video_id<=0) {
				$video_id = 1;
                                return FALSE;
			}
                       
			$data['video'] = $this->video_model->get_video_to_play($video_id);
			$this->load->view('index/video_play_view.php', $data);	 
	 }
 }
 
