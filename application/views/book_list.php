<?php echo $this->session->flashdata('msg');?>
<h1>Book List</h1>
<p>

</p>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Author</th>
            <th>Type</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody>
      <?php
      //loop books data
foreach ($books as $book) {
  # code...
  echo '  <tr>
        <td>'.$book->id.'</td>
        <td>'.$book->book_title.'</td>
        <td>'.$book->author_name.'</td>
        <td>'.$book->type.'</td>
        <td>'.anchor('books/detail/'.$book->id,'Show').'
        '.anchor('books/edit/'.$book->id,'Edit').'
        '.anchor('books/delete/'.$book->id,'Delete').'
        </td>
    </tr>';
}
       ?>
    </tbody>

</table>

<br>
<?php
echo anchor('books/add','Add new item') ?>
