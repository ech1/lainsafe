
<!DOCTYPE html>
<html>
<head>
    <title>FileSafe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="blacc" style="background-image: url('wallpaper.png'); "></br></br></br>
<div class="greeting0"><h1>PHP LainSafe</h1></div>
</br></br>
<img src="logo.png">
<h1>Max FileSize: 100mb</h1></br></br></br></br>

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

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input  type="file" name="file">
    <p>Drag your files here or click in this area. </p>
    <button  type="submit" name="submit">Upload</button>
</form>

<?php
print_r(isset($_POST['submit']));
?>

</br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br>
</div>
</body>

</html>
