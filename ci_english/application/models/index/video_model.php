<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 视频模型
 */
class Video_model extends CI_Model {
	
	 public function __construct() {
        parent::__construct();
        //加载数据库
        $this->load->database();
    }
	 
	 /**
	  * @param $num  查询视频的起始id
	  * @param $size 每一页显示的数量
	  */
	 public function get_all_video($num = 0, $size = 15) {
		 $query = $this->db->get('video', $size, $num);
		  $this->db->close();  
		 return $query->result();
	 }
	 
	 /**
	  * 得到视频的总数量
	  */
	 public function get_video_num(){
	 	 $query = $this->db->get('video');
		  $this->db->close();  
		 return $query->num_rows();
	 }
	 
	 /**
	  * 提取当前播放的视频
	  */
	 public function get_video_to_play($video_id){
	 	
	 	$query = $this->db->get_where('video', array('id' => $video_id));
		if($this->db->affected_rows() < 1){
			$video_id = 1;
			$query = $this->db->get_where('video', array('id' => $video_id));
		}
                 
		 $this->update_play_count($video_id);
		 $this->db->close();  
		return $query->row_array();
	 }
	 
	 public function update_play_count($video_id){
               $ADD_NUM = 1;
                $this->db->set('play_count',"play_count+$ADD_NUM",false);
                $this->db->where('id', $video_id);
                $this->db->update('video'); 
                $this->db->close();  
        //返回值  
       // return $row;  
	 }
}
