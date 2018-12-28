<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class Admin extends CI_Controller {
    public function index()
    {
      $this->load->view('admin/home_admin_view');
    }    

  public function chitiethv()
  {
    $this->load->model('m_hocvien');
    
    $data['arrHV'] = $this->m_hocvien->getListAll();
    //print_r($data);
    $this->load->view('admin/getlist_hocvien_view', $data);
  }   
  public function chitietkh()
    {
      $this->load->model('m_khoahoc');
      
      $data['arrKH'] = $this->m_khoahoc->getListAll();
      //print_r($data);
      $this->load->view('admin/getlist_khoahoc_view', $data);
    }  
    public function chitiethoadon()
    {
      $this->load->model('m_hoadon');
      
      $data['arrHD'] = $this->m_hoadon->getListAll();
      //print_r($data);
      $this->load->view('admin/getlist_hoadon_view', $data);
    } 
    public function chitietkm()
    {
      $this->load->model('m_km');
      
      $data['arrKM'] = $this->m_km->getListAll();
      //print_r($data);
      $this->load->view('admin/getlist_km_view', $data);
    } 
    public function themkhoahoc()
    {
      $this->load->view('admin/set_add_khoahoc_view.php');
    }    
    public function themkm()
    {
      $this->load->view('admin/set_add_km_view.php');
    }
}