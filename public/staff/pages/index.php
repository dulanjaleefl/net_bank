<?php
	include '../../../private/initialize.php' ;
?>

<?php
	$pagesArray = [
	['id' => '1', 'Position' => '1', 'Visible' => '1', 'Name' => 'Net Bank'],
	['id' => '2', 'Position' => '2', 'Visible' => '1', 'Name' => 'History'],
	['id' => '3', 'Position' => '3', 'Visible' => '1', 'Name' => 'Leadership'],
	['id' => '4', 'Position' => '4', 'Visible' => '1', 'Name' => 'Contact Us'],
	]
?>

<?php include SHARED_PATH . '/staff_header.php';?>

	<div class="container-fluid" id="content">
		<div class="page listings">
		<h3>Pages</h3>

		<div class="actions">
		<a class="action" href="<?php echo url_for('/staff/pages/new.php'); ?>">Create new Pages</a>
		</div>

		<table class="list table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Position</th>
				<th>Visible</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<?php foreach($pagesArray as $pageArray){?>
			<tbody>
				<tr>
					<td><?php echo h($pageArray['id']);?></td>
					<td><?php echo h($pageArray['Position']);?></td>
					<td><?php echo $pageArray['Visible'] == 1 ? 'true' : 'false';?></td>
					<td><?php echo h($pageArray['Name']);?></td>
					<td><a href="<?php echo url_for('/staff/pages/show.php?id='. h(u($pageArray['id']))); ?>">View</a></td>
					<td><a href="<?php echo url_for('/staff/pages/edit.php?id=' .h(u($pageArray['id']))); ?>">Edit</a></td>
					<td><a href="#">Delete</a></td>
				</tr>
			</tbody>
		<?php } ?>

		</table>
	</div>
</div>



<?php include SHARED_PATH .  '/staff_footer.php';?>