<?php
	function rrmdir($dir)
	{
		if (is_dir($dir))
		{
			$files = scandir($dir);
			foreach ($files as $file)
				if ($file != "." && $file != "..")
					rrmdir("$dir/$file");
				rmdir($dir);
		}
		else if (file_exists($dir))
			unlink($dir);
	}
	
	function rcopy($source, $dest)
	{
		if (file_exists($dest))
			rrmdir($dest);
		if (is_dir($source))
		{
			mkdir($dest);
			$files = scandir($source);
			foreach ($files as $file)
				if ($file != "." && $file != "..")
					rcopy("$source/$file", "$dest/$file");
		}
		else if(file_exists($source))
			copy($source, $dest);
	}
	
	exec("GiveRandomClientNumber.exe");
	//$MyFile = fopen('RandomClientNumber.txt', 'r');
	$file = file('RandomClientNumber.txt');
	//echo $file[0];
	//$Num = fread($MyFile, filesize("RandomClientNumber.txt"));
	$Num = $file[0];
	//fclose($MyFile);
	$ClientName = "Clients\Client" . $Num;
	$NewClientFiles = "NewClientFiles";
	
	//exec("mkdir " . $ClientName);
	//echo exec("xcopy C:\xampp\htdocs\NewClientFiles " . $ClientName . " /h /i /c /k /e /r /y");
	rcopy($NewClientFiles, $ClientName);
?>