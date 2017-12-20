    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('admin') ?>">Beranda</a></li>
      <li><a href="<?php echo base_url('user') ?>">User</a></li>
      <?php if(isset($title)){ ?>

            <li class="active"><?php echo $title ?> User</li>

        <?php } else { ?>
            <li class="active">Membuat User</li>

      <?php  } ?>
      
    </ol>
        <h2 style="margin-top:0px">User <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
     <div class="form-horizontal">
	    <div class="form-group">
            <label class="col-sm-2" for="varchar">Username <?php echo form_error('username') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
            </div>
        </div>
	    <div class="form-group">
            <label class="col-sm-2" for="varchar">Password <?php echo form_error('password') ?></label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" <?php if(isset($title)){echo 'disabled';} ?> />
            </div>
        </div>
	    <div class="form-group">
            <label class="col-sm-2" for="varchar">Nama User <?php echo form_error('nama_user') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Nama User" value="<?php echo $nama_user; ?>" />
            </div>
        </div>
	    <div class="form-group">
            <label class="col-sm-2" for="enum">Level <?php echo form_error('level') ?></label>
            <div class="col-sm-10">
                <select class="form-control" name="level">
                  <option value="<?php echo $level ?>" Selected><?php echo $level ?></option>
                  <option value="admin">Admin</option>
                  <option value="staff">Staff</option>
                </select>
            </div>
        </div>
	    <div class="form-group">
            <label  class="col-sm-2" for="varchar">Foto <?php echo form_error('foto') ?></label>
            <div class="col-sm-10">
                <input type="text" class="form-control pull-left" name="foto" id="foto" placeholder="foto" style="width:300px;">
                <a href="/editor/filemanager/dialog.php?type=1&field_id=foto" data-fancybox-type="iframe" class="btn btn-default fancybox pull-left">upload</a>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <input type="hidden" name="id_user" value="<?php echo $id_user; ?>" /> 
                <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                <a href="<?php echo site_url('user') ?>" class="btn btn-default">Cancel</a>
            </div>
        </div>
	    
    </div>
	</form>
    