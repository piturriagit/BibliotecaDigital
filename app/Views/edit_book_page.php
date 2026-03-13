<?php echo $this->extend('templates/anonymous_layout'); ?>
<?php echo $this->section('content'); ?>
<?php if (session()->getFlashdata('errors') !== null): ?>
    <div class="alert">
        <ul>
        <?php foreach (session()->getFlashdata('errors') as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
    <form action="<?= base_url('books/'.$book['id']); ?>" method="post">
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="text" class="form-control" id="id" name="id" value="<?= $book['id'] ?>" readonly tabindex="-1">
        </div>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="<?= $book['title'] ?>" required>
        </div>
        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" class="form-control" id="author" name="author" value="<?= $book['author'] ?>">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description"><?= $book['description'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="published_year">Published Year:</label>
            <input type="number" class="form-control" id="published_year" name="published_year" min="0" max="<?= date('Y'); ?>" value="<?= $book['published_year'] ?>">
        </div>
        <div class="form-group">
            <label for="path">Path:</label>
            <input type="text" class="form-control" id="path" name="path" value="<?= $book['path'] ?>" required>
        </div>
        <button type="cancel" class="btn btn-cancel" onclick="window.history.back(); return false;">Cancel</button>
        <button type="submit" class="btn btn-edit">Update Book</button>
    </form>
<?php echo $this->endSection(); ?>