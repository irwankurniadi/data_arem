<p>
	<a href="<?php echo site_url('denyut_nadi/tambah') ?>" class="btn btn-success">
        <i class = "fa fa-plus"></i> Tambah Pengukuran
	</a>
</p>

<table class="table table-bordered table striped table-sm" id="example1">
	<thead>
		<tr>
			<th width = "5%">NO</th>
			<th width = "20%">KODE - PASIEN</th>
			<th width = "10%">TDS</th>
			<th width = "10%">TDD</th>
			<th width = "15%">DENYUT NADI</th>
			<th width = "15%">KETERANGAN</th>
			<th width = "10%">OLEH</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($denyut_nadi as $key => $denyut_nadi) { ?> 

		<tr>
			<td><?php echo $key+1; ?></td>
			<td><a href="<?php echo site_url('denyut_nadi/pasien/'.$denyut_nadi->id_pasien) ?>">
				<?php echo $denyut_nadi->kode_pasien ?>- <?php echo $denyut_nadi->nama_pasien ?>
				<sup><i class="fa fa-link"></i></sup></a>
			</td>
			<td><?php echo $denyut_nadi->tds ?></td>
			<td><?php echo $denyut_nadi->tdd ?></td>
			<td><?php echo $denyut_nadi->denyut_nadi ?></td>
			<td><?php echo $denyut_nadi->keterangan ?></td>
			<td><?php echo $denyut_nadi->nama_user ?></td>
			<td>
				<div class="btn_group">
					<a href="<?php echo site_url('denyut_nadi/detail/'.$denyut_nadi->id_denyut_nadi) ?>" class="btn btn-info btn-sm">
						<i class="fa fa-laptop"></i> Detail
					</a>
					
					<a href="<?php echo site_url('denyut_nadi/cetak/'.$denyut_nadi->id_denyut_nadi) ?>" class="btn btn-success btn-sm" target="_blank">
						<i class="fa fa-print"></i> Cetak
					</a>

					<a href="<?php echo site_url('denyut_nadi/edit/'.$denyut_nadi->id_denyut_nadi) ?>" class="btn btn-warning btn-sm">
						<i class="fa fa-edit"></i> Edit
					</a>
					
					<a href="<?php echo site_url('denyut_nadi/delete/'.$denyut_nadi->id_denyut_nadi) ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin ingin menghapus data ini?')">
						<i class="fa fa-trash"></i> Hapus
					</a>
				</div>
			</td>

		</tr>

		<?php } ?>

	</tbody>
</table>