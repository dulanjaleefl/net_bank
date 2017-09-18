<?php require_once('../../../private/initialize.php'); ?>

<?php 
// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1' ; // php 7.0

$page = find_page_by_id($id);
?>

<?php $page_title = 'Show Page'; ?>
<?php include SHARED_PATH . '/staff_header.php';?>

<div class="container-fluid" id="content">

	<a class="bacl-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>
		
		<div class="page show">
			
			<h3>Page: <?php echo h($page['menu_name']); ?></h3>
			
			<div class="attributes">
            <ul class="list-group" id="page-view">
				<?php $subject = find_subject_by_id($page['subject_id']); ?>
					<li class="list-group-item" >
					<h5 >Subject</h5>
					<h6><?php echo h($page['menu_name']); ?></h6>
					</li>
					
					<li class="list-group-item" >
					<h5>Menu_name</h5>
                        <h6><?php echo h($page['menu_name']); ?></h6>
					</li>
					
					<li class="list-group-item" >
					<h5>Position</h5>
					<h6><?php echo h($page['position']); ?></h6>
					</li>
					
					<li class="list-group-item" >
					<h5>Visible</h5>
					<h6><?php echo $page['visible'] == '1' ? 'true' : 'false'; ?></h6>
					</li>
					
					<li class="list-group-item" >
					<h5>Content</h5>
					<h6><?php echo h($page['content']); ?></h6>
					</li>
					
					
            </ul>	
					
		</div>
</div>

<?php include SHARED_PATH .  '/staff_footer.php';?>