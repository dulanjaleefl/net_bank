<?php require_once('../../../private/initialize.php'); ?>

<?php
	$subjects = [
	[ 'id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About Net Bank'],
	[ 'id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Consumer'],
	[ 'id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Small Business'],
	[ 'id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Commercial'],
	];
?>

<?php $page_title = 'Subjects'; ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

	<div class="container-fluid" id="content">
		<div class="subjects listing">
			<h2>Subjects</h2>

			<div class="actions">
				<a class="action" href="#">Create /new Subjects</a>
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

				<?php foreach($subjects as $subject){?>
					<tbody>
					<tr>
						<td><?php echo h($subject['id']);?></td>
						<td><?php echo h($subject['position']);?></td>
						<td><?php echo $subject['visible'] == 1? 'true' : 'false';?></td>
						<td><?php echo h($subject['menu_name']);?></td>
						<td><a class="action" href="<?php echo url_for('/staff/subjects/show.php?id='. h(u($subject['id']))); ?>">View</a></td>
						<td><a class="action" href="#">Edit</a></td>
						<td><a class="action" href="#">Delete</a></td>
					</tr>
					</tbody>
				<?php } ?>
			</table>
		</div>
	</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>