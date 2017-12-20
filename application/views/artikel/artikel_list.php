<ol class="breadcrumb">
  <li><a href="<?php echo base_url('admin') ?>">Beranda</a></li>
  <li class="active">Artikel</li>

</ol>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Artikel List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('artikel/create'), 'Create', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('artikel/excel'), 'Excel', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Title</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($artikel_data as $artikel)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $artikel->title ?></td>
		    <td style="text-align:center" width="200px">
			<?php
			echo anchor(site_url('artikel/read/'.$artikel->id_artikel),'Read');
			echo ' | ';
			echo anchor(site_url('artikel/update/'.$artikel->id_artikel),'Update');
            echo ' | ';
            if($artikel->aktif == 0){
                echo anchor(site_url('artikel/aktif/'.$artikel->id_artikel),'Aktif');
		        echo ' | ';
            } else {
                echo anchor(site_url('artikel/nonaktif/'.$artikel->id_artikel),'Tidak Aktif');
                echo ' | ';
            }
			echo anchor(site_url('artikel/delete/'.$artikel->id_artikel),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
