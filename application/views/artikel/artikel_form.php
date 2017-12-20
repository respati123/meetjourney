        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('admin') ?>">Beranda</a></li>
          <li><a href="<?php echo base_url('artikel') ?>">artikel</a></li>
          <li class="active">Menambah Artikel</li>
        </ol>
        <h2 style="margin-top:0px"><?php echo $button; ?> Artikel</h2>
      <?php echo form_open($action,'POST'); ?>
      <div class="form-horizontal">
        <div class="form-group">
            <label class="col-sm-2" for="title">Judul <?php echo form_error('title') ?></label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="title" id="title" placeholder="Title" value="<?php echo $title; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2" for="title">Sub Judul <?php echo form_error('subtitle') ?></label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="subtitle" id="subtitle" placeholder="subTitle" value="<?php echo $subtitle; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2" for="title">foto konten <?php echo form_error('foto') ?></label>
            <div class="col-sm-10">
              <input type="text" class="form-control pull-left" name="foto" id="foto" placeholder="foto" style="width:300px;">
              <a href="/editor/filemanager/dialog.php?type=1&field_id=foto" data-fancybox-type="iframe" class="btn btn-default fancybox pull-left">upload</a>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2" for="content">Konten <?php echo form_error('content') ?></label>
            <div class="col-sm-2">
              
            <textarea class="form-control editor"  name="content"  placeholder="Content"><?php echo $content; ?></textarea>
            </div>
            
        </div>
        <div class="form-group">
          <div class="col-sm-10 col-sm-offset-2">
            <input type="hidden" name="id_artikel" value="<?php echo $id_artikel; ?>" />
            <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
            <a href="<?php echo site_url('artikel') ?>" class="btn btn-default">Cancel</a>
          </div>
        </div>
      </div>
	</form>
