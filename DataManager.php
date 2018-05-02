<?php	
	$text = $_POST["sentence"]; 
    	$file = fopen('WebInput.txt', 'w+'); 
    	ftruncate($file, 0); 
    	fwrite($file , $text); 
    	fclose($file );

	//shell_exec('Add_space.exe');
	shell_exec('python apple.py');
	shell_exec('Keywordmaker.exe');
	die(header("Location: ".$_SERVER["HTTP_REFERER"]));
?>