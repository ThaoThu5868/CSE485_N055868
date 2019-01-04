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
    public function getList($start, $size ){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from khoahoc kh, admin ad where kh.MaAD=ad.MAAD order by kh.MaKH limit $start , $size;");
        return $query->result_array();
    }
    public function DeleteKH($makh){
        $query=$this->db->query("DELETE FROM `baihoc` WHERE MAKH=$makh;");
        $query=$this->db->query("DELETE FROM `khoahoc` WHERE MAKH=$makh;");
    }
    public function add($ten, $link, $tieude, $tomtat, $gia, $maad){
        $this->db->query("INSERT INTO `khoahoc`(`TENKH`, `LINKKH`, `TIEUDEKH`, `TOMTATKH`, `GIAKH`, `MAAD`) VALUES ('$ten','$link','$tieude','$tomtat', '$gia','$maad');;");
    }
 
    public function getByID($makh){
        $query=$this->db->query("SELECT * FROM `khoahoc` WHERE MAKH = $makh");
        return $query->row_array();
    }

    public function getByType(){
        $query=$this->db->query("SELECT MAKH FROM `khoahoc`;");
        return $query->result_array();
    }
    public function edit($makh, $ten,  $link, $tieude, $tomtat, $gia, $maad){
        $this->db->query("UPDATE `khoahoc` SET `TENKH`='$ten',`LINKKH`='$link',`TIEUDEKH`='$tieude',`TOMTATKH`='$tomtat',`GIAKH`='$gia',`MAAD`=$maad WHERE MAKH=$makh;");
    }
    public function countAllSearch($s){
        $query=$this->db->query("select * from khoahoc kh, admin ad WHERE kh.MAAD=ad.MAAD AND TENAD LIKE '%$s%' or TENKH LIKE '%$s%' ;");
        return $query->num_rows();
    }
    
    public function getListSearch($start, $size, $s){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from khoahoc kh, admin ad WHERE kh.MAAD=ad.MAAD AND TENAD LIKE '%$s%' or TENKH LIKE '%$s%' limit $start , $size;");
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

}
?>