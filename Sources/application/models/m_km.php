<?php
class M_km extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function countAll(){
        $query=$this->db->query("select * from khuyenmai km, admin ad where km.MaAD=ad.MAAD;");
        return $query->num_rows();
    }
    public function getListAll(){
        $query=$this->db->query("select * from khuyenmai km, admin ad where km.MaAD=ad.MAAD;");
        return $query->result_array();
    }
    public function getList($start, $size ){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from khuyenmai km, admin ad where km.MaAD=ad.MAAD order by km.MAKM limit $start , $size;");
        return $query->result_array();
    }
    public function DeleteKM($makm){
        $query=$this->db->query("DELETE FROM `khuyenmai` WHERE MAKM=$makm;");
    }
    public function add($ten, $link, $tieude, $tomtat, $maad){
        $this->db->query("INSERT INTO `khuyenmai`(`TENKM`,  `LINKKM`, `TIEUDEKM`, `TOMTATKM`, `MAAD`) VALUES ('$ten','$link','$tieude','$tomtat','$maad');;");
    }
    public function getByType(){
        $query=$this->db->query("SELECT MAKM FROM `khuyenmai`;");
        return $query->result_array();
    }
    public function getByID($makm){
        $query=$this->db->query("select * from khuyenmai where MAKM = $makm");
        return $query->row_array();
    }
    public function edit($makm, $ten, $link, $tieude, $tomtat, $maad){
        $this->db->query("UPDATE `khuyenmai` SET `TENKM`='$ten',`LINKKM`='$link',`TIEUDEKM`='$tieude',`TOMTATKM`='$tomtat',`MAAD`=$maad WHERE MAKM=$makm");
    }
    public function countAllSearch($s){
        $query=$this->db->query("select * from khuyenmai km, admin ad WHERE km.MAAD=ad.MAAD AND TENAD LIKE '%$s%' or TENKM LIKE '%$s%' ;");
        return $query->num_rows();
    }
    
    public function getListSearch($start, $size, $s){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from khuyenmai km, admin ad WHERE km.MAAD=ad.MAAD AND TENAD LIKE '%$s%' or TENKM LIKE '%$s%' limit $start , $size;");
        return $query->result_array();
    }
     public function getList3KM(){
        $query=$this->db->query("select * from khuyenmai limit 0, 3;");
        return $query->result_array();
    }
}
?>