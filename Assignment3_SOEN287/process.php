<?php
// ------------------------------------------------------------------------------
// Assignment 3 Question 1
// Written by: Gregory Alexis John (ID. 40041536)
// For SOEN 287 Section (CC) – Summer 2019
// -----------------------------------------------------------------------------
$title="Registeration Successful";
$error=0; //To assign the specific message.
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"/>
    <title><?php echo $title; ?></title></head>
<body> <!--Checks for the error number and displays the respective message. It keeps switching in and out of PHP and HTML. -->
<h1><?php echo $title; ?></h1>
<?php if ( $error==0 ) {?>
    <p>Hello
        <?php echo $_POST['full_name']; ?>
        , it is our great pleasure to welcome you to our site.</p>
    <p>We have your email address,
        <?php echo $_POST['user_email']; ?>,
        and we will contact you shortly.</p>
<?php } ?>
</body></html>
