<?php include 'header.php'; ?>

<br><br><br>
<table>
<tr>
   <th>File</th>
   <th>See</th>
   <th>Save</th>
 </tr>

<?php
$save = "//getyourdrinks.com/project/ENCRYPT/";
$down ="/../project/ENCRYPT/";
$files = scandir('./ENCRYPT');
foreach($files as $file) {
    if($file == '.' || $file == '..') continue;
  ?><tr><td><?php  echo $file;?> </td>
   <td><a href="<?php echo $down.$file; ?>">click</a></td>
    <td><div class="g-savetodrive"
         data-src="<?php echo $save.$file ;?>"
        data-filename="<?php echo $file ;?>"
         data-sitename="My Company Name">
    </div> </td> </tr>
<?php  } ?>

</table>

<?php include 'footer.php'; ?>
  


 


