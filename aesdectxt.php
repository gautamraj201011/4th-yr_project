<?php
include 'header.php';
require 'load.php';
$ciphertext_base64=$data;
	# === WARNING ===

    # Resulting cipher text has no integrity or authenticity added
    # and is not protected against padding oracle attacks.
    
    # --- DECRYPTION ---
    # the key should be random binary, use scrypt, bcrypt or PBKDF2 to
    # convert a string into a key
    # key is specified using hexadecimal
    	$k=$_POST['key'];;
	//echo strlen($k);
	$key=stringToHex($k);
	//echo strlen($key);
    $key = pack('H*', $key);
	
    # show key size use either 16, 24 or 32 byte keys for AES-128, 192
    # and 256 respectively
    $key_size =  strlen($key);
    //echo "Key size: " . $key_size . "\n";
	
	
	$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
	//echo $iv_size;
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    
    
    $ciphertext_dec = base64_decode($ciphertext_base64);
    
    # retrieves the IV, iv_size should be created using mcrypt_get_iv_size()
    $iv_dec = substr($ciphertext_dec, 0, $iv_size);
    
    # retrieves the cipher text (everything except the $iv_size in the front)
    $ciphertext_dec = substr($ciphertext_dec, $iv_size);

    # may remove 00h valued characters from end of plain text
    $plaintext_dec = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key,
                                    $ciphertext_dec, MCRYPT_MODE_CBC, $iv_dec);
    
    echo  $plaintext_dec . "\n";
	file_put_contents($dir2.$file_name, $plaintext_dec, LOCK_EX);
	echo "file saved at".$dir2.$file_name;
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



$down ="/../project/DECRYPT/";
//echo $down.$file_name;
?>

<br><br><br><br><br><br><br><br><br><br>
<a href="<?php echo $down.$file_name; ?>">to see click here</a>

<div class="g-savetodrive"
         data-src="<?php echo $save2.$file_name ;?>"
        data-filename="<?php echo $file_name ;?>"
         data-sitename="My Company Name">
    </div>

<?php include 'footer.php'; ?>