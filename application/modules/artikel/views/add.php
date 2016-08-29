<?php echo validation_errors(); ?>

<?php echo form_open('artikel/add'); ?>
<div class="form-group">
	<div>Judul : <input type="text" name="judul" value="<?php echo $this->input->post('judul'); ?>" /></div>
	<div>Penulis : <input type="text" name="penulis" value="<?php echo $this->input->post('penulis'); ?>" /></div>
	<div>Tanggal : <input type="text" name="tanggal" value="<?php echo $this->input->post('tanggal'); ?>" /></div>
	<div>Isi : <textarea name="isi"><?php echo $this->input->post('isi'); ?></textarea></div>
	
	<button type="submit">Save</button>
</div>
<?php echo form_close(); ?>