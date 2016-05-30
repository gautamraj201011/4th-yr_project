
<?php
if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("txt");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors="extension not allowed, please choose a TEXT file.";
      }
      
      
      
      if(empty($errors)==true){
        // move_uploaded_file($file_tmp,"C:/xampp/htdocs/DES-3DES/images/".$file_name);
		$data = file_get_contents($file_tmp, FILE_USE_INCLUDE_PATH);
		//echo $message;
         echo "Success";
      }else{
         echo $errors;
      }
   }

   
   $dir = "./ENCRYPT/";


   $dir2 = "./DECRYPT/";



$save = "//getyourdrinks.com/project/ENCRYPT/";
$save2 = "//getyourdrinks.com/project/DECRYPT/";
?>



