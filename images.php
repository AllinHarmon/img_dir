<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Listing images in a directory</title>
</head>

<body>

<?php 
 /*
  // working with a single directory
 $cars = new DirectoryIterator('i/cars');
 foreach($cars as $fileInfo)
 {
	 if($fileInfo->isDot() || $fileInfo->isDir())
	 {
		 continue;
	 }
	 
	echo "<img src='". $fileInfo->getPathname() ."' alt='".$fileInfo->getFilename()."' onclick='alert(\"".$fileInfo->getFilename()."\")' />";
	echo "\n"; 
 }
*/

$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('i'));
$images = new RegexIterator($files, '/\.(?:jpg|png|gif)$/i');
foreach ($images as $file) {
	$path = explode('/', $file);
	$name = $path[count($path)-1];
	
	echo '<img src="' . $file . '" alt="'. $name .'" />';
	echo "\n<br>";
}
?>

</body>
</html>