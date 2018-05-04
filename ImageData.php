<?php	

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "AnnotationData";	

	$x1title = $_POST["x1Title"];
	$y1title = $_POST["y1Title"];
	$x2title = $_POST["x2Title"];
	$y2title = $_POST["y2Title"];
 
    	$file = fopen('ImageInput.txt', 'w+'); 
    	ftruncate($file, 0);
 
    	fwrite($file , $x1title);
	fwrite($file, "\r\n");
	fwrite($file , $y1title);
	fwrite($file, "\r\n");
	fwrite($file , $x2title);
	fwrite($file, "\r\n");
	fwrite($file , $y2title);
	fwrite($file, "\r\n"); 
    	fclose($file );

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed; " . $conn->connect_error);
	}

	$sql = "INSERT INTO ImageAnnotation (x1, y1, x2, y2)
	VALUES ($x1title, $y1title, $x2title, $y2title)";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	die(header("Location: ".$_SERVER["HTTP_REFERER"]));
?>