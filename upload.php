<?php

$allowed = array('png', 'jpg', 'gif');
if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){
	$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);
	if(!in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		exit;
	}
	if(move_uploaded_file($_FILES['upl']['tmp_name'], "galaxy-a/uploads/".$_FILES['upl']['name'])){		
		//echo 'http://appss.misiva.com.ec/galaxy-a/uploads/'.$_FILES['upl']['name'];
		echo 'http://localhost/appss/galaxy-a/uploads/'.$_FILES['upl']['name'];
		exit;
	}
}

echo '{"status":"error"}';

exit;
