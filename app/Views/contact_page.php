<?php echo $this->extend('templates/anonymous_layout'); ?>
<?php echo $this->section('content'); ?>  
<form action="mailto:someone@example.com?subject=[bibliotecadigital]%20Feedback" method="post" enctype="text/plain">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px" required></textarea>
    <input class="btn btn-submit" type="submit" value="Send">
</form>
<?php echo $this->endSection(); ?>