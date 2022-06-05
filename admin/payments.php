<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-payments.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Payments</a>

				<h1>Payments</h1>
				<p>This table includes <?php echo counting("payments", "id");?> payments.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Userid</th>
			<th>Payment</th>
			<th>Date</th>
			<th>Khaltino</th>
			<th>Remarks</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$payments = getAll("payments");
				if($payments) foreach ($payments as $paymentss):
					?>
					<tr>
		<td><?php echo $paymentss['id']?></td>
		<td><?php echo $paymentss['userid']?></td>
		<td><?php echo $paymentss['payment']?></td>
		<td><?php echo $paymentss['date']?></td>
		<td><?php echo $paymentss['khaltino']?></td>
		<td><?php echo $paymentss['remarks']?></td>


						<td><a href="edit-payments.php?act=edit&id=<?php echo $paymentss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $paymentss['id']?>&cat=payments" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				