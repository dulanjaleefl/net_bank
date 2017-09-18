<?php

require_once('../../../private/initialize.php'); 

if(!isset($_GET['id'])){
	redirect_to(url_for('/staff/subjects/index.php'));
}

$id = $_GET['id'];



if(is_post_request()){
	$result = delete_subject($id);
	redirect_to(url_for('/staff/subjects/index.php'));
} else{
	$subject = find_subject_by_id($id);
}
	
?>

<?php $page_titile ='Delete subject';?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content-delete">

<a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List></a>
<div class="subject-delete">
	<h3>Delete Subject</h3>
	<p>Are you shure you want to delete this subject?</p>
	<p class="item"><?php echo h($subject['menu_name']); ?></p>
	
	<form action="<?php echo url_for('/staff/subjects/delete.php?id=' . h(u($subject['id']))); ?>" method="post">
	<div id="operations" >
	<input class="btn btn-danger" type="submit" name="commit" value="Delete Subject" />
	</div>
	</form>
	</div>
	</div>
	
	<?php include(SHARED_PATH .  '/staff_footer.php');?>


