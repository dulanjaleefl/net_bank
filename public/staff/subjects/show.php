<?php require_once('../../../private/initialize.php'); ?>
<?php 

$id= isset($_GET['id']) ? $_GET['id'] : 1;
?>

<?php $page_title = 'Show Subject'; ?>
<?php include SHARED_PATH . '/staff_header.php';?>

<div class="container-fluid" id="content">
	<a class="bacl-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>
	<div class="subject show">
			<h3>Subject ID &#58;</h3>
			<?php echo h($id); ?>
		</div>
</div>

<?php include SHARED_PATH .  '/staff_footer.php';?>

