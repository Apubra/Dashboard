<?php
error_reporting(0);
$user_email = $this->session->userdata('user_email');

if (!$user_email) {

	redirect('login');
}

?>
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- App CSS -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- Modernizr js -->
    <script src="<?php echo base_url(); ?>assets/js/modernizr.min.js"></script>

</head>

<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <?php require 'topbar.php';?>

    <?php require 'leftbar.php';?>



