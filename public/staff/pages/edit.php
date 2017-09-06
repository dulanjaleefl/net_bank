<?php require_once('../../../private/initialize.php'); ?>

<?php 
	if(isset($_GET['id'])){
	$id = $_GET['id'];
} else{
	$id = '';
}

$page = isset($_POST['page']) ? $_POST['page'] : '';

$menu_name = '';
$position = '';
$visible = ''; 

if(is_post_request()){
	$page = isset($_POST['page']) ? $_POST['page'] : '';
	$position = isset($_POST['position']) ? $_POST['position'] : '';
	$visible = isset($_POST['visible']) ? $_POST['visible'] : '';

	echo '<div class="container-fluid">';
	echo "Form parameter<br />";
	echo "Page name: " . $page . "<br/>";
	echo "Position: " . $position . "<br/>";
	echo "Visible: " . $visible . "<br/>";
	echo "</div>";
} else{
	//
}
?>

<?php $page_title = 'Edit Page';?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div class="container-fluid" id="content">
	<a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

	<!--bootstrap container-->
	<div class="container">
  	<div class="row">
    <div class="col-6">

    	<div class="page-new">
			<h3>Edit Page</h3>

			<form action="<?php echo url_for('/staff/pages/edit.php?id=' . h(u($id))); ?>" method="post">
		  		<div class="form-group">
		    	<label>Page Name</label>
		    <input type="text" name="page" value="<?php echo h($page); ?>" class="form-control" placeholder="Enter Page">
		  		</div>

		  		<div class="form-group">
    			<label >position</label>
				    <select name="position" class="form-control">
				      <option value="1">1</option>
				      <option value="2">2</option>
				    </select>
			  	</div>

		  		<div class="form-check">
    			<label class="form-check-label">
    			<input type="hidden" name="visible" value="0">
      			<input type="checkbox" name="visible" value="1" class="form-check-input">
      			Visible
    			</label>
  				</div>

		  		<div id="operation">
  				<button type="submit" value="create subject" class="btn btn-primary">Edit Page</button>
  				</div>
		</form>

		</div>
		</div>
		</div>
		</div>

	</div>

<?php include SHARED_PATH .  '/staff_footer.php';?>