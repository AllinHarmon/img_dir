<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>directory Listing</title>
</head>

<body>

<?php 
 $cars = new DirectoryIterator('i/cars');
foreach($cars as $fileInfo)
{
	if($fileInfo->isDot() || $fileInfo->isDir())
	{
		continue;
	}
	// \t adds a tab in html
	echo "\t<img src='". $fileInfo->getPathname() ."'alt='" .$fileInfo->getFilename()."' onclick='alert(\"" .$fileInfo->getFilename()."\")' />";
	
	// \n adds another line in html 
	echo "\n";
}
 
 ?>

</body>
</html>