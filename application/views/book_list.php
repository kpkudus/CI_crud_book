
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
    </tr>';
}
       ?>
    </tbody>

</table>
