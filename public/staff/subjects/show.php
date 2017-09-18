<?php require_once('../../../private/initialize.php'); ?>
<?php 

$id = $_GET['id'] ?? '1';

$subject = find_subject_by_id($id);
		
?>

<?php $page_title = 'Show Subject'; ?>
<?php include SHARED_PATH . '/staff_header.php';?>

<div class="container-fluid" id="content">
	<a class="bacl-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>
	
	<div class="subject show">
		<h3>Subject: <?php echo h($subject['menu_name']); ?></h3>
		
		<div class ="attributes">
		
		<ul class="list-group" id="subject-view">
			<li class="list-group-item" >
				<h5>Menu Name</h5>
				<h6><?php echo h($subject['menu_name']); ?></h6>
			</li>
			
			<li class="list-group-item" >
				<h5>Position</h5>
				<h6><?php echo h($subject['position']); ?></h6>
			</li>
			
			<li class="list-group-item" >
				<h5>Visible</h5>
				<h6><?php echo h($subject['visible'] == '1' ? 'true' : 'false'); ?></h6>
			</li>
		</ul>
			
			
		</div>
</div>

<?php include SHARED_PATH .  '/staff_footer.php';?>

