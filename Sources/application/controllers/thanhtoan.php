<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class ThanhToan extends CI_Controller {
	public function ttoan()
	{
		$this->load->model('m_khoahoc');
		$this->load->model('m_km');

		$data['arr3KH'] = $this->m_khoahoc->getList3KH();
		$data['arr3KM'] = $this->m_km->getList3KM();
		
		
		$this->load->view('site/thanhtoan_view.php', $data);
	}    
}