<h1>Add new book</h1>

<?php
echo anchor('books','<< back to book list');
echo form_open('books/create');
?>
<br>
<div class="">
  <div class="">
    <label for="book_title">book title</label>
  </div>
  <input type="text" name="book_title" id="book_title" value="">
</div>
<div class="">
  <div class="">
    <label for="author_name">author name</label>
  </div>
  <input type="text" name="author_name" id="author_name" value="">
</div>
<div class="">
  <div class="">
    <label for="type">Type</label>
  </div>
  <select class="" name="type" id="type">
    <option value="Novel"> Novel </option>
    <option value="History"> History </option>
    <option value="Biography"> Biography </option>
    <option value="Science"> Science </option>
  </select>
</div>
<div class="">
  <br>
  <input type="submit" name="name" value="Submit">
</div>
<?php
echo form_close(); ?>
