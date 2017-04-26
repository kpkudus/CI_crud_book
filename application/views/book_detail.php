
<?php
echo anchor('books','<< back to book list');
?>

<h1><?php echo $book->book_title?></h1>
<p>Author</p>
<h3><?php echo $book->author_name ?></h3>
<p>Type</p>
<h3><?php echo $book->type ?></h3>