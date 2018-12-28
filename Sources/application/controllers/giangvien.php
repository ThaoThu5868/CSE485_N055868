<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Giangvien extends CI_Controller {
	public function gv()
	{
		$this->load->model('m_giangvien');
		$this->load->model('m_km');
		$this->load->model('m_khoahoc');


		$data['arr3KM'] = $this->m_km->getList3KM();
		$data['arr3KH'] = $this->m_khoahoc->getList3KH();
		$data['arrGV'] = $this->m_giangvien->getListAllGV();
      //print_r($data);
		$this->load->view('site/giangvien_view.php', $data);
	}    
}