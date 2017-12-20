        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('admin') ?>">Beranda</a></li>
          <li class="active">User</li>
        </ol>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">User List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('user/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Username</th>
		    <th>Nama User</th>
		    <th>Level</th>
		    <th>Foto</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($user_data as $user)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $user->username ?></td>
		    <td><?php echo $user->nama_user ?></td>
		    <td><?php echo $user->level ?></td>
		    <td><?php echo $user->foto ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('user/read/'.$user->id_user),'Read'); 
			echo ' | '; 
			echo anchor(site_url('user/update/'.$user->id_user),'Update'); 
			echo ' | '; 
			echo anchor(site_url('user/delete/'.$user->id_user),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
    