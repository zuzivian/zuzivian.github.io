<html>

<head>
    <link rel="stylesheet" href="main.css">
</head>

<body>

<h1>Zuzivian's Lodge</h1>
<h3> List of projects</h3>
	
<p>doesn't matter! dark matter. ¯ðƒ©ˇ¸.˘˘˜˝©©'</p>	
<ul>
<?php
	$path = ".";
	$dh = opendir($path);
	$i=1;
	while (($file = readdir($dh)) !== false) {
	    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "main.css" && $file != "error_log" && $file != "cgi-bin") {
	        echo "<li><a href='$path/$file'>$file</a></li>";
	        $i++;
	    }
	}
	closedir($dh);
	
	?> 	

</ul>
</body>
</html>