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
    <form action="<?= base_url('books'); ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="form-group">
            <div class="form-group">
            <label for="path">Path:</label>
            <input type="text" class="form-control" id="path" name="path" value="<?= $filepath ?>" readonly>
        </div>
        <div class="form-group">
            <label for="path">Size:</label>
            <input type="text" class="form-control" id="filesize" name="filesize" value="<?= $filesize . ' bytes' ?>" readonly>
        </div>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="<?= old('title') ?? $filename ?>" required>
        </div>
        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" class="form-control" id="author" name="author" value="<?= old('author') ?>">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description"><?= old('description') ?></textarea>
        </div>
        <div class="form-group">
            <label for="published_year">Published Year:</label>
            <input type="number" class="form-control" id="published_year" name="published_year" min="0" max="<?= date('Y'); ?>" value="<?= old('published_year') ?>">
        </div>
        <button type="cancel" class="btn btn-cancel" onclick="window.history.back(); return false;">Cancel</button>
        <button type="submit" class="btn btn-new">Create Book</button>
    </form>
<?php echo $this->endSection(); ?>