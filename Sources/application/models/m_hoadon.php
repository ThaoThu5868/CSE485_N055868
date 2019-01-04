<?php
class M_hoadon extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function countAll(){
        $query=$this->db->query("SELECT * from hoadon hd, hocvien hv, admin ad, khoahoc kh WHERE hd.MAHV=hv.MAHV AND hd.MAAD=ad.MAAD and hd.MAKH=kh.MAKH;");
        return $query->num_rows();
    }
    public function getListAll(){
        $query=$this->db->query("SELECT * from hoadon hd, hocvien hv, admin ad, khoahoc kh WHERE hd.MAHV=hv.MAHV AND hd.MAAD=ad.MAAD and hd.MAKH=kh.MAKH;");
        return $query->result_array();
    }
    public function getList( $start,$size){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("SELECT * from hoadon hd, hocvien hv, admin ad, khoahoc kh WHERE hd.MAHV=hv.MAHV AND hd.MAAD=ad.MAAD and hd.MAKH=kh.MAKH order by hd.MaHD limit $start , $size;");
        return $query->result_array();
    }
    public function DeleteHD($mahd){
        $query=$this->db->query("DELETE FROM `hoadon` WHERE MAHD=$mahd;");
    }
    public function add($ngayhd,$tongtien, $mahv,$maad,$makm,$makh,$checktt){
        $this->db->query("INSERT INTO `hoadon`(`NGAYHD`, `TONGTIEN`, `MAHV`, `MAAD`, `MAKM`, `MAKH`, `CHECKTT`) VALUES ('$ngayhd','$tongtien','$mahv','$maad','$makm','$makh',$checktt);");
    }
    public function getByID($mahd){
        $query=$this->db->query("select * from hoadon where MAHD = $mahd");
        return $query->row_array();
    }
    public function edit($mahd,$ngayhd,$tongtien,$mahv,$maad,$makm,$makh,$checktt){
        $this->db->query("UPDATE `hoadon` SET `NGAYHD`='$ngayhd',`TONGTIEN`='$tongtien',`MAHV`='$mahv',`MAAD`='$maad',`MAKM`='$makm',`MAKH`='$makh',`CHECKTT`='$checktt' WHERE MAHD=$mahd;");
    }
    public function countAllSearch($s){
        $query=$this->db->query("SELECT * FROM `hoadon` hd, `hocvien` hv, admin ad, khoahoc kh WHERE hd.MAHV=hv.MAHV AND hd.MAAD=ad.MAAD AND hd.MAKH=kh.MAKH AND TENHV like '%$s%';");
        return $query->num_rows();
    }
    
    public function getListSearch($start, $size, $s){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("SELECT * FROM `hoadon` hd, `hocvien` hv, admin ad, khoahoc kh WHERE hd.MAHV=hv.MAHV AND hd.MAAD=ad.MAAD AND hd.MAKH=kh.MAKH AND TENHV like '%$s%' limit $start , $size;");
        return $query->result_array();
    }
}
?>