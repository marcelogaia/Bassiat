<?php
/**
 * Created by PhpStorm.
 * User: Marcelo Gaia
 * Date: 2015-10-02
 * Time: 11:20 AM
 */

class User_model extends CI_Model {

    public $id;
    public $name;
    public $username;
    public $password;
    public $privilege;
    public $timestamp;

    public function __construct()
    {
        parent::__construct();
    }

    public function get_user($id)
    {
        $query = $this->db->get_where('media', array('id' => $id), 1);
        if($query->num_rows() > 0){
            $result = $query->result();
            return $result[0];
        } else return false;
    }

    public function check_user_password($username, $password){
        $query = $this->db->get_where('user',array('username' => $username, 'password' => $password));

        if($query->num_rows() > 0){
            $result = $query->result();
            return $result[0];
        } else return false;
    }

    public function insert_entry($data)
    {
    }

    public function update_entry($data)
    {
    }

}