<?php

global $title; // Try to avoid globals, as they are harder to troubleshoot and track through your application.
$title = 'PHP Homepage'; // $GLOBALS['title'] = 'PHP Homepage';
include 'templates/header.php';
?>

  <h1><?php echo $title; ?></h1>

  <?php include 'templates/navigation.php'; ?>

  <h2>API USING PHP</h2>
 

<?php include 'templates/footer.php';