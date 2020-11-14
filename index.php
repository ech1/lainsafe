<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LainSafe</title>
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="wrapper">

<!--<div class="greeting0"><h1>LainSafe </h1> </div>-->


<div class="upload-console" >
<h2 class="upload-console-header">LainSafe</h2>
<h3>Max FileSize: 100mb</h3>
<div>

	
	<div style="float: left; width:25%;">
<img src="logo.png">
<?php
function formatBytes($size, $precision = 2)
{
    $base = log($size, 1024);
    $suffixes = array('', 'K', 'M', 'G', 'T');

    return round(pow(1024, $base - floor($base)), $precision) . $suffixes[floor($base)];
}


$df = formatBytes(disk_free_space('/'),2);
$dt = formatBytes(disk_total_space('/'),2);
$string='<span style="color:#999;text-align:center;">';
$string2='</span>';
echo $string . "$df / $dt total" . $string2;
?>
	</div>
	
	<div style="float: right; width:60%;">
	</br></br></br>
		<h3>Drag and drop files below</h3>
		<div class="upload-console-drop" id="drop-zone">
			<img src="files.svg" style="width:80px; margin-top: 10px;">
		</div>
	
		<div class="bar">
			<div class="bar-fill" id="bar-fill">
				<div class="bar-fill-text" id="bar-fill-text">
				</div>
			</div>
		</div>
		<div id="uploads-finished" class="hidden">
			<h3>Processed files</h3>
		</div>
		</div>
	</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<h3>Select files from your computer</h3>
			<input type="file" name="files[]" id="standard-upload-files" multiple>
			<input class="fileupload" type="submit" value="Upload files" id="standard-upload">
	</form>


			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/upload.js"></script>
	<script type="text/javascript" src="js/global.js"></script>
</body>
</html>
