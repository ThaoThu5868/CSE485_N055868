<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class Gtkhoahoc extends CI_Controller {
    public function khoc()
    {    	
    	$this->load->model('m_khoahoc');
    	$this->load->model('m_km');
      
      $data['arrKH'] = $this->m_khoahoc->getListAll();
      $data['arr3KM'] = $this->m_km->getList3KM();
      $data['arr3KH'] = $this->m_khoahoc->getList3KH();
      // $data['arrCTKH'] = $this->m_khoahoc->getListAllCTKH();
      //print_r($data);
      $this->load->view('site/gtkhoahoc_view.php', $data);
    }  
      
}