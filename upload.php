<html>
<head>
<title>Upload</title>
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
<div align="center">
<?php

include("config.php");

if (!empty($_FILES))
{
	$fileName = uniqid() . "_" . $_FILES["pic_file"]["name"];
	
	if (!move_uploaded_file($_FILES["pic_file"]["tmp_name"], $folder . $fileName)) {		
		echo "<p>Cannot move uploaded file, so sad. :-(</p>";
	}	else {
		
		$url = $server . $folder . $fileName;
		
		
		echo "<p><a href=\"" . $url . "\">" . $url . "</a></p><br>";
		echo "<p><img src=\""  . $folder . $fileName . "\">";		
	}
	
} else {
	echo "<p>No file was uploaded :-(</p>";
}

?>
</div>
</body>
</html>