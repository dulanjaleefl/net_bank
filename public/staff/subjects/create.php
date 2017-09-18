<?php

require_once('../../../private/initialize.php');

if(is_post_request()){

// handle form vales sent by new.php

$subject = [];
$subject['menu_name'] = isset($_POST['menu_name']) ? $_POST['menu_name'] : '';
$subject['position']= isset($_POST['position']) ? $_POST['position'] : '';
$subject['visible'] = isset($_POST['visible']) ? $_POST['visible'] : '';


$result = insert_subject($subject);
$new_id = mysqli_insert_id($db);
redirect_to(url_for('/staff/subjects/show.php?id=' . $new_id));


}else{
	
	redirect_to(url_for('staff/subjects/new.php'));
}

?>