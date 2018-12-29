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
    public function getList($size, $start){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("SELECT * from hoadon hd, hocvien hv, admin ad, khoahoc kh WHERE hd.MAHV=hv.MAHV AND hd.MAAD=ad.MAAD and hd.MAKH=kh.MAKH order by hd.MaHD limit $start , $size;");
        return $query->result_array();
    }
    public function DeleteHD($mahd){
        $query=$this->db->query("DELETE FROM `hoadon` WHERE MAHD=$mahd;");
    }
}
?>