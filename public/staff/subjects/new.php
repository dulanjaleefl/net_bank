<?php 

require_once('../../../private/initialize.php');

$test = isset($_GET['test']) ? $_test = $_GET['test'] : '';

if($test == '404'){
	error_404();
}elseif($test == '500'){
	error_500();
}elseif($test == 'redirect'){
	redirect_to(url_for('staff/subjects/index.php'));
	exit;
}
?>

<?php $page_title = 'Create Subject';?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div class="container-fluid" id="content">
	<a class="bacl-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

<!--bootstrap container-->
<div class="container">
  <div class="row">
    <div class="col-6">

	<div class="subject-new">
			<h3>Create Subject</h3>

			<form action="<?php echo url_for('/staff/subjects/create.php');?>" method="post">
				<div class="form-group">
    				<label >Menu Name</label>
    				<input type="text" name="menu_name" value="" class="form-control" placeholder="Enter menu name">
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
  				<button type="submit" value="create subject" class="btn btn-primary">Create subject</button>
  				</div>
			</form>
	</div>

	</div>
	</div>
	</div>


</div>

	<?php include SHARED_PATH .  '/staff_footer.php';?>



