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
    public function getList($start, $size){
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
    public function getByID($magv){
        $query=$this->db->query("select * from giangvien where MAGV = $magv");
        return $query->row_array();
    }
    public function edit($magv, $ten, $link, $tieude, $tomtat, $noidung){
        $this->db->query("UPDATE `giangvien` SET `TENGV`='$ten',`LINKGV`='$link',`TIEUDEGV`='$tieude',`TOMTATGV`='$tomtat',`NOIDUNGGV`='$noidung' WHERE MAGV=$magv");
    }
    public function countAllSearch($s){
        $query=$this->db->query("select * from giangvien WHERE  TENGV LIKE '%$s%';");
        return $query->num_rows();
    }
    
    public function getListSearch($start, $size, $s){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from giangvien WHERE  TENGV LIKE '%$s%' limit $start , $size;");
        return $query->result_array();
    }
     public function getList3GV(){
        $query=$this->db->query("select * from giangvien limit 0, 3;");
        return $query->result_array();
    }
}
?>