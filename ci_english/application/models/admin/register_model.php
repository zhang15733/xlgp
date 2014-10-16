<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of register_model
 * 用户注册后台
 * @author wwtx
 */
class Register_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    /**
     * 增加用户
     * @param type $data 数组 用户信息
     * @param $table 数据表默认 'user'
     */
    function adduser_model($data, $table = 'user') {
        return $this->db->insert($table, $data);
    }

    /**
     * checkUsername函数 查询用户是否存在
     * @param type $username 用户名 用于匹配数据库中的 'username'
     * @param type $table 数据表默认 'user'
     * return true 存在
     * return false 不存在
     */
    function checkUsername($username, $table = 'user') {
        $query = $this->db->get_where($table, array('username' => $username));
        //查询有结果num_rows>0, 无结果num_rows= 0;
        if ($query->num_rows > 0) {
            return true;
        }
        return false;
    }

    /**
     * 
     * @param type $table 数据表默认 'user'
     * @return true 更新成功
     *          false 更新失败
     */
    function update($table = 'user') {
        $username = $this->session->userdata('username');
        //从view/admin/register_view取得值
        $data = array();
        $data['password'] = $this->input->post('password');
        $data['email'] = $this->input->post('email');

        $this->db->where('username', $username);
        return $this->db->update($table, $data);
    }

}
