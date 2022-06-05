<?php
		include "includes/header.php";
		?>
		<table class="table table-striped">
		<tr>
		<th class="not">Table</th>
		<th class="not">Entries</th>
		</tr>
		
				<tr>
					<td><a href="chats.php">Chats</a></td>
					<td><?=counting("chats", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="friends.php">Friends</a></td>
					<td><?=counting("friends", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="location.php">Location</a></td>
					<td><?=counting("location", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="password_resets.php">Password_resets</a></td>
					<td><?=counting("password_resets", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="payments.php">Payments</a></td>
					<td><?=counting("payments", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="profiles.php">Profiles</a></td>
					<td><?=counting("profiles", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="users.php">Users</a></td>
					<td><?=counting("users", "id")?></td>
				</tr>
				</table>
			<?php include "includes/footer.php";?>
			