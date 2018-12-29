<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class KM extends CI_Controller {
    public function khuyenmai()
    {
      $this->load->view('site/km_view.php');
    }    
}