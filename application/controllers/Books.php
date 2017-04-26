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

  public function edit($book_id){
    $this->load->model('books_model');
    if($this->input->post()){
          //load books_model
    //set data
    $this->books_model->id = $book_id;
    $this->books_model->book_title= $this->input->post('book_title');
    $this->books_model->author_name= $this->input->post('author_name');
    $this->books_model->type= $this->input->post('type');
    //save data
    $this->books_model->update();
      $this->session->set_flashdata('msg', 'Data saved');
      redirect('/books/detail/'.$book_id);
    
    }else{
    $book = $this->books_model->show($book_id);
    $this->load->view('book_edit',
      array('book'=>$book)
    );
    }
  }

   public function detail($book_id){
    $this->load->model('books_model');

    $book = $this->books_model->show($book_id);
    $this->load->view('book_detail',
      array('book'=>$book)
    );
    
  }

  public function delete($book_id){
    $this->load->model('books_model');

    $this->books_model->id = $book_id;
    $this->books_model->delete();
    redirect('books');
    
  }

}
