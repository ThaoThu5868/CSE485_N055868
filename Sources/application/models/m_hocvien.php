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
    public function getList($size, $start){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from hocvien limit $start , $size;");
        return $query->result_array();
    }
    public function DeleteHV($mahv){
        $query=$this->db->query("DELETE FROM `hoadon` WHERE MAHV=$mahv;");
        $query=$this->db->query("DELETE FROM `hocvien` WHERE MAHV=$mahv;");
    }
    public function add($tendn, $email, $pass, $trn, $ten, $diachi, $ngaysinh, $sdt){
        $this->db->query("INSERT INTO `hocvien`(`TENDNHV`, `EMAILHV`, `PASSHV`, `trn_date`, `TENHV`, `DIACHIHV`, `NGAYSINHHV`, `SDTHV`) VALUES ('$tendn','$email','$pass','$trn','$ten','$diachi','$ngaysinh','$sdt');");
    }
}
?>