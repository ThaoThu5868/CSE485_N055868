<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class Admin extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->library("session");
    //Nếu chưa đăng nhập
    if (!$this->session->userdata("CheckLogin")){
        redirect(base_url() . "index.php/dangnhap/view");
    }
  }
  public function index()
  {
    $this->load->model("m_admin");
    $data['countAD'] = $this->m_admin->countAll();
    $this->load->model("m_hocvien");
    $data['countHV'] = $this->m_hocvien->countAll();
    $this->load->model("m_giangvien");
    $data['countGV'] = $this->m_giangvien->countAll();
    $this->load->model("m_hoadon");
    $data['countHD'] = $this->m_hoadon->countAll();
    $this->load->model("m_khoahoc");
    $data['countKH'] = $this->m_khoahoc->countAll();
    $this->load->model("m_km");
    $data['countKM'] = $this->m_km->countAll();
    $this->load->view('admin/home_admin_view', $data); 
  }    
  // Chi tiết
  public function chitietadmin()
  {
    $this->load->model('m_admin');
    $config['base_url'] = base_url()."index.php/admin/chitietadmin";
    $config['total_rows'] = $this->m_admin->countAll();
    $config['per_page'] = 5;

    $start=$this->uri->segment(3);
    $this->load->library('pagination', $config);
    $data['arrAD']= $this->m_admin->getList($start, $config['per_page']);
    $this->load->view("admin/getlist_admin_view", $data);
  }
  public function chitiethv()
  {
    $this->load->model('m_hocvien');
    $config['base_url'] = base_url()."index.php/admin/chitiethv";
    $config['total_rows'] = $this->m_hocvien->countAll();
    $config['per_page'] = 5;

    $start=$this->uri->segment(3);
    $this->load->library('pagination', $config);
    $data['arrHV']= $this->m_hocvien->getList($start, $config['per_page']);
    $this->load->view("admin/getlist_hocvien_view", $data);
  } 
  public function chitietgv()
  {
    $this->load->model('m_giangvien');
    $config['base_url'] = base_url()."index.php/admin/chitietgv";
    $config['total_rows'] = $this->m_giangvien->countAll();
    $config['per_page'] = 2;

    $start=$this->uri->segment(3);
    $this->load->library('pagination', $config);
    $data['arrGV']= $this->m_giangvien->getList($start,$config['per_page']);
    $this->load->view("admin/getlist_giangvien_view", $data);
  }
  public function chitiethoadon()
  {
    $this->load->model('m_hoadon');
    $config['base_url'] = base_url()."index.php/admin/chitiethoadon";
    $config['total_rows'] = $this->m_hoadon->countAll();
    $config['per_page'] = 5;

    $start=$this->uri->segment(3);
    $this->load->library('pagination', $config);
    $data['arrHD']= $this->m_hoadon->getList($start, $config['per_page']);
    $this->load->view("admin/getlist_hoadon_view", $data);
  }
  public function chitietkh()
  {
    $this->load->model('m_khoahoc');
    $config['base_url'] = base_url()."index.php/admin/chitietkh";
    $config['total_rows'] = $this->m_khoahoc->countAll();
    $config['per_page'] = 5;

    $start=$this->uri->segment(3);
    $this->load->library('pagination', $config);
    $data['arrKH']= $this->m_khoahoc->getList($start, $config['per_page']);
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
    $config['base_url'] = base_url()."index.php/admin/chitietkm";
    $config['total_rows'] = $this->m_km->countAll();
    $config['per_page'] = 5;

    $start=$this->uri->segment(3);
    $this->load->library('pagination', $config);
    $data['arrKM']= $this->m_km->getList($start, $config['per_page']);
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
  public function deletebh($mabh,$MaKH){
    $this->load->model("m_baihoc");
    $this->m_baihoc->deletebh($mabh);
    redirect(base_url() . "index.php/admin/chitietbh/$MaKH/");
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
    $this->form_validation->set_rules('ten', 'Họ Tên', 'required');
    $this->form_validation->set_rules('sdt', 'Số điện thoại', 'required|numeric');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

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
      $this->load->model('m_hocvien');
      $this->m_hocvien->add( $email, $trn, $ten, $diachi, $ngaysinh, $sdt);
      echo "<script>alert('Thêm Thành Công !!!')</script>";
      $this->chitiethv();
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
      //echo validation_errors();  
      $this->themgv();
    }else{
      $config['upload_path']          = './assets/img/giangvien/';
      $config['allowed_types']        = 'gif|jpg|jpeg|png';
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('link'))
      {
          echo "<script>alert('Lỗi Upload File !!!')</script>";
          $this->themgv();
      }
      else {
      $ten = isset($_POST['ten']) ? $_POST['ten'] : "";
      $link= $this->upload->data('file_name');
      $tieude=isset($_POST['tieude']) ? $_POST['tieude'] : "";
      $tomtat= isset($_POST['tomtat']) ? $_POST['tomtat'] : "";
      $noidung=isset($_POST['noidung']) ? $_POST['noidung'] : "";
      $this->load->model('m_giangvien');
      $this->m_giangvien->add($ten, $link, $tieude, $tomtat, $noidung);
      echo "<script>alert('Thêm Thành Công !!!')</script>";
      $this-> chitietgv();
      }
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
    $this->form_validation->set_rules('ten', 'Tên', 'required');
    $this->form_validation->set_rules('tieude', 'Tiêu đề', 'required');
    $this->form_validation->set_rules('tomtat', 'Tóm tắt', 'required');
    $this->form_validation->set_rules('gia', 'Giá', 'required|numeric');
    $this->form_validation->set_rules('maad', 'Người tạo', 'required');
    if($this->form_validation->run() == FALSE){
      //echo validation_errors();  
      $this->themkh();
    }else{
      $config['upload_path']          = './assets/img/khoahoc/';
      $config['allowed_types']        = 'gif|jpg|jpeg|png';
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('link'))
      {
          echo "<script>alert('Lỗi Upload File !!!')</script>";
          $this->themkh();
      }
      else {
        $ten = isset($_POST['ten']) ? $_POST['ten'] : "";
        $tieude=isset($_POST['tieude']) ? $_POST['tieude'] : "";
        $tomtat=isset($_POST['tomtat']) ? $_POST['tomtat'] : "";
        $gia= isset($_POST['gia']) ? $_POST['gia'] : "";
        $link= $this->upload->data('file_name');
        $maad = isset($_POST['maad']) ? $_POST['maad'] : "";
        $this->load->model('m_khoahoc');
        $this->m_khoahoc->add($ten, $link, $tieude, $tomtat, $gia, $maad);
        echo "<script>alert('Thêm Thành Công !!!')</script>";
        $this-> chitietkh();
      }
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
      //echo validation_errors();  
      $this->themkm();
    }else{
      $config['upload_path']          = './assets/img/khuyenmai/';
      $config['allowed_types']        = 'gif|jpg|jpeg|png';
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('link'))
      {
          echo "<script>alert('Lỗi Upload File !!!')</script>";
          $this->themkm();
      }
      else {
      $ten = isset($_POST['ten']) ? $_POST['ten'] : "";
      $tieude=isset($_POST['tieude']) ? $_POST['tieude'] : "";
      $tomtat=isset($_POST['tomtat']) ? $_POST['tomtat'] : "";
      $link= $this->upload->data('file_name');
      $maad = isset($_POST['maad']) ? $_POST['maad'] : "";
      $this->load->model('m_km');
      $this->m_km->add($ten, $link, $tieude, $tomtat, $maad);
      echo "<script>alert('Thêm Thành Công !!!')</script>";
      $this-> chitietkm();
      }
    }
  }
  public function themhd()
  {
    $this->load->model("m_khoahoc");
    $this->load->model("m_km");
    //$str = "ONL";
    $data['kh'] = $this->m_khoahoc->getByType();
    $data['km'] = $this->m_km->getByType();
    //print_r($data);
    $this->load->view('admin/set_add_hoadon_view.php',$data);    
  }
  public function pro_themhd()
  {
    //Kiểm tra bằng form validation
    $this->load->library('form_validation');
    $this->form_validation->set_rules('ngayhd', 'Ngày hóa đơn', 'required');
    $this->form_validation->set_rules('mahv', 'Mã học viên', 'required');
    $this->form_validation->set_rules('makh', 'Mã khóa học', 'required');
    $this->form_validation->set_rules('makm', 'Mã khuyến mãi', 'required');
    $this->form_validation->set_rules('maad', 'Người tạo', 'required');
    if($this->form_validation->run() == FALSE){
      //echo validation_errors();  
      $this->themhd();
    }else{
      $ngayhd = isset($_POST['ngayhd']) ? $_POST['ngayhd'] : "";
      $mahv=isset($_POST['mahv']) ? $_POST['mahv'] : "";
      $makh=isset($_POST['makh']) ? $_POST['makh'] : "";
      $makm=isset($_POST['makm']) ? $_POST['makm'] : "";      
      $checktt=isset($_POST['checktt']) ? $_POST['checktt'] : "";
      $maad = isset($_POST['maad']) ? $_POST['maad'] : "";
      
      $this->load->model("m_khoahoc");
      $data['KH'] = $this->m_khoahoc->getByID($makh);
      $this->load->model("m_km");
      $data['KM'] = $this->m_km->getByID($makm);
      $giakh = $data['KH']['GIAKH'];
      $hs = $data['KM']['HESO'];
      $tongtien=$giakh * $hs;
      $this->load->model('m_hoadon');
      $this->m_hoadon->add($ngayhd,$tongtien, $mahv,$maad,$makm,$makh,$checktt);
      echo "<script>alert('Thêm Thành Công !!!')</script>";
      $this->chitiethoadon();
    }
  }
    
  public function thembh($MAKH)
  {
    $this->load->model("m_khoahoc");
    $data['KH'] = $this->m_khoahoc->getByID($MAKH);
    $this->load->view('admin/set_add_baihoc_view.php',$data); 
  }
  public function pro_thembh($MAKH)
  {
    //Kiểm tra bằng form validation
    $this->load->library('form_validation');
    $this->form_validation->set_rules('ten', 'Tên bài học', 'required');
    $this->form_validation->set_rules('link', 'Video', 'required');
    if($this->form_validation->run() == FALSE){
      //echo validation_errors();  
      $this->thembh($MAKH);
    }else{
      $ten = isset($_POST['ten']) ? $_POST['ten'] : "";
      $link=isset($_POST['link']) ? $_POST['link'] : "";
      $thoigian=isset($_POST['thoigian']) ? $_POST['thoigian'] : "";
      $this->load->model('m_baihoc');
      $this->m_baihoc->add($ten,$link,$thoigian,$MAKH);
      echo "<script>alert('Thêm Thành Công !!!')</script>";
      $this->chitietbh($MAKH);
    }
  }

//Sửa

  public function edit_hv($mahv){
    $this->load->model("m_hocvien");
    $data['hv'] = $this->m_hocvien->getByID($mahv);
    $this->load->view("admin/set_edit_hocvien_view", $data);
  }
  
  public function pro_edit_hv($mahv){
    //Kiểm tra bằng form validation
    $this->load->library('form_validation');
    $this->form_validation->set_rules('ten', 'Họ Tên', 'required');
    $this->form_validation->set_rules('sdt', 'Số điện thoại', 'required|numeric');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
  
    if($this->form_validation->run() == FALSE){
      $this->edit_hv($mahv);
    }else{
      $this->load->model("m_hocvien");
      $email=isset($_POST['email']) ? $_POST['email'] : "";
      $trn= isset($_POST['trn']) ? $_POST['trn'] : "";
      $ten=isset($_POST['ten']) ? $_POST['ten'] : "";
      $diachi=isset($_POST['diachi']) ? $_POST['diachi'] : "";
      $ngaysinh=isset($_POST['ngaysinh']) ? $_POST['ngaysinh'] : "";
      $sdt=isset($_POST['sdt']) ? $_POST['sdt'] : "";
      $this->m_hocvien->edit($mahv, $email, $trn, $ten, $diachi, $ngaysinh, $sdt);
      echo "<script>alert('Sửa Thành Công !!!')</script>";
      $this->chitiethv();
    }
  }
  public function edit_gv($magv){
    $this->load->model("m_giangvien");
    $data['gv'] = $this->m_giangvien->getByID($magv);
    $this->load->view("admin/set_edit_giangvien_view", $data);
  }
  
  public function pro_edit_gv($magv){
    //Kiểm tra bằng form validation
    $this->load->library('form_validation');
    $this->form_validation->set_rules('ten', 'Họ Tên', 'required');
    $this->form_validation->set_rules('tomtat', 'Tóm tắt', 'required');
    $this->form_validation->set_rules('noidung', 'Nội dung', 'required');
    if($this->form_validation->run() == FALSE){
      $this->edit_gv($magv);
    }else{
      $config['upload_path']          = './assets/img/giangvien/';
      $config['allowed_types']        = 'gif|jpg|jpeg|png';
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('link'))
      {
          echo "<script>alert('Lỗi Upload File !!!')</script>";
          $this->edit_gv($magv);
      }
      else {
      $this->load->model('m_giangvien');
      $ten = isset($_POST['ten']) ? $_POST['ten'] : "";
      $link= $this->upload->data('file_name');
      $tieude=isset($_POST['tieude']) ? $_POST['tieude'] : "";
      $tomtat= isset($_POST['tomtat']) ? $_POST['tomtat'] : "";
      $noidung=isset($_POST['noidung']) ? $_POST['noidung'] : "";
      $this->m_giangvien->edit($magv, $ten, $link, $tieude, $tomtat, $noidung);
      echo "<script>alert('Sửa Thành Công !!!')</script>";
      $this->chitietgv();
      }
    }
  }

  public function edit_km($makm){
    $this->load->model("m_km");
    $data['km'] = $this->m_km->getByID($makm);
    $this->load->view("admin/set_edit_km_view", $data);
  }
  public function pro_edit_km($makm)
  {
    //Kiểm tra bằng form validation
    $this->load->library('form_validation');
    $this->form_validation->set_rules('ten', 'Tên', 'required');
    $this->form_validation->set_rules('tieude', 'Tiêu đề', 'required');
    $this->form_validation->set_rules('tomtat', 'Tóm tắt', 'required');
    $this->form_validation->set_rules('maad', 'Người tạo', 'required');
    if($this->form_validation->run() == FALSE){ 
      $this->edit_km($makm);
    }else{
      $config['upload_path']          = './assets/img/khuyenmai/';
      $config['allowed_types']        = 'gif|jpg|jpeg|png';
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('link'))
      {
          echo "<script>alert('Lỗi Upload File !!!')</script>";
          $this->edit_km($makm);
      }
      else {
      $this->load->model('m_km');
      $ten = isset($_POST['ten']) ? $_POST['ten'] : "";
      $tieude=isset($_POST['tieude']) ? $_POST['tieude'] : "";
      $tomtat=isset($_POST['tomtat']) ? $_POST['tomtat'] : "";
      $link= $this->upload->data('file_name');
      $maad = isset($_POST['maad']) ? $_POST['maad'] : "";
      $this->m_km->edit($makm, $ten, $link, $tieude, $tomtat, $maad);
      echo "<script>alert('Sửa Thành Công !!!')</script>";
      $this->chitietkm();
      }
    }
  }
  public function edit_hd($mahd){
    $this->load->model("m_hoadon");
    $this->load->model("m_khoahoc");
    $this->load->model("m_km");
    //$str = "ONL";
    $data['hd'] = $this->m_hoadon->getByID($mahd);
    $data['kh'] = $this->m_khoahoc->getByType();
    $data['km'] = $this->m_km->getByType();
    $this->load->view("admin/set_edit_hoadon_view", $data);
  }
  public function pro_edit_hd($mahd)
  {
    //Kiểm tra bằng form validation
    $this->load->library('form_validation');
    $this->form_validation->set_rules('ngayhd', 'Ngày hóa đơn', 'required');
    $this->form_validation->set_rules('mahv', 'Mã học viên', 'required');
    $this->form_validation->set_rules('makh', 'Mã khóa học', 'required');
    $this->form_validation->set_rules('makm', 'Mã khuyến mãi', 'required');
    $this->form_validation->set_rules('maad', 'Người tạo', 'required');
    if($this->form_validation->run() == FALSE){
      //echo validation_errors();  
      $this->edit_hd($mahd);
    }else{
      $this->load->model('m_hoadon');
      $ngayhd = isset($_POST['ngayhd']) ? $_POST['ngayhd'] : "";
      $mahv=isset($_POST['mahv']) ? $_POST['mahv'] : "";
      $makh=isset($_POST['makh']) ? $_POST['makh'] : "";
      $makm=isset($_POST['makm']) ? $_POST['makm'] : "";
      $checktt=isset($_POST['checktt']) ? $_POST['checktt'] : "";
      $maad = isset($_POST['maad']) ? $_POST['maad'] : "";

      $this->load->model("m_khoahoc");
      $data['KH'] = $this->m_khoahoc->getByID($makh);
      $this->load->model("m_km");
      $data['KM'] = $this->m_km->getByID($makm);
      $giakh = $data['KH']['GIAKH'];
      $hs = $data['KM']['HESO'];
      $tongtien=$giakh * $hs;
      $this->m_hoadon->edit($mahd,$ngayhd,$tongtien,$mahv,$maad,$makm,$makh,$checktt);
      echo "<script>alert('Sửa Thành Công !!!')</script>";
      $this->chitiethoadon();
    }
  }



  public function edit_kh($makh)
  {
    $this->load->model("m_khoahoc");
    $data['kh'] = $this->m_khoahoc->getByID($makh);
    $this->load->view("admin/set_edit_khoahoc_view", $data);
  }    
  public function pro_edit_kh($makh)
  {
    //Kiểm tra bằng form validation
    $this->load->library('form_validation');
    $this->form_validation->set_rules('ten', 'Tên', 'required');
    $this->form_validation->set_rules('tieude', 'Tiêu đề', 'required');
    $this->form_validation->set_rules('tomtat', 'Tóm tắt', 'required');
    $this->form_validation->set_rules('gia', 'Giá', 'required|numeric');
    $this->form_validation->set_rules('maad', 'Người tạo', 'required');
    if($this->form_validation->run() == FALSE){
      //echo validation_errors();  
      $this->edit_kh($makh);
    }else{
      $config['upload_path']          = './assets/img/khoahoc/';
      $config['allowed_types']        = 'gif|jpg|jpeg|png';
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('link'))
      {
          echo "<script>alert('Lỗi Upload File !!!')</script>";
          $this->edit_kh($makh);
      }
      else {
      $this->load->model('m_khoahoc');
      $ten = isset($_POST['ten']) ? $_POST['ten'] : "";
      $tieude=isset($_POST['tieude']) ? $_POST['tieude'] : "";
      $tomtat=isset($_POST['tomtat']) ? $_POST['tomtat'] : "";
      $gia= isset($_POST['gia']) ? $_POST['gia'] : "";
      $link= $this->upload->data('file_name');
      $maad = isset($_POST['maad']) ? $_POST['maad'] : "";
      $this->m_khoahoc->edit($makh, $ten, $link, $tieude, $tomtat, $gia, $maad);
      echo "<script>alert('Sửa Thành Công !!!')</script>";
      $this->chitietkh();
      }
    }
  }

  public function edit_bh($MAKH,$mabh)
  {
    $this->load->model("m_khoahoc");
    $data['KH'] = $this->m_khoahoc->getByID($MAKH);
    $this->load->model("m_baihoc");
    $data['bh'] = $this->m_baihoc->getByID($mabh);
    $this->load->view('admin/set_edit_baihoc_view.php',$data); 
  }
  public function pro_edit_bh($MAKH,$mabh)
  {
    //Kiểm tra bằng form validation
    $this->load->library('form_validation');
    $this->form_validation->set_rules('ten', 'Tên bài học', 'required');
    $this->form_validation->set_rules('link', 'Video', 'required');
    if($this->form_validation->run() == FALSE){
      //echo validation_errors();  
      $this->edit_bh($MAKH,$mabh);
    }else{
      $ten = isset($_POST['ten']) ? $_POST['ten'] : "";
      $link=isset($_POST['link']) ? $_POST['link'] : "";
      $thoigian=isset($_POST['thoigian']) ? $_POST['thoigian'] : "";
      $this->load->model('m_baihoc');
      $this->m_baihoc->edit($mabh,$ten,$link,$thoigian,$MAKH);
      echo "<script>alert('Sửa Thành Công !!!')</script>";
      $this->chitietbh($MAKH);
    }
  }
  public function edit_admin($maad)
  {
    $this->load->model("m_admin");
    $data['ad'] = $this->m_admin->getByID($maad);
    $this->load->view("admin/set_edit_admin_view.php",$data); 
  }
  public function pro_edit_admin($maad){
    //Kiểm tra bằng form validation
    $this->load->library('form_validation');
    $this->form_validation->set_rules('tendn', 'Tên đăng nhập', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('pass', 'Mật khẩu', 'required');
  
    if($this->form_validation->run() == FALSE){
      $this->edit_admin($maad);
    }else{
      $this->load->model("m_admin");
      $tendn=isset($_POST['tendn']) ? $_POST['tendn'] : "";
      $email=isset($_POST['email']) ? $_POST['email'] : "";
      $ten=isset($_POST['ten']) ? $_POST['ten'] : "";
      $diachi=isset($_POST['diachi']) ? $_POST['diachi'] : "";
      $ngaysinh=isset($_POST['ngaysinh']) ? $_POST['ngaysinh'] : "";
      $sdt=isset($_POST['sdt']) ? $_POST['sdt'] : "";
      $pass=isset($_POST['pass']) ? $_POST['pass'] : "";
      $this->m_admin->edit($maad, $tendn,$email,$pass,$ten, $diachi, $ngaysinh,$sdt);
      echo "<script>alert('Sửa Thành Công !!!')</script>";
      $this->index();
    }
  }

  //Tìm kiếm
  public function searchHV(){
    if (isset($_POST['search'])){   //Nếu post khác null
      $s = $_POST['search'];  //gán $s = post theo name input search
      $this->session->set_userdata('search', $s);   //lưu $_SESSION['search'] = $s
    }else{ //Nếu k post hoặc chuyển trang 
        $s=$this->session->userdata('search');  //Gán lại $s  = session đã lưu trước đó
    }
    $s = trim(htmlspecialchars(addslashes($s)));
    $this->load->model("m_hocvien");
    $config['total_rows'] = $this->m_hocvien->countAllSearch($s);
    $config['base_url'] = base_url()."index.php/admin/searchHV";
    $config['per_page'] = 5;

    $start=$this->uri->segment(3);
    $this->load->library('pagination', $config);
    $data['arrHV']= $this->m_hocvien->getListSearch($start, $config['per_page'],$s);
    $this->load->view("admin/getlist_hocvien_view", $data);
  }

  public function searchAD(){
    if (isset($_POST['search'])){   //Nếu post khác null
      $s = $_POST['search'];  //gán $s = post theo name input search
      $this->session->set_userdata('search', $s);   //lưu $_SESSION['search'] = $s
    }else{ //Nếu k post hoặc chuyển trang 
        $s=$this->session->userdata('search');  //Gán lại $s  = session đã lưu trước đó
    }
    $s = trim(htmlspecialchars(addslashes($s)));
    $this->load->model("m_admin");
    $config['total_rows'] = $this->m_admin->countAllSearch($s);
    $config['base_url'] = base_url()."index.php/admin/searchAD";
    $config['per_page'] = 5;

    $start=$this->uri->segment(3);
    $this->load->library('pagination', $config);
    $data['arrAD']= $this->m_admin->getListSearch($start, $config['per_page'],$s);
    $this->load->view("admin/getlist_admin_view", $data);
  }

  public function searchGV(){
    if (isset($_POST['search'])){   //Nếu post khác null
      $s = $_POST['search'];  //gán $s = post theo name input search
      $this->session->set_userdata('search', $s);   //lưu $_SESSION['search'] = $s
    }else{ //Nếu k post hoặc chuyển trang 
        $s=$this->session->userdata('search');  //Gán lại $s  = session đã lưu trước đó
    }
    $s = trim(htmlspecialchars(addslashes($s)));
    $this->load->model("m_giangvien");
    $config['total_rows'] = $this->m_giangvien->countAllSearch($s);
    $config['base_url'] = base_url()."index.php/admin/searchGV";
    $config['per_page'] =2;

    $start=$this->uri->segment(3);
    $this->load->library('pagination', $config);
    $data['arrGV']= $this->m_giangvien->getListSearch($start, $config['per_page'],$s);
    $this->load->view("admin/getlist_giangvien_view", $data);
  }

  public function searchHD(){
    if (isset($_POST['search'])){   //Nếu post khác null
      $s = $_POST['search'];  //gán $s = post theo name input search
      $this->session->set_userdata('search', $s);   //lưu $_SESSION['search'] = $s
    }else{ //Nếu k post hoặc chuyển trang 
        $s=$this->session->userdata('search');  //Gán lại $s  = session đã lưu trước đó
    }
    $s = trim(htmlspecialchars(addslashes($s)));
    $this->load->model("m_hoadon");
    $config['total_rows'] = $this->m_hoadon->countAllSearch($s);
    $config['base_url'] = base_url()."index.php/admin/searchHD";
    $config['per_page'] = 5;

    $start=$this->uri->segment(3);
    $this->load->library('pagination', $config);
    $data['arrHD']= $this->m_hoadon->getListSearch($start, $config['per_page'],$s);
    $this->load->view("admin/getlist_hoadon_view", $data);
  }

  public function searchKH(){
    if (isset($_POST['search'])){   //Nếu post khác null
      $s = $_POST['search'];  //gán $s = post theo name input search
      $this->session->set_userdata('search', $s);   //lưu $_SESSION['search'] = $s
    }else{ //Nếu k post hoặc chuyển trang 
        $s=$this->session->userdata('search');  //Gán lại $s  = session đã lưu trước đó
    }
    $s = trim(htmlspecialchars(addslashes($s)));
    $this->load->model("m_khoahoc");
    $config['total_rows'] = $this->m_khoahoc->countAllSearch($s);
    $config['base_url'] = base_url()."index.php/admin/searchKH";
    $config['per_page'] = 5;

    $start=$this->uri->segment(3);
    $this->load->library('pagination', $config);
    $data['arrKH']= $this->m_khoahoc->getListSearch($start, $config['per_page'],$s);
    $this->load->view("admin/getlist_khoahoc_view", $data);
  }

  public function searchKM(){
    if (isset($_POST['search'])){   //Nếu post khác null
      $s = $_POST['search'];  //gán $s = post theo name input search
      $this->session->set_userdata('search', $s);   //lưu $_SESSION['search'] = $s
    }else{ //Nếu k post hoặc chuyển trang 
        $s=$this->session->userdata('search');  //Gán lại $s  = session đã lưu trước đó
    }
    $s = trim(htmlspecialchars(addslashes($s)));
    $this->load->model("m_km");
    $config['total_rows'] = $this->m_km->countAllSearch($s);
    $config['base_url'] = base_url()."index.php/admin/searchKM";
    $config['per_page'] = 5;

    $start=$this->uri->segment(3);
    $this->load->library('pagination', $config);
    $data['arrKM']= $this->m_km->getListSearch($start, $config['per_page'],$s);
    $this->load->view("admin/getlist_km_view", $data);
  }
  
  public function XuatHoaDon($MAHD){    
    $this->load->model("m_hoadon");
    $data['HD'] = $this->m_hoadon->getByID($MAHD);
    $MAHV = $data['HD']['MAHV'];
    $this->load->model("m_hocvien");
    $data['HV'] = $this->m_hocvien->getByID($MAHV);
    $MAKH = $data['HD']['MAKH'];
    $this->load->model("m_khoahoc");
    $data['KH'] = $this->m_khoahoc->getByID($MAKH);
    $MAKM = $data['HD']['MAKM'];
    $this->load->model("m_km");
    $data['KM'] = $this->m_km->getByID($MAKM);
    $MAAD = $data['HD']['MAAD'];
    $this->load->model("m_admin");
    $data['AD'] = $this->m_admin->getByID($MAAD);

    $this->load->view("admin/xuathoadon_view" , $data);
  }
}



  

