<?php echo $this->extend('templates/anonymous_layout'); ?>
<?php echo $this->section('content'); ?>
<div class="about-section">
  <p>This website is the practice of the course PROGRAMACIÓN WEB CON PHP.</p>
  <p>Using MAMP, CodeIgniter, file management, MVC...</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="<?= base_url('assets/images/profile_211708134_400.png') ?>" alt="Patricia" style="width:100%">
      <div class="container">
        <h2>Patricia Iturriaga</h2>
        <p class="title">Developer</p>
        <p>Telecommunication Engineer with experience in Quality Assurance.</p>
        <p>iturriaga.patricia@icloud.com</p>
        <p><button class="btn btn-contact">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="assets/images/profile_default_400.png" alt="Patricia" style="width:100%">
      <div class="container">
        <h2>Unassigned</h2>
        <p class="title">QA Engineer</p>
        <p><button class="btn btn-contact">Contact</button></p>
      </div>
    </div>
  </div>
</div>
<?php echo $this->endSection(); ?>