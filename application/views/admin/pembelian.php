<div class="page-header">
	<h3>Data Beli</h3>
</div>

<a href="<?php echo base_url().'admin/tambah_pembelian';?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Tambah Transaksi</a>
<br>
<br>

<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover" id="table-datatable">
		<thead>
			<tr>
				<th>No</th>
				<th>Customer</th>
				<th>Produk</th>
				<th>Tgl. Beli</th>
				<th>Tgl. Garansi</th>
				<th>Total Harga</th>
				<th>Pilihan</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no = 1;
				foreach($pembelian as $p){
			?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $p->nama_customer;?></td>
				<td><?php echo $p->nama_gear;?></td>
				<td><?php echo date('d/m/Y',strtotime($p->tgl_beli));?></td>
				<td><?php echo date('d/m/Y',strtotime($p->tgl_garansi));?></td>
				<td><?php echo 'Rp. '.number_format($p->hrga_beli)." ,-";?></td>
				<td nowrap="nowrap">
					<a class="btn btn-warning btn-xs" href="<?php echo base_url().'admin/hapus_pembelian/'.$p->id_beli;?>"><span class="glyphicon glyphicon-remove"></span></a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>