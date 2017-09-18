<?php require_once('../../../private/initialize.php'); ?>

<?php

$subject_set = find_all_subjects();

	
?>

<?php $page_title = 'Subjects'; ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

	<div class="container-fluid" id="content">
		<div class="subjects listing">
			<h2>Subjects</h2>

			<div class="actions">
				<a class="action" href="<?php echo url_for('/staff/subjects/new.php'); ?>">Create new Subjects</a>
			</div>

			<table class="list table">
				<thead>
				<tr>
					<th>ID</th>
					<th>Position</th>
					<th>Visible</th>
					<th>Name</th>
					<th>&nbsp;</th>
					<th>&nbsp;</th>
					<th>&nbsp;</th>
				</tr>
				</thead>

				<?php while($subject = mysqli_fetch_assoc($subject_set)){?>
					<tbody>
					<tr>
						<td><?php echo h($subject['id']);?></td>
						<td><?php echo h($subject['position']);?></td>
						<td><?php echo $subject['visible'] == 1? 'true' : 'false';?></td>
						<td><?php echo h($subject['menu_name']);?></td>
						<td><a class="action" href="<?php echo url_for('/staff/subjects/show.php?id='. h(u($subject['id']))); ?>">View</a></td>
						<td><a class="action" href="<?php echo url_for('/staff/subjects/edit.php?id='. h(u($subject['id']))); ?>">Edit</a></td>
						<td><a class="action" href="<?php echo url_for('/staff/subjects/delete.php?id=' . h(u($subject['id'])));?>">Delete</a></td>
					</tr>
					</tbody>
				<?php } ?>
			</table>
			
			<?php 
			mysqli_free_result($subject_set);
			?>
		</div>
	</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
