<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class ThanhToan extends CI_Controller {
    public function ttoan()
    {
      $this->load->view('site/thanhtoan_view.php');
    }    
}