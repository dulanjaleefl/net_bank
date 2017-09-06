<?php require_once('../../../private/initialize.php'); ?>

<?php 

$page = isset($_POST['page']) ? $_POST['page'] : '';

if(is_post_request()){

// handle form vales sent by new.php

$page = isset($_POST['page']) ? $_POST['page'] : '';
$position = isset($_POST['position']) ? $_POST['position'] : '';
$visible = isset($_POST['visible']) ? $_POST['visible'] : '';

echo '<div class="container-fluid">';
echo "Form parameter</br>";
echo "Page name: " . $page . "<br/>";
echo "Position: " . $position . "<br/>";
echo "Visible: " . $visible . "<br/>";
echo "</div>";
}else{

}
?>

<?php $page_title = 'Create Page';?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div class="container-fluid" id="content">
	<a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

	<!--bootstrap container-->
	<div class="container">
  	<div class="row">
    <div class="col-6">

    	<div class="page-new">
			<h3>Create Page</h3>

			<form action="<?php echo url_for('/staff/pages/new.php'); ?>" method="post">
		  		<div class="form-group">
		    	<label>Page Name</label>
		    	<input type="text" name="page" value="<?php echo h($page) ;?>" class="form-control" placeholder="Enter Page">
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
  				<button type="submit" value="create subject" class="btn btn-primary">Create Page</button>
  				</div>
		</form>

		</div>
		</div>
		</div>
		</div>

	</div>

<?php include SHARED_PATH .  '/staff_footer.php';?>