<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class ThongTin extends CI_Controller {
    public function ttin()
    {
    	
      $this->load->view('site/thongtin_view.php');
    }    
}