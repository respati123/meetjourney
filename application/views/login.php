<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/user/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/user/css/style.css'); ?>" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Playfair+Display|Ranga">
    <link href="<?php echo base_url('assets/user/css/mdb.min.css'); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  </head>
  <body style="background-color:#eeeeee ;">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 offset-sm-3" style="margin-top:12%;">
          <!--Panel-->
          <div class="card example hoverable" >
              <div class="card-block">
                <?php echo form_open('login/Auth'); ?>
                  <h4 class="flex-center card-title black-text">LOGIN</h4>
                  <hr>

                  <div class="md-form">
                      <i class="fa fa-user prefix" aria-hidden="true"></i>
                      <input type="text" id="form2" name="username" class="form-control">
                      <label for="form2">Username</label>
                  </div>
                  <div class="md-form">
                    <i class="fa fa-lock prefix" aria-hidden="true"></i>
                      <input type="password" id="form2" name="password" class="form-control">
                      <label for="form2">Password</label>
                  </div>
                  <hr style="width:50%;">
                  <div class="md-form flex-center">
                    <button type="submit" name="login" class="btn btn-primary btn-lg">Login</button>
                  </div>
                  <?php if (isset($alert)): ?>
                    <div class="md-form flex-center">
                        <p class="lead red-text"><?php echo $alert; ?></p>
                    </div>
                  <?php endif; ?>

              <?php echo form_close() ?>
              </div>
          </div>
          <!--/.Panel-->
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript" src="<?php echo base_url('assets/user/js/jquery-2.2.3.min.js'); ?>"></script>

  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url('assets/user/js/tether.min.js'); ?>"></script>

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url('assets/user/js/bootstrap.min.js'); ?>"></script>

  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url('assets/user/js/mdb.min.js'); ?>"></script>
</html>
