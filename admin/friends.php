<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-friends.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Friends</a>

				<h1>Friends</h1>
				<p>This table includes <?php echo counting("friends", "id");?> friends.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Useroneid</th>
			<th>Usertwoid</th>
			<th>Date</th>
			<th>Accepted</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$friends = getAll("friends");
				if($friends) foreach ($friends as $friendss):
					?>
					<tr>
		<td><?php echo $friendss['id']?></td>
		<td><?php echo $friendss['useroneid']?></td>
		<td><?php echo $friendss['usertwoid']?></td>
		<td><?php echo $friendss['date']?></td>
		<td><?php echo $friendss['accepted']?></td>


						<td><a href="edit-friends.php?act=edit&id=<?php echo $friendss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $friendss['id']?>&cat=friends" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				