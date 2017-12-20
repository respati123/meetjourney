<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Administrator</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('/assets/admin/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/admin/css/custom.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/admin/css/normalize.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/admin/css/sidebar.css'); ?>" rel="stylesheet">
    <link href="assets/admin/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/source/jquery.fancybox.css'); ?>">  
    <link rel="stylesheet" href="<?php echo base_url('/assets/admin/css/bootstrap.min.css') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('/assets/admin/datatables/dataTables.bootstrap.css') ?>"/>
    <script type="text/javascript" src="<?php echo base_url('/editor/tinymce/tinymce.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/editor/tinymce/config.js'); ?>"></script>
    
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-default navbar-fixed-top no-margin">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header fixed-brand">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><i class="fa fa-linux fa-4"></i> MeetJourney</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle profile-image" data-toggle="dropdown">
              <img src="<?php echo $this->session->userdata('foto'); ?>" class="img-avatar-circle"> <b><?php echo $this->session->userdata('nama_user'); ?></b><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-cog"></i> Account</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-sign-out"></i> Sign-out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav nav-pills nav-stacked" id="menu">

                <li>
                    <a href="<?php echo base_url('Admin'); ?>">
                       <b>Beranda</b>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('artikel'); ?>">
                      <b>Artikel</b>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('iklan'); ?>">
                      <b>Iklan</b>
                    </a>
                </li>
                <?php if($this->session->userdata('level')=='admin'){ ?>
                    <li>
                        <a href="<?php echo base_url('User'); ?>">
                          <b>Users</b>
                        </a>
                    </li>

                 <?php  }  ?>
               
            </ul>
        </div><!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid xyz">
                <div class="row">

                    <?php echo $contents; ?>

                </div>
              </div>
            </div>
          </div>
      </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="<?php echo base_url('/assets/admin/js/jquery.min.js'); ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('/assets/admin/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/admin/js/sidebar.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/admin/js/jquery-1.11.2.min.js') ?>"></script>
    <script src="<?php echo base_url('/assets/admin/datatables/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('/assets/admin/datatables/dataTables.bootstrap.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/assets/source/jquery.fancybox.pack.js'); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#mytable").dataTable();
            $(".fancybox").fancybox({
              'width'  : 900,           // set the width
              'height' : 600,           // set the height
              'type'   : 'iframe',
              'autoSize' : false,
            });
        });

    </script>



  </body>
</html>
