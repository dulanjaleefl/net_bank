<?php 
require_once('../../../private/initialize.php'); ?>

<?php 

if(!isset($_GET['id'])){
	redirect_to(url_for('/staff/pages/index.php'));
}

$id = $_GET['id'] ;

if(is_post_request()){
	// handle form values sent by new.php
	$page = [];
	$page['id'] = $id;
	$page['subject_id'] = $_POST['subject_id'] ?? '';
	$page['menu_name'] = $_POST['menu_name'] ?? '';
	$page['position'] = $_POST['position'] ?? '';
	$page['visible'] = $_POST['visible'] ?? '' ;
	$page['content'] = $_POST['content'] ?? '';
	
	$result = update_page($page);
	redirect_to(url_for('/staff/pages/show.php?id=' . $id));
	
	 }else {
		$page = find_page_by_id($id);
		
		$page_set = find_all_pages();
		$page_count = mysqli_num_rows($page_set);
		mysqli_free_result($page_set);
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

    	<div class="page-edit">
			<h3>Edit Page</h3>

			<form action="<?php echo url_for('/staff/pages/edit.php?id=' . h(u($id))); ?>" method="post">
		  		<dl>
					<label>Subject</label>
					<dd>
						<select name="subject_id" class="form-control">
          <?php
            $subject_set = find_all_subjects();
            while($subject = mysqli_fetch_assoc($subject_set)) {
              echo "<option value=\"" . h($subject['id']) . "\"";
              if($page["subject_id"] == $subject['id']) {
                echo " selected";
              }
              echo ">" . h($subject['menu_name']) . "</option>";
            }
            mysqli_free_result($subject_set);
          ?>
          </select>
					</dd>
				</dl>
                <dl>
        <label>Menu Name</label>
        <dd><input type="text" name="menu_name" class="form-control" value="<?php echo h($page['menu_name']); ?>" /></dd>
      </dl>
      <dl>
                
				<dl>
					<label>Position</label>
					<dd>
						<select name="position" class="form-control" >
						<?php
							for($i=1; $i <= $page_count; $i++){
								echo "<option value=\"{$i}\"";
								if($page["position"] == $i){
									echo " selected";
								}
								echo ">{$i}</option>";
							}
						?>
						</select>
					</dd>
				</dl>
				<dl>
					<label>Visible</label>
					<dd>
						<input type="hidden" name="visible" value="0" />
						<input type="checkbox" name="visible" value="1"<?php if($page['subject_id'] == "1"){
						echo " checked"; } ?> />
					</dd>
				</dl>
				<dl>
					<label>Content</label>
					<dd>
						<textarea name="content" cols="60" rows="10"><?php echo h($page['content']); ?>
						</textarea>
					</dd>
				</dl>
				<div id="operartions">
					<input class="btn btn-primary" type="submit" value="Edit Page" />
				</div>
			</form>
		</div>
		
		</div>
		</div>
		</div>
		</div>
				
		<?php include SHARED_PATH .  '/staff_footer.php';?>