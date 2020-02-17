<!DOCTYPE html>
<?php
error_reporting(0);
$user_id = $this->session->userdata('user_id');

if (!$user_id) {

	redirect('login');
}

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

    <!-- App title -->
    <title>Uplon - Responsive Admin Dashboard Template</title>


    <!-- Switchery css -->
    <link href="<?php echo base_url(); ?>assets/plugins/switchery/switchery.min.css" rel="stylesheet" />



