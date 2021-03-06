<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title; ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/common/css/bootstrap.min.css"> 

        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/common/css/font-awesome.min.css">

        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/ionicons.min.css">
        
        <!--jQuery UI CSS-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jquery-ui-1.12.0-rc.2/jquery-ui.min.css" />
        
        <!--Bootstrap Switch-->
        <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/bootstrap-switch-master/dist/css/bootstrap3/bootstrap-switch.min.css' ?>" />
        
        <!-- Bootstrap Tags input-->
        <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css' ?>" />
        <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput-typeahead.css' ?>" />

        <!-- Theme and color style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/AdminLTE.min.css">

        <!--Custom Styling CSS-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/style.css">

        <!--jQuery 2.2.1 JS-->
        <script src="<?php echo base_url('assets/common/js/jquery-2.2.1.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jQueryUI/jquery-ui.min.js"></script>

        <!-- JS for Old Browsers-->
        <!--[if lt IE 9]>
            <script src="<?php echo base_url(); ?>assets/admin/js/html5shiv.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/admin/js/respond.min.js"></script>
        <![endif]-->

        <script>
            base_url = "<?php echo base_url(); ?>";
            required_flag = '';
        </script>
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="<?= base_url(); ?>admin" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>CAAB</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin Panel</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                     
                                    <span class="hidden-xs"><?= $username; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image --> 
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo base_url(); ?>admin/profile" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                        </ul>
                    </div>
                </nav>
            </header> 