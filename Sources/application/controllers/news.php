<?php
class News extends CI_Controller
{
    public function __construct() {
        parent::__construct();
    }

    function news_list()
    {
        // Load model
        $this->load->model('new_model');
  
        // Gọi function trong model
        $news_list = $this->new_model->getList();
    }
    public function index(){
        // $this->load->view('site/home_site_view');
        echo 'Đây là trang chủ';
    }
}
?>