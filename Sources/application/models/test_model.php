<?php
class Test_model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function listUser(){
        $query=$this->db->query("SELECT * FROM user");
        return $query->result_array();
    }
}
?>