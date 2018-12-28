<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class Khoahoc extends CI_Controller {
    public function kh()
    {
    	$this->load->model('m_khoahoc');
    	$this->load->model('m_km');
      
      $data['arrKH'] = $this->m_khoahoc->getListAll();
      $data['arr3KH'] = $this->m_khoahoc->getList3KH();
      $data['arrCTKH'] = $this->m_khoahoc->getListAllCTKH();
      $data['arr3KM'] = $this->m_km->getList3KM();
      //print_r($data);
      $this->load->view('site/khoahoc_view.php', $data);
    }  
      
}