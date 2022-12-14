<p>
	<a href="<?php echo site_url('suhu_tubuh/tambah') ?>" class="btn btn-success">
        <i class = "fa fa-plus"></i> Tambah Pengukuran
	</a>
</p>

<table class="table table-bordered table striped table-sm" id="example1">
	<thead>
		<tr>
			<th width = "5%">NO</th>
			<th width = "25%">KODE - PASIEN</th>
			<th width = "10%">SUHU</th>
			<th width = "15%">WAKTU</th>
			<th width = "15%">METODE</th>
			<th width = "15%">OLEH</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($suhu_tubuh as $key => $suhu_tubuh) { ?> 

		<tr>
			<td><?php echo $key+1; ?></td>
			<td><a href="<?php echo site_url('suhu_tubuh/pasien/'.$suhu_tubuh->id_pasien) ?>">
				<?php echo $suhu_tubuh->kode_pasien ?>- <?php echo $suhu_tubuh->nama_pasien ?>
				<sup><i class="fa fa-link"></i></sup></a>
			</td>
			<td class="<?php if($suhu_tubuh->suhu_tubuh <=37) {echo 'bg-success';}elseif($suhu_tubuh->suhu_tubuh <=38) {echo 'bg-warning';}else{echo 'bg-danger';} ?>"><?php echo $suhu_tubuh->suhu_tubuh ?> Derajat</td>
			<td><?php echo date('d-m-Y', strtotime($suhu_tubuh->tanggal_pengukuran)) ?> jam <?php echo date('H:i', strtotime($suhu_tubuh->jam_pengukuran)) ?></td>
			<td><?php echo $suhu_tubuh->metode_pengukuran ?></td>
			<td><?php echo $suhu_tubuh->nama_user ?></td>
			<td>
				<div class="btn_group">
					<a href="<?php echo site_url('suhu_tubuh/detail/'.$suhu_tubuh->id_suhu_tubuh) ?>" class="btn btn-info btn-sm">
						<i class="fa fa-laptop"></i> Detail
					</a>
					
					<a href="<?php echo site_url('suhu_tubuh/cetak/'.$suhu_tubuh->id_suhu_tubuh) ?>" class="btn btn-success btn-sm" target="_blank">
						<i class="fa fa-print"></i> Cetak
					</a>

					<a href="<?php echo site_url('suhu_tubuh/edit/'.$suhu_tubuh->id_suhu_tubuh) ?>" class="btn btn-warning btn-sm">
						<i class="fa fa-edit"></i> Edit
					</a>
					
					<a href="<?php echo site_url('suhu_tubuh/delete/'.$suhu_tubuh->id_suhu_tubuh) ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin ingin menghapus data ini?')">
						<i class="fa fa-trash"></i> Hapus
					</a>
				</div>
			</td>

		</tr>

		<?php } ?>

	</tbody>
</table>