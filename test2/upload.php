<?php
	header('Content-Type: application/json');

	//$allowed = ['png', 'jpg', 'svg'];
	$processed = [];

	foreach($_FILES['files']['name'] as $key => $name) {
		$fileSize=$_FILES['file']['size'];
		$fileTmpName=$_FILES['file']['tmp_name'];
		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));
		$not_allowed = array('sh','php');
		
		if($_FILES['files']['error'][$key] === 0 && $filesize < 100000000 && preg_match('/(<\?php\s)/',$input) == false && $fileActualExt, $not_allowed) == false ){
			$temp = $_FILES['files']['tmp_name'][$key];
			$ext = strtolower(end(explode('.', $name)));
			$file = uniqid('', true).time().'.'.$ext;
			$input = file_get_contents($_FILES['files']['tmp_name']);
			if(move_uploaded_file($temp, '../uploads/'.$file)) {
				$processed[] = array (
					'name' => $name,
					'file' => $file,
					'uploaded' => true
					);
			} else{
				$processed[] = array(
					'name' => $name,
					'uploaded' => false
					);
			}
		}
	}
	echo json_encode($processed);
?>
