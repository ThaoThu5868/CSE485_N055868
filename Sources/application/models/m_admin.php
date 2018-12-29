<?php
class M_admin extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function countAll(){
        $query=$this->db->query("select * from admin;");
        return $query->num_rows();
    }
    public function getListAll(){
        $query=$this->db->query("select * from admin;");
        return $query->result_array();
    }
    public function getList($size, $start){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from admin limit $start , $size;");
        return $query->result_array();
    }
    
}
?>