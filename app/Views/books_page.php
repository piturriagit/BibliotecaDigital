<?php echo $this->extend('templates/anonymous_layout'); ?>
<?php echo $this->section('content'); ?>
<a class="btn btn-new" href="<?= base_url('books/new'); ?>">Add New Book</a>
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
                <td><?php echo $book['published_year']; ?></td>
                <td><?php echo $book['path']; ?></td>
                <td><?php echo $book['created_at']; ?></td>
                <td><?php echo $book['updated_at']; ?></td>
                <td><?php echo $book['deleted_at']; ?></td>
                <td>
                    <a class="btn btn-edit" href="<?= base_url("books/edit/{$book['id']}"); ?>">Edit</a>
                    <a class="btn btn-danger" href="<?= base_url("books/delete/{$book['id']}"); ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
</tbody>
</table>
<?php echo $this->endSection(); ?>