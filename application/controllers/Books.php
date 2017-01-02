<?php

class Books extends CI_Controller{

  public function index(){
    //load books_model
    $this->load->model('books_model');
    //calling get method from books_model class
    $books = $this->books_model->get();

    $this->load->view('book_list',
    //pass $books variable to book_list model
    array('books' => $books )
  );
  }

  public function add(){
    //load books_model
    $this->load->model('books_model');

  }

}
