<?php
//application/models/Books_model.php
class Books_model extends CI_Model
{

	private $id;
	private $book_title;
	private $author_name;
	private $type;


//set prop values


	public function set_id($val)
	{
		$this->id = $val;
		return $this;
	}

	public function set_book_title($val)
	{
		$this->book_title = $val;
		return $this;
	}

	public function set_author_name($val)
	{
		$this->author_name = $val;
		return $this;
	}

	public function set_type($val)
	{
		$this->type = $val;
		return $this;
	}


//get prop values

	public function get_id()
	{
		return $this->id;
	}

	public function get_book_title()
	{
		return $this->book_title;
	}

	public function get_author_name()
	{
		return $this->author_name;
	}

	public function get_type()
	{
		return $this->type;
	}

	public function create()
	{
		$this->db->insert("books",array(
			'id'=>$this->id,
			'book_title'=>$this->book_title,
			'author_name'=>$this->author_name,
			'type'=>$this->type,
			)
		);
	}


	public function get()
	{
		$q = $this->db->get("books");
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
