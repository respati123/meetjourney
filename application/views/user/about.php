<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MeetJourney</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/user/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url('assets/user/css/mdb.min.css'); ?>" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo base_url('assets/user/css/style.css'); ?>" rel="stylesheet">
    <!-- Template styles -->
    <script type="text/javascript">
       (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <style rel="stylesheet">
    /* TEMPLATE STYLES */
    /* Necessary for full page carousel*/
    
    html,
    body {
        height: 100%;
    }
    /* Navigation*/
    
    .navbar {
        background-color: #1a237e;
    }
    
    .top-nav-collapse {
        background-color: #1a237e;
    }
    
    footer.page-footer {
        background-color: #4285F4;
    }
    
    @media only screen and (max-width: 768px) {
        .navbar {
            background-color: #4285F4;
        }
    }
    /* Carousel*/
    
    .carousel {
        height: 50%;
    }
    
    @media (max-width: 776px) {
        .carousel {
            height: 100%;
        }
    }
    
    .carousel-item,
    .active {
        height: 100%;
    }
    
    .carousel-inner {
        height: 100%;
    }
    
    .carousel-item:nth-child(1) {
        background-image: url("http://mdbootstrap.com/images/slides/slide%20(6).jpg");
        background-repeat: no-repeat;
        background-size: cover;
        opacity: 0.4;
    }
    
    .carousel-item:nth-child(2) {
        background-image: url("http://mdbootstrap.com/images/slides/slide%20(11).jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    
    .carousel-item:nth-child(3) {
        background-image: url("http://mdbootstrap.com/images/slides/slide%20(7).jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    /*Caption*/
    
    .flex-center {
        color: #fff;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <p class="nav-link" style="margin-bottom:0px;"><i class="fa fa-phone-square"></i> +6281290265790 | tyorespati@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-8">
                    <ul class="nav navbar-nav pull-right">
                        <li class="nav-item" style="margin-right: 8px;">
                            <a type="button" style="background-color:#283593;" data-toggle="tooltip" data-placement="top" title="facebook" class="btn-floating btn-large btn-fb"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="nav-item" style="margin-right: 8px;">
                            <a type="button" style="background-color:#64b5f6;" data-toggle="tooltip" data-placement="top" title="twitter" class="btn-floating btn-large btn-tw"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="nav-item" style="margin-right: 8px;">
                            <a type="button" style="background-color:#f44336;" data-toggle="tooltip" data-placement="top" title="Instagram" class="btn-floating btn-large btn-ins"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr style="margin-top:1px; background-color:#fff;">
        </div>
    
        
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
            <i class="fa fa-bars"></i>
        </button>
        <div class="container">
            <!--Collapse content-->
            <div class="collapse navbar-toggleable-xs" id="collapseEx">
                <!--Navbar Brand-->
                <a href="<?php echo base_url(); ?>" class="navbar-brand">
                    <img src="<?php echo base_url('assets/img/image/logo.png'); ?>" alt="" style="width:120px; height:40px;" />
                </a>
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>">News <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('konten'); ?>">Contents</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('about'); ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('contact'); ?>">Contact</a>
                    </li>
                </ul>
                <!--Search form-->
            </div>
            <!--/.Collapse content-->
        </div>
    </nav>
    <!--/.Navbar-->
    <!-- Content Last Update -->
    <div class="container-fluid" style="margin-top: 150px">
        <div class="col-sm-12">
            <div class="row">
                Laurie is lost in Userland. She knows where she is, or where she's going, but maybe not at the same time. The only way out is through Jargon-infested swamps, gates guarded by perfect logic, and the perils of breakfast time at the Philosopher's Diner. With just her wits and the help of a lizard who thinks he's a dinosaur, Laurie has to find her own way home.

                “Inspiring students to become the developers, engineers, and innovators who will create solutions to some of the Nation's toughest challenges."
            </div>
            <!--- row -- >
        </div><!-- col-sm-12-->
    </div>
    </div>
    <!-- container-fluid-->
    <footer id="footer" class="page-footer center-on-large-only">
        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">
                <!--First column-->
                <div class="col-md-3 offset-md-1">
                    <img src="<?php echo base_url('assets/img/image/logo.png') ?>" alt="logo" class="img-fluid" />
                </div>
                <!--/.First column-->
                <hr class="hidden-md-up">
                <!--Second column-->
                <div class="col-md-3 offset-md-1">
                    <img src="<?php echo base_url('assets/img/image/logo.png') ?>" alt="logo" class="img-fluid" style="width:130px; height:40px;" />
                    <p class="lead" style="margin-bottom: 0px;">
                        HEAD OFFICE
                    </p>
                    <p style="margin-bottom:2px;" class="text-muted white-text">Jalan Raya Bekasi</p>
                    <p style="margin-bottom:2px;" class="text-muted white-text">Phone : +12312334</p>
                </div>
                <!--/.Second column-->
                <hr class="hidden-md-up">
                <!--Third column-->
                <div class="col-md-3">
                    <ul>
                        <li><a href="<?php echo base_url(); ?>">News</a></li>
                        <li><a href="<?php echo base_url('konten'); ?>">Contents</a></li>
                        <li><a href="<?php echo base_url('about'); ?>">About</a></li>
                        <li><a href="<?php echo base_url('contact'); ?>">Contact</a></li>
                    </ul>
                </div>
                <!--/.Third column-->
            </div>
        </div>
        <!--/.Footer Links-->
        <div class="footer-copyright">
            <div class="container-fluid">
                 CopyRight 2016 MeetJourney | All Rights Reserved | PT. ABBIFAM TEKNOLOGI UTAMA
            </div>
        </div>
        <!--/.Copyright-->
    </footer>
    <!-- /Start your project here-->
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="<?php echo base_url('assets/user/js/jquery-3.1.1.min.js'); ?>"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo base_url('assets/user/js/tether.min.js'); ?>"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url('assets/user/js/bootstrap.min.js'); ?>"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url('assets/user/js/mdb.min.js'); ?>"></script>
</body>

</html>
