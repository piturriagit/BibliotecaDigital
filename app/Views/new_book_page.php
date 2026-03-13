<?php echo $this->extend('templates/anonymous_layout'); ?>
<?php echo $this->section('content'); ?>
    <form action="<?= base_url('books/create'); ?>" method="post">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="published_year">Published Year:</label>
            <input type="number" class="form-control" id="published_year" name="published_year" min="0" max="<?= date('Y'); ?>">
        </div>
        <div class="form-group">
            <label for="path">Path:</label>
            <input type="text" class="form-control" id="path" name="path" value="books/fake_book.pdf" required>
        </div>
        <button type="submit" class="btn btn-new">Create Book</button>
    </form>
<?php echo $this->endSection(); ?>