<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class KM extends CI_Controller {
    public function khuyenmai()
    {
    	$this->load->model('m_km');
    	$this->load->model('m_khoahoc');
      $config['base_url'] = base_url()."index.php/km/khuyenmai";
      $config['total_rows'] = $this->m_km->countAll();
      $config['per_page'] = 3;
      
      $start=$this->uri->segment(3);
      $this->load->library('pagination', $config);
      $data['arrKM']= $this->m_km->getList($start,$config['per_page'] );
      $data['arr3KM'] = $this->m_km->getList3KM();
      $data['arr3KH'] = $this->m_khoahoc->getList3KH();
      //print_r($data);
      $this->load->view('site/km_view.php', $data);
    }    
}