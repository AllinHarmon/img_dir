<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>directory Listing</title>
</head>

<body>

<?php 
 $cars = new DirectoryIterator('i/cars');
$temp =array();

foreach($cars as $fileInfo)
{
	if($fileInfo->isDot() || $fileInfo->isDir())
	{
		continue;
	}
	
	$temp.push($fileInfo->getFilename());
	
}
foreach($temp as $item)
{ 
sort($temp);
 
	// \t adds a tab in html
	echo "\t<img src='". $item->getPathname() ."'alt='" .$item->getFilename()."' onclick='alert(\"" .$item->getFilename()."\")' />";
	
	// \n adds another line in html 
	echo "\n";
 }
 
 ?>

</body>
</html>