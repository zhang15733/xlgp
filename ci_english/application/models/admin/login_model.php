<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login_model
 *
 * @author wwtx
 */
class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        //加载数据库
        $this->load->database();
        //载入session类
        //$this->load->library('session');
    }

    /**
     * checkUser()验证用户
     * @param type $username 用户名称
     * @param type $password 用户密码
     * @param type $table 数据库 表名默认表名'user'
     * @return type
     */
    public function checkUser($username, $password, $table = 'user') {
        $query = $this->db->get_where($table, array('username' => $username, 'password' => $password));
        //查询有结果num_rows>0, 无结果num_rows= 0;
        if ($query->num_rows > 0) {

            //存入session
            $userdata = array(
                'username' => $username,
                //'email' => 'johndoe@some-site.com',
                //用户判断用户是否登录
                'islogin' => TRUE
            );
            $this->session->set_userdata($userdata);
            return true;
        }
        return false;
    }

}
