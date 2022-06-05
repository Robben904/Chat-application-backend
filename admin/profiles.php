<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-profiles.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Profiles</a>

				<h1>Profiles</h1>
				<p>This table includes <?php echo counting("profiles", "id");?> profiles.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Date</th>
			<th>Username</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Bio</th>
			<th>Notificationid</th>
			<th>Dateofbirth</th>
			<th>Profileimage</th>
			<th>Gender</th>
			<th>Chats</th>
			<th>Password</th>
			<th>Address</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$profiles = getAll("profiles");
				if($profiles) foreach ($profiles as $profiless):
					?>
					<tr>
		<td><?php echo $profiless['id']?></td>
		<td><?php echo $profiless['date']?></td>
		<td><?php echo $profiless['username']?></td>
		<td><?php echo $profiless['email']?></td>
		<td><?php echo $profiless['phone']?></td>
		<td><?php echo $profiless['bio']?></td>
		<td><?php echo $profiless['notificationid']?></td>
		<td><?php echo $profiless['dateofbirth']?></td>
		<td><?php echo $profiless['profileimage']?></td>
		<td><?php echo $profiless['gender']?></td>
		<td><?php echo $profiless['chats']?></td>
		<td><?php echo $profiless['password']?></td>
		<td><?php echo $profiless['address']?></td>


						<td><a href="edit-profiles.php?act=edit&id=<?php echo $profiless['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $profiless['id']?>&cat=profiles" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				