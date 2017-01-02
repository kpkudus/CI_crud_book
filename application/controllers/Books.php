<?php

class Books extends CI_Controller{

  public function index(){
    $this->load->view('book_list');
  }

}
