<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class TrangChu extends CI_Controller {
    public function tchu()
    {
    	$this->load->model('m_km');
    	$this->load->model('m_giangvien');
      $this->load->model('m_khoahoc');
      
      $data['arr3KM'] = $this->m_km->getList3KM();
      $data['arrGV'] = $this->m_giangvien->getList3GV();
      $data['arrKH'] = $this->m_khoahoc->getList4KH();
           //print_r($data);
      $this->load->view('site/trangchu_view.php',$data);
      
           //print_r($data);
      

    }   

}