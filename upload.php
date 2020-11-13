
<?php
// Program to display URL of current page.
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $link = "https";
else
    $link = "http";
// Here append the common URL characters.
$link .= "://";
// Append the host(domain name, ip) to the URL.
$link .= $_SERVER['HTTP_HOST'];
// Append the requested resource location to the URL
//$link .= $_SERVER['REQUEST_URI'];
// Print the link
//echo $link;

if(isset($_POST['submit'])){
    //code
    $file=$_FILES['file'];

    //check if there's no php in there:
    $input=file_get_contents($_FILES["fileToUpload"]["tmp_name"]);

    if (pgrep_match('/(<\?php\s)/',$input)){
        echo 'not allowed';
    } else {
        $input = str_replace(chr(0), '', $input); // nullbyte insertion protection
    }

    //in index.php we named the file "file"
    //print_r($file);
    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];

    //name > imagefile.jpg so we separate . and jpg
    $fileExt = explode('.', $fileName);         //JpG
    $fileActualExt = strtolower(end($fileExt)); //jpg

    $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'avi', 'txt','sh','conf');
    if(in_array($fileActualExt, $allowed)){
        //if extension is in there:
        if($fileError === 0){
            if($fileSize < 100000000){ //less than 100mb
                //unique id for the file uploaded (to avoid overwrites)

                $fileNameNew= uniqid('', true).".".$fileActualExt;
                //time format in microseconds, becomes unique! so : 216155646120.png

                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                //header("Location: index.php?uploadsuccess");

                echo $link.'/uploads/'.$fileNameNew;
                $filemb=$fileSize/1000000;
                echo "</br></br>";
                echo "filesize =".$filemb."mb";
                echo "  </br></br>Return to <a href='index.php'>Home</a>";
            }else{
                echo "your file is too big!".$fileSize;
            }

        } else{
            echo "error during upload!";
        }

    }else{
        echo "you cant upload this filetype!";
    }
}
?>




