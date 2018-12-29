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
    public function getList($size, $start){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from khuyenmai km, admin ad where km.MaAD=ad.MAAD limit $start , $size;");
        return $query->result_array();
    }
    public function DeleteKM($makm){
        $query=$this->db->query("DELETE FROM `khuyenmai` WHERE MAKM=$makm;");
    }
    public function add($ten, $link, $tieude, $tomtat, $maad){
        $this->db->query("INSERT INTO `khuyenmai`(`TENKM`,  `LINKKM`, `TIEUDEKM`, `TOMTATKM`, `MAAD`) VALUES ('$ten','$link','$tieude','$tomtat','$maad');;");
    }
}
?>