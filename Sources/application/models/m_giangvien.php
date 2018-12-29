<?php
class M_giangvien extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function countAll(){
        $query=$this->db->query("select * from giangvien;");
        return $query->num_rows();
    }
    public function getListAll(){
        $query=$this->db->query("select * from giangvien;");
        return $query->result_array();
    }
    public function getList($size, $start){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from giangvien limit $start , $size;");
        return $query->result_array();
    }
    public function DeleteGV($magv){
        $query=$this->db->query("DELETE FROM `giangvien` WHERE MAGV=$magv;");
    }
    public function add($ten, $link, $tieude, $tomtat, $noidung){
        $this->db->query("INSERT INTO `giangvien`(`TENGV`, `LINKGV`, `TIEUDEGV`, `TOMTATGV`, `NOIDUNGGV`) VALUES ('$ten','$link','$tieude','$tomtat','$noidung');");
    }
}
?>