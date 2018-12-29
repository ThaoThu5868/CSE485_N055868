<?php
class M_baihoc extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function countAll($MaKH){
        $query=$this->db->query("select * from baihoc WHERE MAKH=$MaKH;");
        return $query->num_rows();
    }
    public function getListAll(){
        $query=$this->db->query("select * from baihoc bh, khoahoc kh where bh.MAKH=kh.MAKH;");
        return $query->result_array();
    }
    public function getList($start, $size, $MaKH){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from baihoc WHERE MAKH=$MaKH limit $start, $size;");
        return $query->result_array();
    }
    public function DeleteBH($mabh){
        $query=$this->db->query("DELETE FROM `baihoc` WHERE MABH=$mabh;");
    }
   
}
?>