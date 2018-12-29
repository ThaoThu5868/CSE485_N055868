<?php
class M_khoahoc extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function countAll(){
        $query=$this->db->query("select * from khoahoc kh, admin ad where kh.MaAD=ad.MAAD;");
        return $query->num_rows();
    }
    public function getListAll(){
        $query=$this->db->query("select * from khoahoc kh, admin ad where kh.MaAD=ad.MAAD;");
        return $query->result_array();
    }
    public function getList($size, $start){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from khoahoc kh, admin ad where kh.MaAD=ad.MAAD limit $start , $size;");
        return $query->result_array();
    }
    public function DeleteKH($makh){
        $query=$this->db->query("DELETE FROM `baihoc` WHERE MAKH=$makh;");
        $query=$this->db->query("DELETE FROM `khoahoc` WHERE MAKH=$makh;");
    }
    public function add($ten,$loai, $link, $tieude, $tomtat, $gia, $maad){
        $this->db->query("INSERT INTO `khoahoc`(`TENKH`, `LOAIKH`, `LINKKH`, `TIEUDEKH`, `TOMTATKH`, `GIAKH`, `MAAD`) VALUES ('$ten','$loai','$link','$tieude','$tomtat', '$gia','$maad');;");
    }

    public function getByID($id){
        $query=$this->db->query("SELECT * FROM `khoahoc` WHERE MAKH = $id");
        return $query->row_array();
    }
}
?>