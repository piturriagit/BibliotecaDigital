<?php echo $this->extend('templates/anonymous_layout'); ?>
<?php echo $this->section('content'); ?>
<a class="btn btn-new" href="<?= base_url('books/upload'); ?>">Add New Book</a>
<input type="text" id="searchInput" onkeyup="myFunction()" placeholder="Search for names..">
<table id="myTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Description</th>
            <th>Published Year</th>
            <th>Path</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Deleted At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php  if (empty($books)): ?>
            <tr>
                <td colspan="10">No books found.</td>
            </tr>
        <?php endif; ?>
        <?php foreach ($books as $book): ?>
            <tr>
                <td><?php echo $book['id']; ?></td>
                <td><?php echo $book['title']; ?></td>
                <td><?php echo $book['author']; ?></td>
                <td><?php echo $book['description']; ?></td>
                <td><?php echo $book['published_year'] ?: ''; ?></td>
                <td><?php echo $book['path']; ?></td>
                <td><?php echo $book['created_at']; ?></td>
                <td><?php echo $book['updated_at']; ?></td>
                <td><?php echo $book['deleted_at']; ?></td>
                <td>
                    <a class="btn btn-edit" href="<?= base_url("books/".$book['id']."/edit"); ?>">Edit</a>
                    <form id="deleteForm" action="<?= base_url("books/".$book['id']); ?>" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this book?');">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
</tbody>
</table>
<?php echo $this->endSection(); ?>
<?php echo $this->section('scripts'); ?>
    <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<?php echo $this->endSection(); ?>