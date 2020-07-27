<?php session_start(); ?>
<?php if(session_destroy()){ 
 header('location:..\index.php');
 } ?>