<?php
class M_hocvien extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function countAll(){
        $query=$this->db->query("select * from hocvien;");
        return $query->num_rows();
    }
    public function getListAll(){
        $query=$this->db->query("select * from hocvien;");
        return $query->result_array();
    }
    public function getList($start, $size){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from hocvien limit $start , $size;");
        return $query->result_array();
    }
    public function DeleteHV($mahv){
        $query=$this->db->query("DELETE FROM `hoadon` WHERE MAHV=$mahv;");
        $query=$this->db->query("DELETE FROM `hocvien` WHERE MAHV=$mahv;");
    }
    public function add( $email, $trn, $ten, $diachi, $ngaysinh, $sdt){
        $this->db->query("INSERT INTO `hocvien`( `EMAILHV`, `trn_date`, `TENHV`, `DIACHIHV`, `NGAYSINHHV`, `SDTHV`) VALUES ('$email','$trn','$ten','$diachi','$ngaysinh','$sdt');");
    }
    public function getByID($mahv){
        $query=$this->db->query("select * from hocvien where MAHV = $mahv");
        return $query->row_array();
    }
    public function edit($mahv, $email, $trn, $ten, $diachi, $ngaysinh, $sdt){
        $this->db->query("UPDATE `hocvien` SET `EMAILHV`='$email',`trn_date`='$trn',`TENHV`='$ten',`DIACHIHV`='$diachi',`NGAYSINHHV`='$ngaysinh',`SDTHV`='$sdt' WHERE MAHV=$mahv");
    }
    public function countAllSearch($s){
        $query=$this->db->query("select * from hocvien WHERE TENHV LIKE '%$s%' OR SDTHV LIKE '%$s%';");
        return $query->num_rows();
    }
    
    public function getListSearch($start, $size, $s){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * FROM hocvien WHERE `TENHV` LIKE '%$s%' OR SDTHV LIKE '%$s%' limit $start , $size;");
        return $query->result_array();
    }
    
}
?>