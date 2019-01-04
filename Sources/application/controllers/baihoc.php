<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class Baihoc extends CI_Controller {
    public function bh($MaKH)
    {
       $this->load->model('m_baihoc');
    	 $this->load->model('m_km');
       $this->load->model('m_khoahoc');
       $config['base_url'] = base_url()."index.php/baihoc/bh/$MaKH/";
       $config['total_rows'] = $this->m_baihoc->countAll($MaKH);
       $config['per_page'] = 5;
       $start=$this->uri->segment(4);
       $this->load->library('pagination', $config);
       $data['arrBH']= $this->m_baihoc->getList($start, $config['per_page'], $MaKH);
       $data['arr3KH'] = $this->m_khoahoc->getList3KH();
       $data['arr3KM'] = $this->m_km->getList3KM();
       $data['KH'] = $this->m_khoahoc->getByID($MaKH);
       $this->load->view('site/baihoc_view.php', $data);
          
    }  
}