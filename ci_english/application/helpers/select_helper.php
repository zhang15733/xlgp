<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 自定义函数文件
 */

//--------------------------------------------------------

/**
 * 验证用户是否已登录
 * @param bool $bool
 */
if (!function_exists('is_login')) {

    function is_login() {
        $CI = &get_instance();
        //判断用户是否已登录
        if ($CI->session->userdata('islogin')) {
            //跳回首页
            //没有隐藏index.php后缀
            //前台显示: "您已登录"
             header('Content-Type:text/html; charset=utf-8');
            echo "<script type='text/javascript'>alert('亲,你已登录');window.history.go(-1);</script>";
            redirect(site_url(), 'refresh');
            exit;
        }
        return TRUE;
    }
}

/**
 * success 成功函数
 * @param type $url 跳转地址
 * @param type $msg 提示信息
 */
function success($url, $msg){
    header('Content-Type:text/html; charset=utf-8');
    $url = site_url($url);
    echo "<script type='text/javascript'>alert('$msg');location.href='$url';</script>";
    die();
}

/**
 * error() 失败函数
 * @param type $msg
 */
function error($msg){
    header('Content-Type:text/html; charset=utf-8');
    echo "<script type='text/javascript'>alert('$msg');window.history.go(-1);</script>";
    die();
}

/*
 * 分页函数
 * @param $total 数量总数
 */
 function page($total, $page, $style = 1, $url = 'index/main/show_main/', $size = 15){
	 	   $CI = &get_instance();
		   //得到当前分页数
		   
            $page = intval($page);
            if($page<=0) $page = 1;
			//加载分页类
            $CI->load->library('page_list',array('total'=>$total, 'style' => $style, 'size'=>$size,'page'=>$page));
            $pl = $CI->page_list->display(site_url($url.'-page-'));
			return $pl;
	 }


//--------------------------------------------------------



/* End of file select_helper.php */
/* Location: ./application/helpers/select_helper.php */