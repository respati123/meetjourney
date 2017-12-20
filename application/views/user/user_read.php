        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('admin') ?>">Beranda</a></li>
          <li><a href="<?php echo base_url('user') ?>">User</a></li>
          <li class="active">Read User</li>
        </ol>
        <h2 style="margin-top:0px">User Read</h2>
        <table class="table">
	    <tr><td>Username</td><td><?php echo $username; ?></td></tr>
	    <tr><td>Password</td><td><?php echo $password; ?></td></tr>
	    <tr><td>Nama User</td><td><?php echo $nama_user; ?></td></tr>
	    <tr><td>Level</td><td><?php echo $level; ?></td></tr>
	    <tr><td>Foto</td><td><img src="<?php echo $foto; ?>" alt="<?php echo $username; ?>"></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('user') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
       