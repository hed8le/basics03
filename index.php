<!DOCTYPE html>
<html>

<head>
	<title>...</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	
	<?php  
	/******* 1.Variables ***************************/
		$a=5.4;
		$b="PHP";
		echo "Version: $b" . "$a<br>";
		$c=strtolower($b);
		echo "Klein geschrieben: $c<br>";

	/******* 2.Arrays ***************************/
		$d=[1,2,"test"];
		foreach($d as $tmp){ echo "Wert: $tmp<br>"; }
		$d[]=4;
		echo "Neuer Wert: " . $d[3] . "<br>";
		$e=array("a"=>"23","b"=>"Hallo","c"=>"5");
		print_r($e);
		extract($e);
		echo "<br>" . 'Neuer Wert für $b: ' . "$b<br>";

	/******* 3.Verzweigungen ***************************/
		$e=4;
		if(is_array($e)){
			echo '$e ist ein Array!' . "<br>";
		} else {
			echo 'No Array.' . "<br>";
		}
		$f=[1,2,3,4,5,6];
		foreach($f as $tmp) {
			// Endlosschleife. Wie erhöhe ich $tmp?
			while ($tmp < 3) {
				echo "Ok.<br>";
				exit;
			}
		}

	?>

</body>

</html>