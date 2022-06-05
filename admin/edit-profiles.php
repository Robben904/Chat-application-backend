<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$profiles = getById("profiles", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Profiles</legend>
						<input name="cat" type="hidden" value="profiles">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Date</label>
							<input class="form-control" type="text" name="date" value="<?=$profiles['date']?>" /><br>
							
							<label>Username</label>
							<input class="form-control" type="text" name="username" value="<?=$profiles['username']?>" /><br>
							
							<label>Email</label>
							<input class="form-control" type="text" name="email" value="<?=$profiles['email']?>" /><br>
							
							<label>Phone</label>
							<input class="form-control" type="text" name="phone" value="<?=$profiles['phone']?>" /><br>
							
							<label>Bio</label>
							<input class="form-control" type="text" name="bio" value="<?=$profiles['bio']?>" /><br>
							
							<label>Notificationid</label>
							<input class="form-control" type="text" name="notificationid" value="<?=$profiles['notificationid']?>" /><br>
							
							<label>Dateofbirth</label>
							<input class="form-control" type="text" name="dateofbirth" value="<?=$profiles['dateofbirth']?>" /><br>
							
							<label>Profileimage</label>
							<input class="form-control" type="text" name="profileimage" value="<?=$profiles['profileimage']?>" /><br>
							
							<label>Gender</label>
							<input class="form-control" type="text" name="gender" value="<?=$profiles['gender']?>" /><br>
							
							<label>Chats</label>
							<input class="form-control" type="text" name="chats" value="<?=$profiles['chats']?>" /><br>
							
							<label>Password</label>
							<input class="form-control" type="text" name="password" value="<?=$profiles['password']?>" /><br>
							
							<label>Address</label>
							<input class="form-control" type="text" name="address" value="<?=$profiles['address']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				