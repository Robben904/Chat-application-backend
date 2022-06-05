<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$location = getById("location", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Location</legend>
						<input name="cat" type="hidden" value="location">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Userid</label>
							<input class="form-control" type="text" name="userid" value="<?=$location['userid']?>" /><br>
							
							<label>Latitude</label>
							<input class="form-control" type="text" name="latitude" value="<?=$location['latitude']?>" /><br>
							
							<label>Longitude</label>
							<input class="form-control" type="text" name="longitude" value="<?=$location['longitude']?>" /><br>
							
							<label>Updated date</label>
							<input class="form-control" type="text" name="updated_date" value="<?=$location['updated_date']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				