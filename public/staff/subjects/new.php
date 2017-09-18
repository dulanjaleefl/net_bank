<?php 

require_once('../../../private/initialize.php');

$subject_set = find_all_subjects();
$subject_count = mysqli_num_rows($subject_set) + 1;
mysqli_free_result($subject_set);

$subject = [];
$subject["position"] = $subject_count;

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
  				<button type="submit" value="create subject" class="btn btn-primary">Create subject</button>
  				</div>
			</form>
	</div>

	</div>
	</div>
	</div>


</div>

	<?php include SHARED_PATH .  '/staff_footer.php';?>



