<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class GT extends CI_Controller {
	public function gioithieu()
	{
		$this->load->model('m_km');
		$this->load->model('m_khoahoc');


		$data['arr3KM'] = $this->m_km->getList3KM();
		$data['arr3KH'] = $this->m_khoahoc->getList3KH();

		$this->load->view('site/gt_view.php', $data);
	}    
}