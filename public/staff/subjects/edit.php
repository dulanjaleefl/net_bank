<?php 
require_once('../../../private/initialize.php'); 

/*if(!isset($_GET['id'])){
	redirect_to(url_for('/staff/subjects/index.php'));
} */

// Before using $_POST['value']    
if (isset($_GET['id'])) {
          $id = $_GET['id'];
      } else {
      	 $id = '';
      } 


if(is_post_request()) {


$subject = [];
$subject['id'] = $id;
$subject['menu_name'] = $_POST['menu_name'] ?? '';
$subject['position'] = $_POST['position'] ?? '';
$subject['visible'] = $_POST['visible'] ?? '';

$result = update_subject($subject);
redirect_to(url_for('/staff/subjects/show.php?id=' . $id));

} else{
	$subject = find_subject_by_id($id);
    $subject_set = find_all_subjects();
	$subject_count = mysqli_num_rows($subject_set);
	mysqli_free_result($subject_set);
}
?>


<?php $page_title = 'Edit Subject';?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div class="container-fluid" id="content">
	<a class="bacl-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

<!--bootstrap container-->
<div class="container">
  <div class="row">
    <div class="col-6">

	<div class="edit-new">
			<h3>Edit Subject</h3>

			<form action="<?php echo url_for('/staff/subjects/edit.php?id=' .  h(u($id))); ?>" method="post">
				<div class="form-group">
    				<label >Menu Name</label>
    				<input type="text" name="menu_name" value="<?php echo h($subject['menu_name']); ?>" class="form-control" placeholder="Enter menu name">
  				</div>

  				<div class="form-group">
    			<label >position</label>
				    <select name="position" class="form-control">
					<?php
					for ($i=1; $i <= $subject_count; $i++){
						echo "<option value=\"{$i}\"";
						if($subject["position"] == $i) {
							echo "selected";
						}
						echo ">{$i}</option>";
					}
				      ?>
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
  				<button type="submit" value="create subject" class="btn btn-primary">Edit subject</button>
  				</div>
			</form>
	</div>

	</div>
	</div>
	</div>


</div>

	<?php include SHARED_PATH .  '/staff_footer.php';?>



