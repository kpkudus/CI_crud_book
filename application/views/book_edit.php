<h1>Add new book</h1>

<?php
echo anchor('books','<< back to book list');
echo form_open('');
?>
<br>
<div class="">
  <div class="">
    <label for="book_title">book title</label>
  </div>
  <input type="text" name="book_title" id="book_title" value="<?php echo $book->book_title ?>">
</div>
<div class="">
  <div class="">
    <label for="author_name">author name</label>
  </div>
  <input type="text" name="author_name" id="author_name"  value="<?php echo $book->author_name ?>">
</div>
<div class="">
  <div class="">
    <label for="type">Type</label>
  </div>
  <?php echo form_dropdown('type', array('Novel'=>'Novel','History'=>'History','Biography'=>'Biography','Science'=>'Science'), $book->type);?>
</div>
<div class="">
  <br>
  <input type="submit" name="name" value="Submit">
</div>
<?php
echo form_close(); ?>
