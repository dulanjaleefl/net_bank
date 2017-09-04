<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'Staff Menu';?>
<?php include(SHARED_PATH.'/staff_header.php'); ?>

<div class="container-fluid" id="content">
		<div id="main-menu">
			<h2>Main Menu</h2>
			<ul class="list-group">
				<li class="list-group-item"><a href="<?php echo url_for('/staff/subjects/index.php'); ?>">Subjects</a></li>
				<li class="list-group-item"><a href="<?php echo url_for('/staff/pages/index.php'); ?>">Pages</a></li>
			</ul>
		</div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>

		
