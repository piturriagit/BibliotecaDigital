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
    <form action="<?= base_url('books/upload'); ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="form-group">
            <label for="file">File:</label>
            <input type="file" class="form-control" id="file" name="file" accept=".pdf,.epub" required>
        </div>
        <button type="cancel" class="btn btn-cancel" onclick="window.history.back(); return false;">Cancel</button>
        <button type="submit" class="btn btn-new">Next</button>
    </form>
<?php echo $this->endSection(); ?>