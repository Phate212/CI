<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
<!-- Modal -->
<div class="modal fade" id="modal-edit" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <?php echo validation_errors(); ?>
          <h4 class="modal-title">Tambah Artikel</h4>
        </div>
        <div class="modal-body">
          <?php echo form_open('artikel/edit/'.$artikel['id_artikel']); ?>
          <div class="form-group">Judul : <input type="text" class="form-control" name="judul" value="<?php echo $this->input->post('judul'); ?>" required="required" autofocus /></div>
          <div class="form-group">Penulis : <input type="text" class="form-control" name="penulis" value="<?php echo $this->input->post('penulis'); ?>" required="required" /></div>
          <div class="form-group">Tanggal : <input type="date" class="form-control" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>" required="required" /></div>
          <div class="form-group">Isi : <textarea name="isi" class="form-control" required="required"><?php echo $this->input->post('isi'); ?></textarea></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-info">Simpan</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>