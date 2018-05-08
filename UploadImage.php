<?php
	//Setting ImgName and Directory used
	exec("GiveRandomImgName.exe");
	$input = file('RandomImgName.txt');
	$imgName = $input[0];	
	mkdir("Images/$imgName");
	$target_dir = "Images/$imgName/";
	$fileExtension = end(explode(".", $_FILES['FileToUpload']['name']));
	$Target_file = $target_dir . $imgName . "." . $fileExtension;	
	
	if (move_uploaded_file($_FILES['FileToUpload']['tmp_name'], $Target_file)) {
		echo "File Uploaded";
	}
	else {
		echo "ERROR";
	}
	
?>