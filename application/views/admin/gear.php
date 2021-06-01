<div class="page-header">
	<h3>Data gear</h3>
</div>

<a href="<?php echo base_url().'admin/tambah_gear';?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Tambah Baru</a>
<br>
<br>

<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover" id="table-datatable">
		<thead>
			<tr>
				<th class="text-center">No</th>
				<th class="text-center">Gambar</th>
				<th class="text-center">Nama Produk</th>
				<th class="text-center">Tahun Produksi</th>
				<th class="text-center">Kode Barang</th>
				<th class="text-center">Harga</th>
				<th class="text-center">Status</th>
				<th class="text-center">Pilihan</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no = 1;
				foreach($gear as $m){
			?>
			<tr>
				<td align="center"><?php echo $no++;?></td>
				<td align="center"><img src="<?php echo base_url().'assets/images/product_img/'.$m->gambar; ?>" width="120" height="80" alt="gambar tidak ada"></td>
				<td align="center"><?php echo $m->nama_gear ?></td>
				<td align="center"><?php echo $m->thn_gear ?></td>
				<td align="center"><?php echo $m->kd_gear ?></td>
				<td align="center"><?php echo 'Rp. '.number_format($m->hrg_beli); ?></td>
				<td align="center"><?php if($m->status_gear == "1"){
								echo "Tersedia";
					}else if($m->status_gear == "0"){
								echo "Stok Habis";
					}
					?></td>
				<td align="center" nowrap="nowrap">
					<a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/edit_gear/'.$m->id_gear;?>"><span class="glyphicon glyphicon-zoom-in"></span></a>
					<a class="btn btn-warning btn-xs" href="<?php echo base_url().'admin/hapus_gear/'.$m->id_gear;?>"><span class="glyphicon glyphicon-remove"></span></a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>