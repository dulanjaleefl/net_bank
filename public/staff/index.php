<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'Staff Menu';?>
<?php include(SHARED_PATH.'/staff_header.php'); ?>

<div class="container-fluid" id="content">
		<div id="main-menu">
        <nav class="nav flex-column">
			<h5  >Staff Menu</h5>
			<ul>
				<li class="#"><a class="nav-link active" href="<?php echo url_for('/staff/subjects/index.php'); ?>">Subjects</a></li>
				<li class="#"><a class="nav-link active"  href="<?php echo url_for('/staff/pages/index.php'); ?>">Pages</a></li>
			</ul>
        </nav>
		</div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>

		
