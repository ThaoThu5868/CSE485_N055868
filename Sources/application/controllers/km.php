<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class KM extends CI_Controller {
    public function khuyenmai()
    {
    	$this->load->model('m_km');
    	$this->load->model('m_khoahoc');
      
      $data['arrKM'] = $this->m_km->getListAll();
      $data['arr3KM'] = $this->m_km->getList3KM();
      $data['arr3KH'] = $this->m_khoahoc->getList3KH();
      //print_r($data);
      $this->load->view('site/km_view.php', $data);
    }    
}