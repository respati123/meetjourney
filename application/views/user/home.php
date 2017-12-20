
<br>
<!-- Content Last Update -->
<div class="container-fluid">
  <div class="col-sm-12">
    <div class="row">
      <div class="col-xs-8 col-sm-9">
        <h2 class="text-xs-center" style="font-family: 'Oswald', sans-serif;">Terbaru</h2>
        <hr class="default" style="width:10%; background-color:#4285F4;">
        <!--Carousel Wrapper-->
        <?php foreach ($terbaru as $terbaru): ?>
          
        <div class="col-xs-8 col-sm-4">
          <div class="card example hoverable">

            <!--Card image-->
            <a href="<?php echo base_url('home/read/'.url_title($terbaru->title).'.html'); ?>">
              <img class="img-fluid" src="<?php echo $terbaru->foto_konten; ?>" alt="Card image cap">
            </a>
              <!--/.Card image-->

              <!--Card content-->
              <div class="card-block">
                  <!--Title-->
                  <a href="<?php echo base_url('home/read/'.url_title($terbaru->title).'.html'); ?>">
                    <h4 class="card-title"><b><?php echo ucwords($terbaru->title) ?></b></h4>
                  </a>
                  <div class="col-xs-12" style="padding:0px;">
                    <div class="col-xs-6" style="padding:0px;">
                      <p><small class="text-muted"><?php echo $terbaru->tanggal ?></small></p>
                    </div>
                    <div class="col-xs-6" style="padding:0px;">
                      <p class="pull-right">
                        <small class="text-muted"><i class="fa fa-eye"></i>   <?php echo $terbaru->lihat ?></small>
                        <small class="text-muted"><i class="fa fa-share"></i>   <?php echo $terbaru->share ?></small>
                      </p>
                    </div>
                  </div>
                  <!--Text-->
                  <p class="card-text"><?php echo $terbaru->subtitle ?></p>
                  <a href="<?php echo base_url('home/read/'.url_title($terbaru->title).'.html'); ?>" class="btn btn-primary">Read More</a>
                  
              </div>
              <!--/.Card content-->

          </div>
        </div> 
        <?php endforeach ?>
        
        
    
        <br>
      </div><!-- col9-->
      <div class="col-xs-4 col-sm-3">
        <h2 class="text-xs-center" style="font-family: 'Oswald', sans-serif;">Terpopuler</h2>
        <hr class="default" style="width:10%; background-color:#4285F4;">
        <?php foreach ($terpopuler as $terpopuler): ?>
          
        <div class="card example hoverable">

            <!--Card image-->
            <a href="<?php echo base_url('home/read/'.url_title($terpopuler->title).'.html'); ?>">
              <img class="img-fluid" src="<?php echo $terpopuler->foto_konten; ?>" alt="Card image cap">
            </a>
            <!--/.Card image-->

            <!--Card content-->
            <div class="card-block">
                <!--Title-->

                <a href="<?php echo base_url('home/read/'.url_title($terpopuler->title).'.html'); ?>">
                  <h4 class="card-title"><b><?php echo ucwords($terpopuler->title) ?></b></h4>
                </a>
                <a href="<?php echo base_url('home/read/'.url_title($terpopuler->title).'.html'); ?>" class="btn btn-primary">Read More</a>
            </div>
            <!--/.Card content-->

        </div>
        <?php endforeach ?>
      </div><!--col4-->
    </div><!--- row -- >
  </div><!-- col-sm-12-->
</div>
</div><!-- container-fluid-->
<div class="container-fluid">
<hr class="default">
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="row">
        <div class="col-xs-8 col-sm-9">
        <?php foreach ($all as $all): ?>
          
          <div class="col-sm-6">
            <div class="card example hoverable">
              <!--Card image-->
              <a href="<?php echo base_url('home/read/'.url_title($all->title).'.html'); ?>">
                <img class="img-fluid img-responsive" src="<?php echo $all->foto_konten; ?>" alt="Card image cap">
              </a>
              <!--/.Card image-->

              <!--Card content-->
              <div class="card-block">
                  <!--Title-->
                  <a href="<?php echo base_url('home/read/'.url_title($all->title).'.html'); ?>"><h4 class="card-title" ><b><?php echo ucwords($all->title); ?></b></h4></a>
                  <div class="col-xs-12" style="padding:0px;">
                    <div class="col-xs-6" style="padding:0px;">
                      <p><small class="text-muted"><?php echo $all->tanggal ?></small></p>
                    </div>
                    <div class="col-xs-6" style="padding:0px;">
                      <p class="pull-right">
                        <small class="text-muted"><i class="fa fa-eye"></i>   <?php echo $all->lihat ?></small>
                        <small class="text-muted"><i class="fa fa-share"></i>   <?php echo $all->share ?></small>
                      </p>
                    </div>
                  </div>
                  <!--Text-->
                  <p class="card-text"><?php echo $all->subtitle; ?></p>
                  <a href="<?php echo base_url('home/read/'.url_title($all->title).'.html'); ?>" class="btn btn-primary">Read More</a>
              </div><!--card blok -->
            </div><!--card-->
          </div><!-- col6 -->
        <?php endforeach ?>
        </div><!-- col9 -->

        <!--- Side content -->
        <div class="col-xs-4 col-sm-3" style="border-left:2px solid #e0e0e0;">
          <!--Card-->
          <?php foreach ($random as $random): ?>
            
          <div class="card example hoverable">

              <!--Card image-->
              <a href="<?php echo base_url('home/read/'.url_title($random->title).'.html') ?>">
                <img class="img-fluid" src="<?php echo $random->foto_konten; ?>" alt="Card image cap">
              </a>
              <!--/.Card image-->

              <!--Card content-->
              <div class="card-block">
                  <!--Title-->
                  <a href="<?php echo base_url('home/read/'.url_title($random->title).'.html') ?>"><h4 class="card-title text-fluid"><b><?php echo ucwords($random->title) ?></b></h4></a>
              </div>
              <!--/.Card content-->

          </div>
          <?php endforeach ?>
         
          <div class="card example hoverable">
              <!--Card image-->
              <img class="img-fluid" src="http://mdbootstrap.com/images/regular/nature/img%20(28).jpg" alt="Card image cap">
              <!--/.Card image-->
          </div>
        </div><!-- colxs4-->
        <!--/ Side content -->


      </div><!-- row -->
    </div><!-- col9-->
  </div><!-- row -->
</div><!-- container-fluid -->
</div>
