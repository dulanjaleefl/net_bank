<?php
	include '../../../private/initialize.php' ;
?>

<?php
 $page_set = find_all_pages();
?>

<?php include SHARED_PATH . '/staff_header.php';?>

	<div class="container-fluid" id="content">
		<div class="page listings">
		<h2>Pages</h2>

		<div class="actions">
		<a class="action" href="<?php echo url_for('/staff/pages/new.php'); ?>">Create new Pages</a>
		</div>

		<table class="list table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Subject_ID</th>
				<th>position</th>
				<th>visible</th>
				<th>menu_name</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<?php while($page = mysqli_fetch_assoc($page_set)){?>
		<?php $subject = find_subject_by_id($page['subject_id']); ?>
			<tbody>
				<tr>
					<td><?php echo h($page['id']);?></td>
					<td><?php echo h($subject['menu_name']);?></td>
					<td><?php echo h($page['position']);?></td>
					<td><?php echo $page['visible'] == 1 ? 'true' : 'false';?></td>
					<td><?php echo h($page['menu_name']);?></td>
					<td><a href="<?php echo url_for('/staff/pages/show.php?id='. h(u($page['id']))); ?>">View</a></td>
					<td><a href="<?php echo url_for('/staff/pages/edit.php?id=' .h(u($page['id']))); ?>">Edit</a></td>
					<td><a class="action" href="<?php echo url_for('/staff/pages/delete.php?id=' . h(u($page['id'])));?>">Delete</a></td>
				</tr>
			</tbody>
		<?php } ?>

		</table>
		<?php
		mysqli_free_result($page_set); ?>
	</div>
</div>



<?php include SHARED_PATH .  '/staff_footer.php';?>