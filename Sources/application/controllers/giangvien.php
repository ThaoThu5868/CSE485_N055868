<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Giangvien extends CI_Controller {
	public function gv()
	{
		$this->load->model('m_giangvien');
		$this->load->model('m_km');
		$this->load->model('m_khoahoc');
		$config['base_url'] = base_url()."index.php/giangvien/gv";
   		$config['total_rows'] = $this->m_giangvien->countAll();
    	$config['per_page'] = 2;

    	$start=$this->uri->segment(3);
   		$this->load->library('pagination', $config);
    	$data['arrGV']= $this->m_giangvien->getList($start,$config['per_page'] );
		$data['arr3KM'] = $this->m_km->getList3KM();
		$data['arr3KH'] = $this->m_khoahoc->getList3KH();
		
      //print_r($data);
		$this->load->view('site/giangvien_view.php', $data);
	}    
}