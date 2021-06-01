<div class="page-header">
	<h3>Edit gear</h3>
</div>


<?php validation_errors('<p style="color:red;">','</p>');?>

<?php
	if($this->session->flashdata())
	{
		echo "<div class='alert alert-danger alert-massage'>";
		echo $this->session->flashdata('alert');
		echo "</div>";
	}
?>


<?php foreach($gear as $m){ ?>
<form action="<?php echo base_url().'admin/update_gear' ?>" method="post" enctype="multipart/form-data">
<div class="panel panel-default">
<div class="panel-body">
<div class="form-group">
<label>Jenis</label>
	<select name="id_jenis" class="form-control">
		<?php foreach($jenis as $j){ ?>
		<option value="<?php echo $j->id_jenis;?>"><?php echo $j->nama_jenis;?></option>
		<?php } ?>
	</select>
	<?php echo form_error('id_jenis'); ?>
	</div>
	
<div class="form-group">
	<label>Nama gear</label>
	<input type="hidden" name="id" value="<?php echo $m->id_gear; ?>">
	<input type="text" name="nama_gear" class="form-control" value="<?php echo $m->nama_gear;?>">
	<?php echo form_error('nama_gear'); ?>
</div>

<div class="form-group">
	<label>Tahun gear</label>
	<input type="date" name="thn_gear" class="form-control" value="<?php echo $m->thn_gear;?>">
	<?php echo form_error('thn_gear'); ?>
</div>
	
<div class="form-group">
	<label>Kode Barang</label>
	<input type="text" name="kd_gear" class="form-control" value="<?php echo $m->kd_gear;?>">
	<?php echo form_error('kd_gear'); ?>
</div>

<div class="form-group">
	<label>Harga beli</label>
	<input class="form-control" type="text" name="hrg_beli" value="<?php echo $m->hrg_beli ?>">
	<?php echo form_error('hrg_beli'); ?>
</div>

<div class="form-group">
	<label>Status gear</label>
	<select name="status_gear" class="form-control">
		<option <?php if($m->status_gear == "1"){echo "selected='selected'";} echo $m->status_gear; ?> value="1">Tersedia</option>
		<option <?php if($m->status_gear == "0"){echo "selected='selected'";} echo $m->status_gear; ?> value="0">Stok Habis</option>
	</select>
	<?php echo form_error('status_gear'); ?>
</div>
	
<div class="form-group">
	<label>Gambar</label>
	<?php
		if(isset($m->gambar)){
		echo '<input type="hidden" name="old_pict" value="'.$m->gambar.'">';
			echo '<img src="'.base_url().'/assets/images/product_img/'.$m->gambar.'" width="30%">';
			}
			?>
	<input type="file" name="gambar" class="form-control">
	<?php echo form_error('gambar'); ?>
</div>

<div class="form_group">
	<input type="submit" value="Update" class="btn btn-primary btn-block">
</div>
</div>
</div>
</form>
<?php } ?>