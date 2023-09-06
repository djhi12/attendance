<!-- Header -->
<?php
$title = 'Success Page';
require_once 'includes/header.php'

?>


<!-- Main Content -->
<div class="container">
    <h1>You have been registered!</h1>
    <div class="card">
        <h4><b><?php echo $_GET['firstName'] . ' ' . $_GET['lastName'];  ?></b></h4>
        <p>Specialty: <?php echo $_GET['specialty']; ?></p>
        <p>Date of Birth: <?php echo $_GET['dob']; ?></p>
        <p>Email: <?php echo $_GET['email']; ?></p>
        <p>Contact: <?php echo $_GET['contact'] ?></p>
    </div>

</div>


<!-- Footer -->
<?php

require_once 'includes/footer.php'

?>