<?php
// open forn
//echo form_open(base_url('user',' class="form-horizontal"'));
echo form_open(site_url('user'));
?>

<p>
	<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modal-default">
            <i class= "fa fa-plus"> </i> Tambah User Baru
    </button>
</p>
<?php
// panggil form tambah
include('tambah.php');
//closing form
echo form_close();
?>

<table class="table table-bordered table striped table-sm" id="example1">
	<thead>
		<tr>
			<th width = "5%">NO</th>
			<th width = "20%">NAMA</th>
			<th width = "20%">EMAIL</th>
			<th width = "20%">USERNAME</th>
			<th width = "10%">LEVEL</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($user as $key => $user) { ?> 

		<tr>
			<td><?php echo $key+1; ?></td>
			<td><?php echo $user->nama_user ?></td>
			<td><?php echo $user->email ?></td>
			<td><?php echo $user->username ?></td>
			<td><?php echo $user->akses_level ?></td>
			<td>
				<div class="btn_group">
					<a href="<?php echo site_url('user/edit/'.$user->id_user) ?>" class="btn btn-warning btn-sm">
						<i class="fa fa-edit"></i> Edit
					</a>
					
					<a href="<?php echo site_url('user/delete/'.$user->id_user) ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin ingin menghapus data ini?')">
						<i class="fa fa-trash"></i> Hapus
					</a>
				</div>

		</tr>

		<?php } ?>

	</tbody>
</table>