<?php
class M_giangvien extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    // public function countAll(){
    //     $query=$this->db->query("select * from cam_nang;");
    //     return $query->num_rows();
    // }

    // public function getList($size, $start){
    //     $start = isset($start)? $start : 0;
    //     $query=$this->db->query("select * from cam_nang limit $start , $size");
    //     return $query->result_array();
    // }

    public function getListAllGV(){
        $query=$this->db->query("select * from giangvien ;");
        return $query->result_array();
    }

    public function getList3GV(){
        $query=$this->db->query("select * from giangvien limit 0, 3;");
        return $query->result_array();
    }
   

}
?>