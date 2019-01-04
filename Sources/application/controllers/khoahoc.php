<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class Khoahoc extends CI_Controller {
    public function kh()
    {
    	$this->load->model('m_khoahoc');
    	$this->load->model('m_km');
      $config['base_url'] = base_url()."index.php/khoahoc/kh";
      $config['total_rows'] = $this->m_khoahoc->countAll();
      $config['per_page'] = 3;

      $start=$this->uri->segment(3);
      $this->load->library('pagination', $config);
      $data['arrKH']= $this->m_khoahoc->getList($start,$config['per_page'] );
      $data['arr3KH'] = $this->m_khoahoc->getList3KH();
      $data['arr3KM'] = $this->m_km->getList3KM();
      //print_r($data);
      $this->load->view('site/khoahoc_view.php', $data);
    }  
   
      
}