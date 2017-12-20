<ol class="breadcrumb">
  <li><a href="<?php echo base_url('admin') ?>">Beranda</a></li>
  <li><a href="<?php echo base_url('iklan') ?>">Iklan</a></li>
  <li class="active">Mengubah Iklan</li>
</ol>
  <h2 style="margin-top:0px">Iklan Read</h2>
  <table class="table">
	    <tr><td>Nama Iklan</td><td><?php echo $nama_iklan; ?></td></tr>
	    <tr><td>Foto</td><td><img src="<?php echo $foto; ?>" alt="<?php echo $foto; ?>"  width="300px" height="300px"></td></tr>
	    <tr><td>Url</td><td><?php echo $url; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('iklan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
