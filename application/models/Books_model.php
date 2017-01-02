<?php
//application/models/Books_model.php
class Books_model extends CI_Model
{
  public $id;
  public $book_title;
  public $author_name;
  public $type;



	public function create()
	{
		$this->db->insert("books",array(
			'id'=>$this->id,
			'book_title'=>$this->book_title,
			'author_name'=>$this->author_name,
			'type'=>$this->type,
			)
		);
    return true;
	}


	public function get()
	{
    //equal as 'select * from books'
		$q = $this->db->get("books");
		return $q->result();
	}

  public function show($id)
	{
    //equal as 'select * from books where id = $id'
		$q = $this->db->get_where("books",array('id'=>$id));
		return $q->result();
	}


	public function update()
	{
		$this->db->where("id",$this->id);
		$this->db->update("books",array(
			'book_title'=>$this->book_title,
			'author_name'=>$this->author_name,
			'type'=>$this->type,
			)
		);
	}


	public function delete()
	{
		$this->db->where("id",$this->id);
		$this->db->delete("books");
	}


	//add your custom code here.....



}

 //end of file
 //application/model/books_model.php
