<?php

function find_all_subjects(){
	global $db;
	$sql = "SELECT * FROM subjects ";
	$sql .= "ORDER BY position ASC";
	$result = mysqli_query($db, $sql);
	return $result;
}

function find_subject_by_id($id){
	global $db;
	
	$sql = "SELECT * FROM subjects ";
	$sql .= "WHERE id='" . $id . "'";
	$result = mysqli_query($db, $sql);
	$subject = mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	return $subject; // returns an assoc array
}

function insert_subject($subject){
global $db;	
$sql = "INSERT INTO subjects ";
$sql .= "(menu_name, position, visible)"  ;
$sql .= "VALUES (";
$sql .= "'" . $subject['menu_name'] . "',";
$sql .= "'" . $subject['position'] . "',";
$sql .= "'" . $subject['visible'] . "' ";
$sql .= ")";
$result = mysqli_query($db, $sql);
// For insert statements, $result is true/false

if($result){
	return true;
}else{
	//insert failed
	echo mysqli_error($db);
	db_disconnect($db);
	exit;
}

}

function update_subject($subject){
	global $db;
	
	$sql = "UPDATE subjects SET ";
$sql .= "menu_name='" . $subject['menu_name'] . "', ";
$sql .= "position='" . $subject['position'] . "', ";
$sql .= "visible='" . $subject['visible'] . "' ";
$sql .= "WHERE id='" . $subject['id'] . "' ";
$sql .= "LIMIT 1";

$result = mysqli_query($db, $sql);
// For UPDATE statements, $result is true/false
if($result){
	return true;

}else{
	//UPDATE fail
	echo mysqli_error($db);
	db_dissconnect($db);
	exit;
}
}


function find_all_pages(){
	global $db;
	$sql = "SELECT * FROM pages ";
	$sql .= "ORDER BY subject_id ASC, position ASC";
	$result = mysqli_query($db, $sql);
	return $result;
}

function delete_subject($id){
	global $db;
	$sql = "DELETE FROM subjects ";
	$sql .= "WHERE id='" . $id . "' ";
	$sql .= "LIMIT 1";
	
	$result = mysqli_query($db, $sql);
	
	// FORdelete stratements the $result is true/false
	if($result){
		return true;
	} else{
		//DELETE failed
		echo mysqli_error($db);
		db_dissconnect($db);
		exit;
	}
}

function find_page_by_id($id){
	global $db;
	
	$sql = "SELECT * FROM pages ";
	$sql .= "WHERE id='" . $id . "'";
	$result = mysqli_query($db, $sql);
	$page = mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	return $page; // returns an assoc. array
}

function insert_page($page){
	global $db;
	
	$sql = "INSERT INTO pages ";
	$sql .= "(subject_id, menu_name, position, visible, content)" ;
	$sql .= "VALUES (" ;
	$sql .= "'" . $page['subject_id'] . "'," ;
	$sql .= "'" . $page['menu_name'] . "'," ;
	$sql .= "'" . $page['position'] . "'," ;
	$sql .= "'" . $page['visible'] . "'," ;
	$sql .= "'" . $page['content'] . "'" ;
	$sql .= ")";
	$result = mysqli_query($db, $sql);
	///foe INSERT statements, $result is true/fals
	if($result){
		return true;
	} else {
		// INSERT failed
		echo mysql_error($db);
		db_disconnect($db);
		exit;
	}
}

function update_page($page) {
    global $db;

    $sql = "UPDATE pages SET ";
    $sql .= "subject_id='" . $page['subject_id'] . "', ";
    $sql .= "menu_name='" . $page['menu_name'] . "', ";
    $sql .= "position='" . $page['position'] . "', ";
    $sql .= "visible='" . $page['visible'] . "', ";
    $sql .= "content='" . $page['content'] . "' ";
    $sql .= "WHERE id='" . $page['id'] . "' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);
    // For UPDATE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // UPDATE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }

  }

function delete_page($id){
	global $db;
	
	$sql = "DELETE FROM pages ";
	$sql .= "WHERE id='" . $id . "' ";
	$sql .= "LIMIT 1";
	
	$result = mysqli_query($db, $sql);
	
	// FOR delete stratements the $result is true/false
	if($result){
		return true;
	} else{
		//DELETE failed
		echo mysqli_error($db);
		db_dissconnect($db);
		exit;
	}
}
?>




