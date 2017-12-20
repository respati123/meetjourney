
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin') ?>">Beranda</a></li>
        <li><a href="<?php echo base_url('iklan') ?>">Iklan</a></li>
        <li class="active"><?php if(isset($breadcrumb)){
          echo $breadcrumb;
        } else {
          echo "Menambah";
        } ?> Iklan</li>
      </ol>
        <h2 style="margin-top:0px">Iklan <?php echo $button ?></h2>
        <?php echo form_open($action,'POST'); ?>
        <div class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2" for="varchar">Nama Iklan <?php echo form_error('nama_iklan') ?></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_iklan" id="nama_iklan" placeholder="Nama Iklan" value="<?php echo $nama_iklan; ?>" />
                </div>
            </div>
            <div class="form-group">
                
                <label class="col-sm-2" for="foto">Foto <?php echo form_error('foto') ?></label>
                
                <div class="col-sm-10">
                    <?php if (isset($foto)): ?>
                        <img src="<?php echo $foto; ?>" class="thumbnail pull-left" alt="<?php echo $foto ?>" >
                    <?php endif; ?>
                    
                    <input type="text" class="form-control pull-left" name="foto" id="foto" value="<?php echo $foto; ?>" placeholder="foto" style="width:300px;">
                    <a href="/traveler/editor/filemanager/dialog.php?type=1&field_id=foto" data-fancybox-type="iframe" class="btn btn-default fancybox pull-left">upload</a>
                </div>
            
            </div>
            <div class="form-group">
                <label class="col-sm-2" for="varchar">Url <?php echo form_error('url') ?></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="url" id="url" placeholder="Url" value="<?php echo $url; ?>" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <input type="hidden" name="id_iklan" value="<?php echo $id_iklan; ?>" />
                    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                    <a href="<?php echo site_url('iklan') ?>" class="btn btn-default">Cancel</a>
                </div>
            </div>
            
        </div>
	    
	</form>
