<ol class="breadcrumb">
  <li><a href="<?php echo base_url('admin') ?>">Beranda</a></li>
  <li><a href="<?php echo base_url('artikel') ?>">artikel</a></li>
  <li class="active">Melihat Artikel</li>
</ol>
  <h2 style="margin-top:0px">Artikel Read</h2>
  <table class="table">
	    <tr><td>Judul</td><td><?php echo $title; ?></td></tr>
	    <tr><td>Sub Judul</td><td><?php echo $subtitle; ?></td></tr>
	    <tr><td>Image Content</td><td><img src="<?php echo $foto ?>" width="300px" height="300px"></td></tr>
	    <tr><td>Content</td><td><?php echo $content; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('artikel') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
