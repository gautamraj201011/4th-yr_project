<?php
include 'header.php';
require 'load.php';
    # --- ENCRYPTION ---

    # the key should be random binary, use scrypt, bcrypt or PBKDF2 to
    # convert a string into a key
    # key is specified using hexadecimal
    	$k=$_POST['key'];;
	echo strlen($k);
	$key=stringToHex($k);
	echo strlen($key);
    $key = pack('H*', $key);
	
    # show key size use either 16, 24 or 32 byte keys for AES-128, 192
    # and 256 respectively
    $key_size =  strlen($key);
    echo "Key size: " . $key_size . "\n";
    
    
	$plaintext = $data;
    # create a random IV to use with CBC encoding
    $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
	echo $iv_size;
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    
    # creates a cipher text compatible with AES (Rijndael block size = 128)
    # to keep the text confidential 
    # only suitable for encoded input that never ends with value 00h
    # (because of default zero padding)
    $ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key,
                                 $plaintext, MCRYPT_MODE_CBC, $iv);

    # prepend the IV for it to be available for decryption
    $ciphertext = $iv . $ciphertext;
    
    # encode the resulting cipher text so it can be represented by a string
    $ciphertext_base64 = base64_encode($ciphertext);

    echo  $ciphertext_base64 . "\n";
	file_put_contents($dir.$file_name, $ciphertext_base64, LOCK_EX);
	echo "file saved at".$dir.$file_name;
	echo "<br>";
function stringToHex ($s) {
  $r = "";
  $hexes = array ("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f");
  for ($i=0; $i<strlen($s); $i++) {$r .= ($hexes [(ord($s{$i}) >> 4)] . $hexes [(ord($s{$i}) & 0xf)]);}
  return $r;
}

function hexToString ($h) {
  $r = "";
  for ($i= (substr($h, 0, 2)=="0x")?2:0; $i<strlen($h); $i+=2) {$r .= chr (base_convert (substr ($h, $i, 2), 16, 10));}
  return $r;
}

$down ="/../project/ENCRYPT/";
echo $down.$file_name;
?>

<br>br><br><br><br><br><br><br>
<a href="<?php echo $down.$file_name; ?>">To see click here</a>


<div class="g-savetodrive"
         data-src="<?php echo $save.$file_name ;?>"
        data-filename="<?php echo $file_name ;?>"
         data-sitename="My Company Name">
    </div>
<?php include 'footer.php';?>