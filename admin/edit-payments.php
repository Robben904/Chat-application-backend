<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$payments = getById("payments", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Payments</legend>
						<input name="cat" type="hidden" value="payments">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Userid</label>
							<input class="form-control" type="text" name="userid" value="<?=$payments['userid']?>" /><br>
							
							<label>Payment</label>
							<input class="form-control" type="text" name="payment" value="<?=$payments['payment']?>" /><br>
							
							<label>Date</label>
							<input class="form-control" type="text" name="date" value="<?=$payments['date']?>" /><br>
							
							<label>Khaltino</label>
							<input class="form-control" type="text" name="khaltino" value="<?=$payments['khaltino']?>" /><br>
							
							<label>Remarks</label>
							<input class="form-control" type="text" name="remarks" value="<?=$payments['remarks']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				