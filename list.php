<!DOCTYPE html>
<html>
<head>
	<?php  

	


 $my_file = 'file.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = $_GET['hname'];

fwrite($handle, $data);
fclose($handle);
$my_file = 'mostsearched.txt';
$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
$data = $_POST['searchValue'];
fwrite($handle, $data);
fclose($handle);

$resultarray=json_decode($result);
newsearch();

$url='Location: singlepage.php?hname='.$_GET["hname"];
header($url);

 


function newsearch()
{
    
  exec("hi.py");
  
}

	?>
	<title>
		
	</title>
</head>
<body>

</body>
</html>