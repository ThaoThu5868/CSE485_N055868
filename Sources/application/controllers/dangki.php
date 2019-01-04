<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Dangki extends CI_Controller {

	public function themhv()
	{
		$this->load->view('site/dangki_view.php');

	}
	public function pro_themhv()
	{
    //Kiểm tra bằng form validation
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('ten', 'Họ Tên', 'required');

		if($this->form_validation->run() == FALSE){
      //echo validation_errors();  
			$this->themhv();
		}else{
			$email=isset($_POST['email']) ? $_POST['email'] : "";
			$trn= isset($_POST['trn']) ? $_POST['trn'] : "";
			$ten=isset($_POST['ten']) ? $_POST['ten'] : "";
			$diachi=isset($_POST['diachi']) ? $_POST['diachi'] : "";
			$ngaysinh=isset($_POST['ngaysinh']) ? $_POST['ngaysinh'] : "";
			$sdt=isset($_POST['sdt']) ? $_POST['sdt'] : "";
      //print_r($_POST);
      // print_r($trn);
			$this->load->model('m_hocvien');
			$this->m_hocvien->add( $email, $trn, $ten, $diachi, $ngaysinh, $sdt);
			echo "<script>alert('Bạn đã đăng kí thành công!');</script>";
			$this->themhv();
		}
	}
}    
