<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/AdminLTEv2.4.2/bower_components/bootstrap/dist/css/bootstrap.min.css<?php echo "?v=" . $this->config->item("script_version"); ?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/AdminLTEv2.4.2/bower_components/font-awesome/css/font-awesome.min.css<?php echo "?v=" . $this->config->item("script_version"); ?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/AdminLTEv2.4.2/bower_components/Ionicons/css/ionicons.min.css<?php echo "?v=" . $this->config->item("script_version"); ?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/AdminLTEv2.4.2/dist/css/AdminLTE.min.css<?php echo "?v=" . $this->config->item("script_version"); ?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/AdminLTEv2.4.2/dist/css/skins/_all-skins.min.css<?php echo "?v=" . $this->config->item("script_version"); ?>">
        <!-- Morris chart -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/AdminLTEv2.4.2/bower_components/morris.js/morris.css<?php echo "?v=" . $this->config->item("script_version"); ?>">
        <!-- jvectormap -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/AdminLTEv2.4.2/bower_components/jvectormap/jquery-jvectormap.css<?php echo "?v=" . $this->config->item("script_version"); ?>">
        <!-- Date Picker -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/AdminLTEv2.4.2/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css<?php echo "?v=" . $this->config->item("script_version"); ?>">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/AdminLTEv2.4.2/bower_components/bootstrap-daterangepicker/daterangepicker.css<?php echo "?v=" . $this->config->item("script_version"); ?>">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/AdminLTEv2.4.2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css<?php echo "?v=" . $this->config->item("script_version"); ?>">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/AdminLTEv2.4.2/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css<?php echo "?v=" . $this->config->item("script_version"); ?>">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/app.css<?php echo "?v=" . $this->config->item("script_version"); ?>">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        
        <!-- Scripts -->  
        <?php $this->load->view('site/layout/scripts'); ?>
        
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <!-- Header -->  
            <?php $this->load->view('site/layout/header'); ?>
            <!-- Left Sidebar -->  
            <?php $this->load->view('site/layout/sidebar_left'); ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <?php $this->load->view($main_content); ?>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Footer -->  
            <?php $this->load->view('site/layout/footer'); ?>
            <!-- Right Sidebar -->  
            <?php $this->load->view('site/layout/sidebar_right'); ?>

        </div>
        <!-- ./wrapper -->


    </body>
</html>
