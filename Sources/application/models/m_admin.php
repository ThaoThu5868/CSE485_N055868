<?php
class M_admin extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function countAll(){
        $query=$this->db->query("select * from admin;");
        return $query->num_rows();
    }
    public function getListAll(){
        $query=$this->db->query("select * from admin;");
        return $query->result_array();
    }
    public function getList($start, $size){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from admin limit $start , $size;");
        return $query->result_array();
    }
    public function countAllSearch($s){
        $query=$this->db->query("select * from admin WHERE TENDNAD LIKE '%$s%' OR TENAD LIKE '%$s%' OR SDTAD LIKE '%$s%' ;");
        return $query->num_rows();
    }
    public function getListSearch($start, $size, $s){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * FROM admin WHERE TENDNAD LIKE '%$s%' OR `TENAD` LIKE '%$s%' OR SDTAD LIKE '%$s%' limit $start , $size;");
        return $query->result_array();
    }
    public function getByID($maad){
        $query=$this->db->query("select * from admin where MAAD = $maad");
        return $query->row_array();
    }
    public function edit($maad, $tendn,$email,$pass,$ten, $diachi, $ngaysinh,$sdt){
        $this->db->query("UPDATE `admin` SET `TENDNAD`='$tendn',`EMAILAD`='$email',`PASSAD`='$pass',`TENAD`='$ten',`DIACHIAD`='$diachi',`NGAYSINHAD`='$ngaysinh',`SDTAD`='$sdt' WHERE MAAD =$maad"); 


    }
    public function checkLogin($TENDNAD, $PASSAD){
        $query=$this->db->query("SELECT * FROM `admin` WHERE TENDNAD = '$TENDNAD' and PASSAD = '$PASSAD'");
        $ck = $query->num_rows();
        if ($ck > 0)return true;
        return false;
    }
    public function infLogin($TENDNAD, $PASSAD){
        $query=$this->db->query("SELECT * FROM `admin` WHERE TENDNAD = '$TENDNAD' and PASSAD = '$PASSAD'");
        return $query->row_array();
    }

}
?>