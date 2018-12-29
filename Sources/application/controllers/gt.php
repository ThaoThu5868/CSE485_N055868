<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class GT extends CI_Controller {
    public function gioithieu()
    {
      $this->load->view('site/gt_view.php');
    }    
}