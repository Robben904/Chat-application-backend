<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-password_resets.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Password_resets</a>

				<h1>Password_resets</h1>
				<p>This table includes <?php echo counting("password_resets", "id");?> password_resets.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Email</th>
			<th>Token</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$password_resets = getAll("password_resets");
				if($password_resets) foreach ($password_resets as $password_resetss):
					?>
					<tr>
		<td><?php echo $password_resetss['id']?></td>
		<td><?php echo $password_resetss['email']?></td>
		<td><?php echo $password_resetss['token']?></td>


						<td><a href="edit-password_resets.php?act=edit&id=<?php echo $password_resetss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $password_resetss['id']?>&cat=password_resets" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				