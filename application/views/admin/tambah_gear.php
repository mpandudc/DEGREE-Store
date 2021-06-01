<div class="page-header">
<h3>Tambah Baru</h3>
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

<form action="<?php echo base_url().'admin/tambah_gear_act' ?>" method="post" enctype="multipart/form-data">
<div class="panel panel-default">
<div class="panel-body">	
	<div class="form-group">
<label>Jenis</label>
	<select name="id_jenis" class="form-control">
		<option value=""></option>
		<?php foreach($jenis as $j){ ?>
		<option value="<?php echo $j->id_jenis;?>"><?php echo $j->nama_jenis;?></option>
		<?php } ?>
	</select>
	<?php echo form_error('id_jenis'); ?>
	</div>
	
<div class="form-group">
	<label>Nama Gear</label>
	<input type="text" name="nama_gear" class="form-control">
	<?php echo form_error('nama_gear'); ?>
</div>
	
<div class="form-group">
	<label>Tahun Gear</label>
	<input type="date" name="thn_gear" class="form-control">
	<?php echo form_error('thn_gear'); ?>
</div>
	
<div class="form-group">
	<label>Kode Barang</label>
	<input type="text" name="kd_gear" class="form-control">
	<?php echo form_error('kd_gear'); ?>
</div>

<div class="form-group">
	<label>Harga</label>
	<input type="text" name="hrg_beli" class="form-control">
	<?php echo form_error('hrg_beli'); ?>
</div>

<div class="form-group">
	<label>Status Gear</label>
	<select name="status_gear" class="form-control">
		<option value=""></option>
		<option value="1">Tersedia</option>
		<option value="0">Stok Habis</option>
	</select>
	<?php echo form_error('status_gear'); ?>
</div>
	
<div class="form-group">
	<label>Gambar</label>
	<input type="file" name="gambar" class="form-control">
	<?php echo form_error('gambar'); ?>
</div>

<div class="form_group">
	<input type="submit" value="Submit" class="btn btn-primary btn-block">
</div>
</div>
</div>
</form>