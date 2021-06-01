<div class="page-header">
	<h3>Transaksi Selesai</h3>
</div>
<?php foreach ($pembelian as $p) { ?>
 <form action="<?php echo base_url().'admin/pembelian_selesai_act/' ?>" method="post">
	<input type="hidden" name="id" value="<?php echo $p->id_beli ?>">
	<input type="hidden" name="gear" value="<?php echo $p->id_gear ?>">
	<input type="hidden" name="tgl_kembali" value="<?php echo $p->tgl_kembali ?>">
	<input type="hidden" name="hrga_beli" value="<?php echo $p->hrga_beli ?>">
	<div class="form-group">
		<label>Pembeli</label>
		<select class="form-control" name="anggota" disabled>
			<option value="">-Pilih Pembeli-</option>
			<?php foreach ($customer as $c) { ?>
				<option <?php if($p->id_customer == $c->id_customer){echo "selected='selected'";} ?> value="<?php echo $c->id_customer; ?>"><?php echo $c-> nama_customer; ?></option>
			<?php } ?>
		</select>
	</div>

	<div class="form-group">
		<label>Product</label>
		<select class="form-control" name="gear" disabled>
			<option value="">-Pilih Product</option>
			<?php foreach ($gear as $m){ ?>
				<option <?php if($p->id_gear == $m->id_gear){echo"selected=selected";} ?> value="<?php echo $m->id_gear; ?>"><?php echo $m->nama_gear; ?></option>
			<?php } ?>
		</select>
	</div>

	<div class="form-group">
		<label>Tanggal Beli</label>
		<input class="form-control" type="date" name="tgl_beli" value="<?php echo $p->tgl_beli ?>" disabled>
	</div>


	<div class="form-group">
		<label>Harga beli / Hari</label>
		<input class="form-control" type="text" name="hrga_beli" value="<?php echo $p->hrga_beli ?>" disabled>
	</div>

	<div class="form-group">
		<label>Tanggal Dikembalikan Oleh Customer</label>
		<input class="form-control" type="date" name="tgl_dikembalikan">
		<?php echo form_error('tgl_pengembalian'); ?>
	</div>

	<div class="form-group">
		<input type="submit" value="simpan" class="btn btnprimary btn-sm">
	</div>

</form>
<?php } ?>