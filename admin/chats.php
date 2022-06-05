<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-chats.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Chats</a>

				<h1>Chats</h1>
				<p>This table includes <?php echo counting("chats", "id");?> chats.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Sender</th>
			<th>Receiver</th>
			<th>Message</th>
			<th>File</th>
			<th>Chatstime</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$chats = getAll("chats");
				if($chats) foreach ($chats as $chatss):
					?>
					<tr>
		<td><?php echo $chatss['id']?></td>
		<td><?php echo $chatss['sender']?></td>
		<td><?php echo $chatss['receiver']?></td>
		<td><?php echo $chatss['message']?></td>
		<td><?php echo $chatss['file']?></td>
		<td><?php echo $chatss['chatstime']?></td>


						<td><a href="edit-chats.php?act=edit&id=<?php echo $chatss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $chatss['id']?>&cat=chats" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				