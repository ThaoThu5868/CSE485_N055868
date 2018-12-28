<?php
class M_km extends CI_Model{
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

    public function getListAll(){
        $query=$this->db->query("select * from khuyenmai;");
        return $query->result_array();
    }
    public function getList3KM(){
        $query=$this->db->query("select * from khuyenmai limit 0, 3;");
        return $query->result_array();
    }
   

}
?>