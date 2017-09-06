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
$menu_name = '';
$position = '';
$visible = ''; 

if(is_post_request()) {



$menu_name = isset($_POST['menu_name']) ? $_POST['menu_name'] : '';
$position = isset($_POST['position']) ? $_POST['position'] : '';
$visible = isset($_POST['visible']) ? $_POST['visible'] : '';

echo '<div class="container-fluid">';
echo "Form parameter<br />";
echo "Menu name: " . $menu_name . "<br/>";
echo "Position: " . $position . "<br/>";
echo "Visible: " . $visible . "<br/>";
echo "</div>";
} else{
//
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
    				<input type="text" name="menu_name" value="<?php echo $menu_name ; ?>" class="form-control" placeholder="Enter menu name">
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
  				<button type="submit" value="create subject" class="btn btn-primary">Edit subject</button>
  				</div>
			</form>
	</div>

	</div>
	</div>
	</div>


</div>

	<?php include SHARED_PATH .  '/staff_footer.php';?>



