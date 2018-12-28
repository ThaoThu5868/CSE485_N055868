<?php
class M_khoahoc extends CI_Model{
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
        $query=$this->db->query("select * from khoahoc;");
        return $query->result_array();
    }
     public function getListAllCTKH(){
        $query=$this->db->query("select * from baihoc;");
        return $query->result_array();
    }
     public function getList4KH(){
        $query=$this->db->query("select * from khoahoc  limit 0, 4;");
        return $query->result_array();
    }
     public function getList3KH(){
        $query=$this->db->query("select * from khoahoc  limit 0, 3;");
        return $query->result_array();
    }
    public function getListCTKHBYID($id){
        $query=$this->db->query("select * from baihoc where MAKH=$id;");
        return $query->result_array();
    }
    //   public function getListNDKH(){
    //     $query=$this->db->query("select * from chitietkhoahoc,khoahoc  ;");
    //     return $query->result_array();
    // }

}
?>