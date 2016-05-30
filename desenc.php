<?php
include 'header.php';
require 'des.php';
require 'load.php';
$plaintext=$data;

echo "<PRE>";
$key = $_POST['key'];

$ciphertext = des ($key, $plaintext, 1, 0, null,null);
$file = $dir.$file_name;
$msg = stringToHex ($ciphertext);
// Write the contents to the file, 
// using the FILE_APPEND flag to append the content to the end of the file
// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
file_put_contents($file, $msg, LOCK_EX);
$down ="/../project/ENCRYPT/";
?>


<a href="<?php echo $down.$file_name; ?>">click</a>

<div class="g-savetodrive"
         data-src="<?php echo $save.$file_name ;?>"
        data-filename="<?php echo $file_name ;?>"
         data-sitename="My Company Name">
    </div>

<?php include 'footer.php';