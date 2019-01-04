<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
 
class Dangnhap extends CI_Controller {
  public function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->checkLogin();
    }
    public function view()
    {
      $this->load->view('site/dangnhap_view.php');
    }   
    public function checkLogin()
    {
      //print_r($_POST);
        $TENDNAD = isset($_POST['TENDNAD']) ? $_POST['TENDNAD'] : "";
        $PASSAD = isset($_POST['PASSAD']) ? $_POST['PASSAD'] : "";
        $this->load->model("m_admin");
        if ($this->m_admin->checkLogin($TENDNAD, $PASSAD) && $TENDNAD != "" && $PASSAD != ""){
          //Nếu đăng nhập thành công
          $this->session->set_userdata("CheckLogin", true);
          $data['infLogin'] = $this->m_admin->infLogin($TENDNAD, $PASSAD);
          $this->session->set_userdata($data['infLogin']);
          //echo "<script>alert('Đăng nhập thành công !!!');</script>";
          //Chuyển sang trang Admin
          redirect(base_url() . "index.php/admin");     
        }
        else{
          //Nếu đăng nhập thất bại
          echo "<script>alert('Tài khoản hoặc mật khẩu không đúng !!!');</script>";
          //load lại trang login
          $this->view();
        }
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
