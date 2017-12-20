<div id="page-content-wrapper">
    <div class="container-fluid xyz">
        <div class="row">
          <div class="col-md-12">

            <ol class="breadcrumb">
              <li class="active">Beranda</li>
            </ol>

            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-default ">
                    <div class="panel-heading">
                      <h3 class="panel-title text-center text-uppercase">Artikel</h3>
                    </div>
                    <div class="panel-body">
                      <div class="col-md-6">
                        <div class="panel panel-default ">
                          <div class="panel-heading mycolor">
                            <h3 class="panel-title text-center ">Aktif</h3>
                          </div>
                          <div class="panel-body">
                            <h1 class="text-center"><?php echo $hitung_artikel; ?></h1>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h3 class="panel-title text-center">Non Aktif</h3>
                          </div>
                          <div class="panel-body">
                            <h1 class="text-center">0</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      Aktivitas
                    </div>
                    <div class="panel-body">
                      <table class="table table-bordered table-striped" id="mytable">
                        <thead>
                            <tr>
                                <th width="150px"><i class="fa fa-user"></i></th>
                        		    <th>Aktifitas</th>
                                <th width="200px">Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach($aktifitas as $ak){

                            echo "<tr>
                                    <td>".$ak->nama."</td>
                                    <td>".$ak->aktifitas."</td>
                                    <td>".$ak->tanggal."</td>

                                </tr>";

                          } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->
