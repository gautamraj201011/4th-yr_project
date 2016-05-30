<?php
include 'header.php';
require 'des.php';
require 'load.php';
$data=hexToString($data);

echo "<PRE>";
$key =$_POST['key'];
$recovered_message = des ($key, $data, 0, 0, null,null);
$file = $dir2.$file_name;
//echo "file saved at ".$file;
$msg = $recovered_message;
// Write the contents to the file, 
// using the FILE_APPEND flag to append the content to the end of the file
// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
file_put_contents($file, $msg, LOCK_EX);
$down ="/../project/DECRYPT/";
//echo $down.$file_name;
?>


<a href="<?php echo $down.$file_name; ?>">click here to view</a>

<div class="g-savetodrive"
         data-src="<?php echo $save2.$file_name ;?>"
        data-filename="<?php echo $file_name ;?>"
         data-sitename="My Company Name">
</div>

<?php include 'footer.php'; ?>