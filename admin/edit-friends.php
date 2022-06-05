<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$friends = getById("friends", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Friends</legend>
						<input name="cat" type="hidden" value="friends">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Useroneid</label>
							<input class="form-control" type="text" name="useroneid" value="<?=$friends['useroneid']?>" /><br>
							
							<label>Usertwoid</label>
							<input class="form-control" type="text" name="usertwoid" value="<?=$friends['usertwoid']?>" /><br>
							
							<label>Date</label>
							<input class="form-control" type="text" name="date" value="<?=$friends['date']?>" /><br>
							
							<label>Accepted</label>
							<input class="form-control" type="text" name="accepted" value="<?=$friends['accepted']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				