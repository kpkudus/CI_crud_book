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
    $this->load->view('book_add');

  }

  public function create(){
    //load books_model
    $this->load->model('books_model');
    //set data
    $this->books_model->book_title= $this->input->post('book_title');
    $this->books_model->author_name= $this->input->post('author_name');
    $this->books_model->type= $this->input->post('type');
    //save data
    if($this->books_model->create()){
      $this->session->set_flashdata('msg', 'Data saved');
      redirect('/books');
    }

  }

}
