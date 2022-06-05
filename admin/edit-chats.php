<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$chats = getById("chats", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Chats</legend>
						<input name="cat" type="hidden" value="chats">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Sender</label>
							<input class="form-control" type="text" name="sender" value="<?=$chats['sender']?>" /><br>
							
							<label>Receiver</label>
							<input class="form-control" type="text" name="receiver" value="<?=$chats['receiver']?>" /><br>
							
							<label>Message</label>
							<input class="form-control" type="text" name="message" value="<?=$chats['message']?>" /><br>
							
							<label>File</label>
							<input class="form-control" type="text" name="file" value="<?=$chats['file']?>" /><br>
							
							<label>Chatstime</label>
							<input class="form-control" type="text" name="chatstime" value="<?=$chats['chatstime']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				