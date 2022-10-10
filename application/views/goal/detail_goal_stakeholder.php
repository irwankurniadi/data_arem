

<table class="table table-bordered table striped table-sm" id="example1">
	<thead>
		<tr>
			<th width = "5%">NO</th>
			<th width = "15%">Project</th>
			<th width = "5%">GOAL ID</th>
			<th width = "20%">GOAL DESCRIPTION</th>
			<th width = "5%">GOAL Type</th>
			<th width = "5%">PARENT GOAL</th>
			<th width = "20%">PARENT DESCRIPTION</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($goal as $key => $goal) { ?> 

		<tr>
			<td><?php echo $key+1; ?></td>
			<td><a href="<?php echo site_url('goal/project/'.$goal->project_id) ?>">
				<?php echo $goal->project_id ?>- <?php echo $goal->project_name ?>
				<sup><i class="fa fa-link"></i></sup></a>
			</td>
			<td><?php echo $goal->goal_id ?> </td>
			<td><?php echo $goal->goal_desc ?> </td>
			<td><?php echo $goal->goal_type ?></td>
			<td><?php echo $goal->parent_goal_id ?></td>
			<td><?php echo $goal->parent_goal_desc?></td>
			<td>
				<div class="btn_group">
					<a href="<?php echo site_url('goal/detail/'.$goal->goal_id) ?>" class="btn btn-info btn-sm">
						<i class="fa fa-laptop"></i> 
					</a>
					
					<a href="<?php echo site_url('goal/cetak/'.$goal->goal_id) ?>" class="btn btn-success btn-sm" target="_blank">
						<i class="fa fa-print"></i> 
					</a>

					<a href="<?php echo site_url('goal/edit/'.$goal->goal_id) ?>" class="btn btn-warning btn-sm">
						<i class="fa fa-edit"></i> 
					</a>
					
					<a href="<?php echo site_url('goal/delete/'.$goal->goal_id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin ingin menghapus data ini?')">
						<i class="fa fa-trash"></i> 
					</a>
				</div>
			</td>

		</tr>

		<?php } ?>

	</tbody>
</table>