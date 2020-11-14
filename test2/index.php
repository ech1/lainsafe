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

<div class="greeting0"><h1>LainSafe </h1> </div>


<div class="upload-console">
<h2 class="upload-console-header">Upload</h2>
<div class="upload-console-body">
	<h3>Select files from your computer</h3>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="files[]" id="standard-upload-files" multiple>
		<input type="submit" value="Upload files" id="standard-upload">
	</form>

<div style="float: left; width:1%;" class="upload-console-body">
	<img src="logo.png">
</div>

<div style="float: right; width:60%;" class="upload-console-body">

	<h3>Drag and drop files below</h3>
	<div class="upload-console-drop" id="drop-zone">
		Just drag and drop files here
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
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/upload.js"></script>
	<script type="text/javascript" src="js/global.js"></script>
</body>
</html>
