<div class="row">
	<div class="col-lg-8 col-md-6">
	<div class="panel panel-default">
<div class="panel-heading" class="page-header">
	<h3 class="panel-tittle" style="font-size: 18px; font-weight: bold"<b><i class="glyphicon glyphicon-random arrow-right"></i> Pembelian </h3>
	</div>
<div class="panel-body">
<form action="<?php echo base_url().'admin/tambah_pembelian_act' ?>" method="post">
	
	<div class="form-group">
		<label>Customer</label>
		<select name="id_customer" class="form-control">
			<option value="">-Pilih Customer-</option>
			<?php foreach ($customer as $c) {?>
				<option value="<?php echo $c->id_customer; ?>"><?php echo $c->nama_customer; ?></option>
			<?php } ?>
		</select>
		<?php echo form_error('id_customer'); ?>
	</div>

	<div class="form-group">
		<label>Product</label>
		<select name="id_gear" class="form-control">
			<option value="">-Pilih Product-</option>
			<?php foreach ($gear as $m) {?>
				<option value="<?php echo $m->id_gear; ?>"><?php echo $m->nama_gear; ?></option>
			<?php } ?>
		</select>
		<?php echo form_error('id_gear'); ?>
	</div>
		
	<div class="form-group">
		<label>Tanggal Beli</label>
		<input type="date" name="tgl_beli" class="form-control">
		<?php echo form_error('tgl_beli'); ?>
	</div>

	<div class="form-group">
		<label>Tanggal Garansi</label>
		<input type="date" name="tgl_garansi" class="form-control">
		<?php echo form_error('tgl_garansi'); ?>
	</div>

	<div class="form-group">
		<label>Harga Beli</label>
		<input type="text" name="hrga_beli" class="form-control">
		<?php echo form_error('hrga_beli'); ?>
	</div>

	<div class="form-group">
		<input type="submit" value="simpan" class="btn btn-primary btn-sm col-lg-12">
	</div>
</form>
</div>
</div>
</div>

	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-tittle" style="font-size: 18px; font-weight: bold"<b><i class="glyphicon glyphicon-random arrow-right"></i> Data Harga </h3>
			</div>
			<div class="panel-body">
				<div class="list-group">
					<?php foreach($gear as $m){ ?>
						<a href="#" class="list-group-item">
							<span class="badge"><?php echo 'Rp. '.number_format($m->hrg_beli); ?></span>
							<img src="<?php echo base_url('assets/glyphicon/mouse.png');?>" width="20" height="16"/>&nbsp;&nbsp;<?php echo $m->nama_gear;?>
						</a>
					<?php } ?>
				</div>
			<div class="text-right">
				<a href="<?php echo base_url().'admin/gear'?>">Lihat Semua gear<i class="glyphicon glyphicon-arrow-right"></i></a>
			</div>
		</div>
	</div>
</div>
</div>