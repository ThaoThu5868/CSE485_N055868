<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class Admin extends CI_Controller {
  public function index()
  {
    $this->load->view('admin/home_admin_view');
  }    
  // Chi tiết
  public function chitietadmin()
  {
    $this->load->model('m_admin');
    $data['arrAD'] = $this->m_admin->getListAll();
    $config['base_url'] = base_url()."index.php/admin/chitietadmin";
    $config['total_rows'] = $this->m_admin->countAll();
    $config['per_page'] = 5;

    $size=$this->uri->segment(3);
    $this->load->library('pagination', $config);
    $data['arrAD']= $this->m_admin->getList($config['per_page'], $size);
    $this->load->view("admin/getlist_admin_view", $data);
  }
  public function chitiethv()
  {
    $this->load->model('m_hocvien');
    
    $data['arrHV'] = $this->m_hocvien->getListAll();
    $config['base_url'] = base_url()."index.php/admin/chitiethv";
    $config['total_rows'] = $this->m_hocvien->countAll();
    $config['per_page'] = 5;

    $size=$this->uri->segment(3);
    $this->load->library('pagination', $config);
    $data['arrHV']= $this->m_hocvien->getList($config['per_page'], $size);
    $this->load->view("admin/getlist_hocvien_view", $data);
  } 
  public function chitietgv()
  {
    $this->load->model('m_giangvien');
    $data['arrGV'] = $this->m_giangvien->getListAll();
    $config['base_url'] = base_url()."index.php/admin/chitietgv";
    $config['total_rows'] = $this->m_giangvien->countAll();
    $config['per_page'] = 2;

    $size=$this->uri->segment(3);
    $this->load->library('pagination', $config);
    $data['arrGV']= $this->m_giangvien->getList($config['per_page'], $size);
    $this->load->view("admin/getlist_giangvien_view", $data);
  }
  public function chitiethoadon()
  {
    $this->load->model('m_hoadon');
    
    $data['arrHD'] = $this->m_hoadon->getListAll();
    $config['base_url'] = base_url()."index.php/admin/chitiethoadon";
    $config['total_rows'] = $this->m_hoadon->countAll();
    $config['per_page'] = 5;

    $size=$this->uri->segment(3);
    $this->load->library('pagination', $config);
    $data['arrHD']= $this->m_hoadon->getList($config['per_page'], $size);
    $this->load->view("admin/getlist_hoadon_view", $data);
  }
  public function chitietkh()
  {
    $this->load->model('m_khoahoc');
    
    $data['arrKH'] = $this->m_khoahoc->getListAll();
    $config['base_url'] = base_url()."index.php/admin/chitietkh";
    $config['total_rows'] = $this->m_khoahoc->countAll();
    $config['per_page'] = 5;

    $size=$this->uri->segment(3);
    $this->load->library('pagination', $config);
    $data['arrKH']= $this->m_khoahoc->getList($config['per_page'], $size);
    $this->load->view("admin/getlist_khoahoc_view", $data);
  }
  public function chitietbh($MaKH)
  {
    $this->load->model('m_baihoc');
    $this->load->model('m_khoahoc');
    $config['base_url'] = base_url()."index.php/admin/chitietbh/$MaKH/";
    $config['total_rows'] = $this->m_baihoc->countAll($MaKH);
     $config['per_page'] = 5;

     $start=$this->uri->segment(4);
     $this->load->library('pagination', $config);
     $data['arrBH']= $this->m_baihoc->getList($start, $config['per_page'], $MaKH);
     $data['KH'] = $this->m_khoahoc->getByID($MaKH);
     $this->load->view("admin/getlist_baihoc_view", $data);
  }
  public function chitietkm()
  {
    $this->load->model('m_km');
    $data['arrKM'] = $this->m_km->getListAll();
    $config['base_url'] = base_url()."index.php/admin/chitietkm";
    $config['total_rows'] = $this->m_km->countAll();
    $config['per_page'] = 5;

    $size=$this->uri->segment(3);
    $this->load->library('pagination', $config);
    $data['arrKM']= $this->m_km->getList($config['per_page'], $size);
    $this->load->view("admin/getlist_km_view", $data);
  }
    
    
  

  //Xóa
  public function deletehv($mahv){
    $this->load->model("m_hocvien");
    $this->m_hocvien->deletehv($mahv);
    redirect(base_url() . "index.php/admin/chitiethv");
  }
  public function deletegv($magv){
    $this->load->model("m_giangvien");
    $this->m_giangvien->deletegv($magv);
    redirect(base_url() . "index.php/admin/chitietgv");
  }
  public function deletehd($mahd){
    $this->load->model("m_hoadon");
    $this->m_hoadon->deletehd($mahd);
    redirect(base_url() . "index.php/admin/chitiethoadon");
  }
  public function deletebh($mabh){
    $this->load->model("m_baihoc");
    $this->m_baihoc->deletebh($mabh);
    redirect(base_url() . "index.php/admin/chitietbh");
  }
  public function deletekh($makh){
    $this->load->model("m_khoahoc");
    $this->m_khoahoc->deletekh($makh);
    redirect(base_url() . "index.php/admin/chitietkh");
  }
  public function deletekm($makm){
    $this->load->model("m_km");
    $this->m_km->deletekm($makm);
    redirect(base_url() . "index.php/admin/chitietkm");
  }

  //  Thêm
  public function themhv()
  {
    $this->load->view('admin/set_add_hocvien_view.php');
    
  }
  public function pro_themhv()
  {
    //Kiểm tra bằng form validation
    $this->load->library('form_validation');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('tendn', 'Tên Đăng Nhập', 'required');

    if($this->form_validation->run() == FALSE){
      echo validation_errors();  
      $this->themhv();
    }else{
      $tendn = isset($_POST['tendn']) ? $_POST['tendn'] : "";
      $email=isset($_POST['email']) ? $_POST['email'] : "";
      $pass=isset($_POST['pass']) ? $_POST['pass'] : "";
      $trn= isset($_POST['trn']) ? $_POST['trn'] : "";
      $ten=isset($_POST['ten']) ? $_POST['ten'] : "";
      $diachi=isset($_POST['diachi']) ? $_POST['diachi'] : "";
      $ngaysinh=isset($_POST['ngaysinh']) ? $_POST['ngaysinh'] : "";
      $sdt=isset($_POST['sdt']) ? $_POST['sdt'] : "";
      //print_r($_POST);
      // print_r($trn);
      $this->load->model('m_hocvien');
      $this->m_hocvien->add($tendn, $email, $pass, $trn, $ten, $diachi, $ngaysinh, $sdt);
      redirect(base_url() . "index.php/admin/chitiethv");
    }
  }
  public function themgv()
  {
    $this->load->view('admin/set_add_giangvien_view.php');
    
  }
  public function pro_themgv()
  {
    //Kiểm tra bằng form validation
    $this->load->library('form_validation');
    $this->form_validation->set_rules('ten', 'Họ Tên', 'required');
    $this->form_validation->set_rules('tieude', 'Tiêu đề', 'required');
    $this->form_validation->set_rules('tomtat', 'Tóm tắt', 'required');
    $this->form_validation->set_rules('noidung', 'Nội dung', 'required');
    if($this->form_validation->run() == FALSE){
      echo validation_errors();  
      $this->themgv();
    }else{
      $ten = isset($_POST['ten']) ? $_POST['ten'] : "";
      $link=isset($_POST['link']) ? $_POST['link'] : "";
      $tieude=isset($_POST['tieude']) ? $_POST['tieude'] : "";
      $tomtat= isset($_POST['tomtat']) ? $_POST['tomtat'] : "";
      $noidung=isset($_POST['noidung']) ? $_POST['noidung'] : "";
      //print_r($_POST);
      // print_r($trn);
      $this->load->model('m_giangvien');
      $this->m_giangvien->add($ten, $link, $tieude, $tomtat, $noidung);
      redirect(base_url() . "index.php/admin/chitietgv");
    }
  }
  public function themkh()
  {
    $this->load->view('admin/set_add_khoahoc_view.php');
  }    
  public function pro_themkh()
  {
    //Kiểm tra bằng form validation
    $this->load->library('form_validation');
    $this->form_validation->set_rules('loai', 'Loại', 'required');
    $this->form_validation->set_rules('ten', 'Tên', 'required');
    $this->form_validation->set_rules('tieude', 'Tiêu đề', 'required');
    $this->form_validation->set_rules('tomtat', 'Tóm tắt', 'required');
    $this->form_validation->set_rules('gia', 'Giá', 'required|');
    $this->form_validation->set_rules('maad', 'Người tạo', 'required');
    if($this->form_validation->run() == FALSE){
      echo validation_errors();  
      $this->themkh();
    }else{
      $loai = isset($_POST['loai']) ? $_POST['loai'] : "";
      $ten = isset($_POST['ten']) ? $_POST['ten'] : "";
      $tieude=isset($_POST['tieude']) ? $_POST['tieude'] : "";
      $tomtat=isset($_POST['tomtat']) ? $_POST['tomtat'] : "";
      $gia= isset($_POST['gia']) ? $_POST['gia'] : "";
      $link=isset($_POST['link']) ? $_POST['link'] : "";
      $maad = isset($_POST['maad']) ? $_POST['maad'] : "";
      //print_r($_POST);
      // print_r($trn);
      $this->load->model('m_khoahoc');
      $this->m_khoahoc->add($ten,$loai, $link, $tieude, $tomtat, $gia, $maad);
      redirect(base_url() . "index.php/admin/chitietkh");
    }
  }
  public function themkm()
  {
    $this->load->view('admin/set_add_km_view.php');
  }
  public function pro_themkm()
  {
    //Kiểm tra bằng form validation
    $this->load->library('form_validation');
    $this->form_validation->set_rules('ten', 'Tên', 'required');
    $this->form_validation->set_rules('tieude', 'Tiêu đề', 'required');
    $this->form_validation->set_rules('tomtat', 'Tóm tắt', 'required');
    $this->form_validation->set_rules('maad', 'Người tạo', 'required');
    if($this->form_validation->run() == FALSE){
      echo validation_errors();  
      $this->themkm();
    }else{
      $ten = isset($_POST['ten']) ? $_POST['ten'] : "";
      $tieude=isset($_POST['tieude']) ? $_POST['tieude'] : "";
      $tomtat=isset($_POST['tomtat']) ? $_POST['tomtat'] : "";
      $link=isset($_POST['link']) ? $_POST['link'] : "";
      $maad = isset($_POST['maad']) ? $_POST['maad'] : "";
      //print_r($_POST);
      // print_r($trn);
      $this->load->model('m_km');
      $this->m_km->add($ten, $link, $tieude, $tomtat, $maad);
      redirect(base_url() . "index.php/admin/chitietkm");
    }
  }
  public function themhd()
  {
    $this->load->view('admin/set_add_hoadon_view.php');
  }

}