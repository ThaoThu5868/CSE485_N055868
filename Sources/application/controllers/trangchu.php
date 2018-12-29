<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class TrangChu extends CI_Controller {

  public function index()
  {
    $this->tchu();
  } 

    public function tchu()
    {
      $this->load->view('site/trangchu_view.php');
    }    
}