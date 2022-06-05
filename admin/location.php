<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-location.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Location</a>

				<h1>Location</h1>
				<p>This table includes <?php echo counting("location", "id");?> location.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Userid</th>
			<th>Latitude</th>
			<th>Longitude</th>
			<th>Updated date</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$location = getAll("location");
				if($location) foreach ($location as $locations):
					?>
					<tr>
		<td><?php echo $locations['id']?></td>
		<td><?php echo $locations['userid']?></td>
		<td><?php echo $locations['latitude']?></td>
		<td><?php echo $locations['longitude']?></td>
		<td><?php echo $locations['updated_date']?></td>


						<td><a href="edit-location.php?act=edit&id=<?php echo $locations['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $locations['id']?>&cat=location" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				