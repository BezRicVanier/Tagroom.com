<?php

$iniFile = fopen("redwine.txt", "r") or die("Unable to open file!");
//$arrayIndex = fgets($iniFile);
$arrayIndex = 5;
fclose($iniFile);

for ($i = 0; $i <= $arrayIndex; $i++) {
	$aC = 0;
	
	//gets data from dynamically created text fields in the HTML page which it was sent from
	
	$tagText = "tagName".$aC;
	$tagName = $_POST[$tagText];

	$x1text = "x1text".$aC;
	$x1title = $_POST[$x1text];
	
	$x2text = "x2text".$aC;
	$x2title = $_POST[$x2text];
	
	$y1text = "y1text".$aC;
	$y1title = $_POST[$y1text];
	
	$y2text = "y2text".$aC;
	$y2title = $_POST[$y2text];
	
	$outFile = fopen("ImageFinal.txt", "w");
	
	fwrite($outFile, $tagName);
	fwrite($outFile, "\n");
	
	$x1out = $x1title;
	fwrite($outFile, $x1out);
	fwrite($outFile, "\n");
	
	$x2out = $x2title;
	fwrite($outFile, $x2out);
	fwrite($outFile, "\n");
	
	$y1out = $y1title;
	fwrite($outFile, $y1out);
	fwrite($outFile, "\n");
	
	$y2out = $y2title;
	fwrite($outFile, $y2out);
	fwrite($outFile, "\n");
	
	fwrite($outFile, "\n");
	fclose($outFile);
	
	$aC++;
	
	}
	
	die(header("Location: ".$_SERVER["HTTP_REFERER"]));

?>