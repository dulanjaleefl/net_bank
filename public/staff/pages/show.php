<?php require_once('../../../private/initialize.php'); ?>

<?php 
	$id = $_GET['id'];
?>

<?php $page_title = 'Show Page'; ?>
<?php include SHARED_PATH . '/staff_header.php';?>

<div class="container-fluid" id="content">

	<a class="bacl-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>
		<div class="page show">
			<h3>Page ID &#58;</h3>
			<?php echo h($id); ?>
		</div>
</div>

<?php include SHARED_PATH .  '/staff_footer.php';?>