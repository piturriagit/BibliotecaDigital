<?php echo $this->extend('templates/anonymous_layout'); ?>
<?php echo $this->section('content'); ?>
<div style="overflow-x:auto;">
    <button class="btn btn-new" onclick="window.location.href='<?php echo site_url('books/new'); ?>'">Add New Book</button>
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
            <tr>
                <td>1</td>
                <td>The Great Gatsby</td>
                <td>F. Scott Fitzgerald</td>
                <td>A novel set in the Roaring Twenties, exploring themes of wealth, love, and the American Dream.</td>
                <td>1925</td>
                <td>/books/the-great-gatsby.pdf</td>
                <td>2024-06-01 12:00:00</td>
                <td>2024-06-01 12:00:00</td>
                <td></td>
                <td>
                    <button class="btn btn-edit">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>To Kill a Mockingbird</td>
                <td>Harper Lee</td>
                <td>A story of racial injustice and moral growth in the Deep South during the 1930s.</td>
                <td>1960</td>
                <td>/books/to-kill-a-mockingbird.pdf</td>
                <td>2024-06-01 12:00:00</td>
                <td>2024-06-01 12:00:00</td>
                <td></td>
                <td>
                    <button class="btn btn-edit">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
                
            <?php $books=[];if (empty($books)): ?>
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
                        <button class="btn btn-edit">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            <?php endforeach; ?>
    </tbody>
    </table>
</div>
<?php echo $this->endSection(); ?>